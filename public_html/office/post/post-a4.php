<?
$GID = $_REQUEST['GID'];

//echo "xxx=".$taxGetID;
require("../../../office-data/fpdf/fpdf.php");
require("../../../office-data/classes/adminlogin.php");
require("../../../office-data/config/default-config.php");
require("../../../office-data/config/db-connect.php");
require("../../../office-data/classes/num2text.class.php");

$adminlogin = new adminlogin();

$SQL_POST = "SELECT * FROM siamsoft.ss_billing_customer WHERE ID='".$GID."'";

$RESULT_POST=$adminlogin->query($SQL_POST);
$ROW_POST= mysql_fetch_array($RESULT_POST);

//$SQL_COID = "SELECT * FROM ss_post_cocode WHERE COID='".$ROW_POST['COID']."'";

//$RESULT_COID=$adminlogin->query($SQL_COID);
//$ROW_COID= mysql_fetch_array($RESULT_COID);



$RNAME= $ROW_POST['ContactPerson'];

$CONAME= $ROW_POST['LetterCompanyName'];

$ADD1 = $ROW_POST['LetterAddress'];

$ADD2 = $ROW_POST['LetterAddress2'];

//$ADD3 = $ROW_POST['Add3'];

$ZIP = $ROW_POST['LetterZipCode'];
//$TOTAL1= $ROW_POST['TOTAL1'];

//$n2s = new num2text;
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

$pdf->Image('siamsoft-logo.jpg', 4, 4, 0,20);
$pdf->SetFont('DilleniaUPC','B',14);
$SS_L0 ="";
$pdf->MultiCell(0,1, $SS_L0, 0, 'L');

$SS_MYCOMPANY_NAME ="                                          ";
$SS_MYCOMPANY_NAME .="บริษัท สยามซอฟท์ดอทคอม จำกัด    สำนักงานใหญ่";
$pdf->MultiCell(0,0, $SS_MYCOMPANY_NAME, 0, 'L');

$pdf->MultiCell(0,5, $SS_L0, 0, 'L');

$SS_MYCOMPANY_ADDRESS ="                                          ";
$SS_MYCOMPANY_ADDRESS .="51 ซอยอ่อนนุช65 แยก9 ถนนอ่อนนุช แขวงประเวศ เขตประเวศ กรุงเทพฯ 10250";
$pdf->MultiCell(0,0, $SS_MYCOMPANY_ADDRESS, 0, 'L');

$pdf->MultiCell(0,5, $SS_L0, 0, 'L');

$SS_MYCOMPANY_TAX_ID ="                                          ";
$SS_MYCOMPANY_TAX_ID .="เลขประจำตัวผู้เสียภาษี 0105550004177";
$pdf->MultiCell(0,0, $SS_MYCOMPANY_TAX_ID, 0, 'L');


$SS_L0 ="";
$pdf->MultiCell(0,60, $SS_L0, 0, 'L');
//////////////////////
$pdf->SetFont('DilleniaUPC','B',16);

$SS_PLEASE_SEND ="                                                    ";
$SS_PLEASE_SEND .="กรุณาส่ง";
$pdf->MultiCell(0,0, $SS_PLEASE_SEND, 0, 'L');

//////////////////////
$pdf->MultiCell(0,10, $SS_L0, 0, 'L');

$SS_RNAME ="                                                                   ";
$SS_RNAME .=$RNAME;
$pdf->MultiCell(0,0, $SS_RNAME, 0, 'L');

$pdf->MultiCell(0,10, $SS_L0, 0, 'L');

$SS_CONAME ="                                                                   ";
$SS_CONAME .=$CONAME;
$pdf->MultiCell(0,0, $SS_CONAME, 0, 'L');

$pdf->MultiCell(0,10, $SS_L0, 0, 'L');

$SS_ADD1 ="                                                                   ";
$SS_ADD1 .=$ADD1;
$pdf->MultiCell(0,0, $SS_ADD1, 0, 'L');

$pdf->MultiCell(0,10, $SS_L0, 0, 'L');

$SS_ADD2 ="                                                                   ";
$SS_ADD2 .=$ADD2;
$pdf->MultiCell(0,0, $SS_ADD2, 0, 'L');

$pdf->MultiCell(0,10, $SS_L0, 0, 'L');

$SS_ADD3 ="                                                                   ";
$SS_ADD3 .=$ADD3;
$pdf->MultiCell(0,0, $SS_ADD3, 0, 'L');

$pdf->MultiCell(0,10, $SS_L0, 0, 'L');
//////////////////
$pdf->SetFont('DilleniaUPC','B',32);
$SS_ZIP ="                                                       ";
$SS_ZIP .=$ZIP;
$pdf->MultiCell(0,0, $SS_ZIP, 0, 'L');
//////////////////////



$pdf->Output();

//$pdf->Output();

?>