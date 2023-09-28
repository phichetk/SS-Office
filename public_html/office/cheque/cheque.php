<?
$GID = $_REQUEST['GID'];

//echo "xxx=".$taxGetID;
require("../../../office-data/fpdf/fpdf.php");
require("../../../office-data/classes/adminlogin.php");
require("../../../office-data/config/default-config.php");
require("../../../office-data/config/db-connect.php");
require("../../../office-data/classes/num2text.class.php");

$adminlogin = new adminlogin();

$SQL_CHEQUE = "SELECT * FROM ss_cheque WHERE ID='".$GID."'";

$RESULT_CHEQUE=$adminlogin->query($SQL_CHEQUE);
$ROW_CHEQUE= mysql_fetch_array($RESULT_CHEQUE);

$SQL_APID = "SELECT * FROM ss_taxw_apcode WHERE APID='".$ROW_CHEQUE['APID']."'";

$RESULT_APID=$adminlogin->query($SQL_APID);
$ROW_APID= mysql_fetch_array($RESULT_APID);

$PaidName= $ROW_APID['APName'];

$PAIDDATE001= $ROW_CHEQUE['PAIDDATE'];

$PAIDDATE = preg_split('//', $PAIDDATE001, -1, PREG_SPLIT_NO_EMPTY);

$TOTAL1= $ROW_CHEQUE['TOTAL1'];

$n2s = new num2text;
//echo $n2s;
//$SS_OwnID = $n2s->convert('98415124.1245');

class PDF extends FPDF {
    /*
	function SetThaiFont() {
		$this->AddFont('DilleniaUPC','B','dillb.php');

	}
    */
	
	function conv($string) {
		return iconv('UTF-8', 'TIS-620', $string);
		return $string;
	}
}

$pdf = new PDF('L','mm','A4');


//require('fpdf.php');
 
//$pdf=new FPDF( 'P' , 'mm' , array( 100,200 ) );
$pdf->AddFont('DilleniaUPC','B','dillb.php');
$pdf->AddPage();


$pdf->SetFont('DilleniaUPC','B',14);
$SS_L0 ="";
$pdf->MultiCell(0,1, $SS_L0, 0, 'L');
//////////////////////

$pdf->MultiCell(0,50, $SS_L0, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
$pdf->SetFont('DilleniaUPC','B',26);

//////////////////
$SS_PaidDate ="                                                                    ";
$SS_PaidDate .=$PAIDDATE;
//$pdf->MultiCell(0,0, $SS_PaidDate, 0, 'L');

//////////////////
$SS_PaidDate0 ="                                                   ";
$SS_PaidDate0 .=$PAIDDATE[0];
$pdf->MultiCell(0,0, $SS_PaidDate0, 0, 'L');

//////////////////
$SS_PaidDate1 ="                                                       ";
$SS_PaidDate1 .=$PAIDDATE[1];
$pdf->MultiCell(0,0, $SS_PaidDate1, 0, 'L');

//////////////////
$SS_PaidDate2 ="                                                         ";
$SS_PaidDate2 .=$PAIDDATE[2];
$pdf->MultiCell(0,0, $SS_PaidDate2, 0, 'L');

//////////////////
$SS_PaidDate3 ="                                                           ";
$SS_PaidDate3 .=$PAIDDATE[3];
$pdf->MultiCell(0,0, $SS_PaidDate3, 0, 'L');

//////////////////
$SS_PaidDate4 ="                                                              ";
$SS_PaidDate4 .=$PAIDDATE[4];
$pdf->MultiCell(0,0, $SS_PaidDate4, 0, 'L');

//////////////////
$SS_PaidDate5 ="                                                                    ";
$SS_PaidDate5 .=$PAIDDATE[5];
$pdf->MultiCell(0,0, $SS_PaidDate5, 0, 'L');

//////////////////
$SS_PaidDate6 ="                                                                      ";
$SS_PaidDate6 .=$PAIDDATE[6];
$pdf->MultiCell(0,0, $SS_PaidDate6, 0, 'L');

//////////////////
$SS_PaidDate7 ="                                                                        ";
$SS_PaidDate7 .=$PAIDDATE[7];
$pdf->MultiCell(0,0, $SS_PaidDate7, 0, 'L');



$pdf->SetFont('DilleniaUPC','B',14);
///////////////////////
$pdf->MultiCell(0,14, $SS_L0, 0, 'L');
//////////////////
$SS_PaidName ="           ";
$SS_PaidName .=$PaidName;
$pdf->MultiCell(0,0, $SS_PaidName, 0, 'L');
///////////////////////
//////////////////
$SS_OrBearer1 ="                                                                    ";
$SS_OrBearer1 .="                                                                    ";
$SS_OrBearer1 .="////////";
$pdf->MultiCell(0,0, $SS_OrBearer1, 0, 'L');
///////////////////////
$pdf->MultiCell(0,3, $SS_L0, 0, 'L');
//////////////////
$SS_OrBearer2 ="                                                                    ";
$SS_OrBearer2 .="                                                                    ";
$SS_OrBearer2 .="////////";
$pdf->MultiCell(0,0, $SS_OrBearer2, 0, 'L');
///////////////////////
$pdf->MultiCell(0,10, $SS_L0, 0, 'L');
//////////////////
$SS_Total1txt ="                           ";
$SS_Total1txt .=$n2s->convert(number_format($TOTAL1, 2, '.', ','));
$pdf->MultiCell(0,0, $SS_Total1txt, 0, 'L');
//////////////////
$pdf->SetFont('DilleniaUPC','B',14);
$pdf->MultiCell(0,10, $SS_L0, 0, 'L');
//////////////////
$pdf->SetFont('DilleniaUPC','B',26);
$SS_Total1 ="                                                    ";
$SS_Total1 .=number_format($TOTAL1, 2, '.', ',');
$pdf->MultiCell(0,0, $SS_Total1, 0, 'L');
//////////////////////

$pdf->Output();

//$pdf->Output();

?>