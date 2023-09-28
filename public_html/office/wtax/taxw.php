<?
$GID = $_REQUEST['GID'];

//echo "xxx=".$taxGetID;
require("../../../office-data/fpdf/fpdf.php");
require("../../../office-data/classes/adminlogin.php");
require("../../../office-data/config/default-config.php");
require("../../../office-data/config/db-connect.php");
require("../../../office-data/classes/num2text.class.php");

$adminlogin = new adminlogin();

$SQL_TAXW = "SELECT * FROM ss_taxw WHERE ID='".$GID."'";
//echo $SQL_TAXW;
$RESULT_TAXW=$adminlogin->query($SQL_TAXW);
$ROW_TAXW= mysql_fetch_array($RESULT_TAXW);

$SQL_COMPID = "SELECT * FROM ss_taxw_compcode WHERE CompID='".$ROW_TAXW['CompID']."'";
//echo $SQL_COMPID;
$RESULT_COMPID=$adminlogin->query($SQL_COMPID);
$ROW_COMPID= mysql_fetch_array($RESULT_COMPID);

$SQL_APID = "SELECT * FROM ss_taxw_apcode WHERE APID='".$ROW_TAXW['APID']."'";
//echo $SQL_APID;
$RESULT_APID=$adminlogin->query($SQL_APID);
$ROW_APID= mysql_fetch_array($RESULT_APID);

//$PostType= ['TaxID'];
$TaxID= $ROW_TAXW['TaxID'];
//$inputAddress= $ROW_TAXW['inputAddress'];
/*
$OwnName= $ROW_TAXW['OwnName'];
$OwnAddress= $ROW_TAXW['OwnAddress'];
$OwnBusinessNumber= $ROW_TAXW['OwnBusinessNumber'];
$OwnTaxNumber= $ROW_TAXW['OwnTaxNumber'];
*/
$OwnName= $ROW_COMPID['CompName'];
$OwnAddress= $ROW_COMPID['CompAddress'];
$OwnTaxNumber= $ROW_COMPID['CompTaxNo'];
/*
$PaidName= $ROW_TAXW['PaidName'];
$PaidAddress= $ROW_TAXW['PaidAddress'];
$PaidBusinessNumber= $ROW_TAXW['PaidBusinessNumber'];
$PaidTaxNumber= $ROW_TAXW['PaidTaxNumber'];
$PaidType1= $ROW_TAXW['PaidType1'];
*/

$PaidTitle= $ROW_APID['APTitle'];
$PaidName= $ROW_APID['APName'];
$PaidAddress= $ROW_APID['APAddress'];
$PaidTaxNumber= $ROW_APID['APTaxNo'];
$PaidType1= $ROW_APID['TaxType'];

$Line05Detail= $ROW_TAXW['Line05Detail'];
$Line05Date= $ROW_TAXW['Line05Date'];
$Line05Amount= $ROW_TAXW['Line05Amount'];
$Line05W= $ROW_TAXW['Line05W'];
//$SumLine05W = (intval($Line05Amount) * intval($ROW_TAXW['Line05W']) /100);
$SumLine05W = (round($Line05Amount,2) * round($ROW_TAXW['Line05W'],2) /100);

$Line06Detail= $ROW_TAXW['Line06Detail'];
$Line06Date= $ROW_TAXW['Line06Date'];
$Line06Amount= $ROW_TAXW['Line06Amount'];
//$Line06W= $ROW_TAXW['Line06W'];
//$SumLine06W = (intval($Line06Amount) * intval($ROW_TAXW['Line06W']) /100);
$SumLine06W = (round($Line06Amount,2) * round($ROW_TAXW['Line06W']) /100);

$TotalAmount =$Line05Amount + $Line06Amount;
$TotalW = $SumLine05W + $SumLine06W;

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


$pdf->Image('taxWH1.jpg', 0, 0, 144);
$pdf->Image('taxWH1.jpg', 145, 0, 144);
$pdf->Image('stamper3.gif', 123, 198.75, 16);
$pdf->Image('stamper3.gif', 268, 198.75, 16);
$pdf->SetFont('DilleniaUPC','B',12);
$SS_L0 ="";
$pdf->MultiCell(0,1, $SS_L0, 0, 'L');
//////////////////////
//$SS_BookNumber ="                                                                                                                              ";
//$SS_BookNumber .="20120200x";
$pdf->MultiCell(0,0, $SS_BookNumber, 0, 'L');

//$SS_BookNumber2 ="20120200x";
//$SS_BookNumber2 .="";
$pdf->MultiCell(0,0, $SS_BookNumber2, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////
$SS_Number ="                                                                                                                              ";
$SS_Number .=$TaxID;
$pdf->MultiCell(0,0, $SS_Number, 0, 'L');

$SS_Number2  =$TaxID;
$SS_Number2 .="";
$pdf->MultiCell(0,0, $SS_Number2, 0, 'R');
//////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
/////////////////////////
$SS_OwnID ="                                                                                                       ";
$SS_OwnID .=$OwnBusinessNumber;
$pdf->MultiCell(0,0, $SS_OwnID, 0, 'L');


$SS_OwnID2 =$OwnBusinessNumber;
$SS_OwnID2 .="                ";

$pdf->MultiCell(0,0, $SS_OwnID2, 0, 'R');
//////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
////////////////////////
$SS_OwnName ="      ";
$SS_OwnName .=$OwnName;
$pdf->MultiCell(0,0, $SS_OwnName, 0, 'L');

$SS_OwnName2 ="      ";
$SS_OwnName2 .="                                                                                                                                                             ";
$SS_OwnName2 .=$OwnName;
//$SS_OwnName2 .="                                                                                                 ";

$pdf->MultiCell(0,0, $SS_OwnName2, 0, 'L');
////////////////////////
$SS_OwnTaxNumberL ="                                                                                                               ";
$SS_OwnTaxNumberL .=$OwnTaxNumber;
$pdf->MultiCell(0,0, $SS_OwnTaxNumberL, 0, 'L');


$SS_OwnTaxNumberR =$OwnTaxNumber;
$SS_OwnTaxNumberR .="              ";

$pdf->MultiCell(0,0, $SS_OwnTaxNumberR, 0, 'R');
//////////////////////
$pdf->MultiCell(0,6, $SS_L0, 0, 'L');
////////////////////////
$SS_OwnAddress ="  ";
$SS_OwnAddress .=$OwnAddress;
$pdf->MultiCell(0,0, $SS_OwnAddress, 0, 'L');


$SS_OwnAddress2 ="                                                                                      ";
$SS_OwnAddress2 .="                                                                      ";
$SS_OwnAddress2 .=$OwnAddress;

$pdf->MultiCell(0,0, $SS_OwnAddress2, 0, 'L');
////////////////////////
###################
//////////////////////
$pdf->MultiCell(0,8, $SS_L0, 0, 'L');
/////////////////////////
$SS_PaidBusinessNumberL ="                                                                                                       ";
$SS_PaidBusinessNumberL .=$PaidBusinessNumber;
$pdf->MultiCell(0,0, $SS_PaidBusinessNumberL, 0, 'L');


$SS_PaidBusinessNumberR =$PaidBusinessNumber;
$SS_PaidBusinessNumberR .="                ";

$pdf->MultiCell(0,0, $SS_PaidBusinessNumberR, 0, 'R');
//////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////
$SS_PaidNameL ="      ";
$SS_PaidNameL .=$PaidTitle." ";
$SS_PaidNameL .=$PaidName;
$pdf->MultiCell(0,0, $SS_PaidNameL, 0, 'L');

$SS_PaidNameR ="                                                                                ";
$SS_PaidNameR .="                                                                               ";
$SS_PaidNameR .=$PaidTitle." ";
$SS_PaidNameR .=$PaidName;
//$SS_PaidNameR .="                                                                                                 ";

$pdf->MultiCell(0,0, $SS_PaidNameR, 0, 'L');
////////////////////////
$SS_PaidTaxNumberL ="                                                                                                               ";
$SS_PaidTaxNumberL .=$PaidTaxNumber;
$pdf->MultiCell(0,0, $SS_PaidTaxNumberL, 0, 'L');


$SS_PaidTaxNumberR =$PaidTaxNumber;
$SS_PaidTaxNumberR .="              ";

$pdf->MultiCell(0,0, $SS_PaidTaxNumberR, 0, 'R');
//////////////////////
$pdf->MultiCell(0,7, $SS_L0, 0, 'L');
////////////////////////
$SS_PaidAddressL =" ";
$SS_PaidAddressL .=$PaidAddress;
$pdf->MultiCell(0,0, $SS_PaidAddressL, 0, 'L');

$SS_PaidAddressR ="                                                                                    ";
$SS_PaidAddressR .="                                                                      ";
$SS_PaidAddressR .=$PaidAddress;

$pdf->MultiCell(0,0, $SS_PaidAddressR, 0, 'L');
//////////////////////
$pdf->MultiCell(0,8, $SS_L0, 0, 'L');
////////////////////////
$SS_CheckBoxLine1L ="                                            ";
if($PaidType1=="1"){$SS_CheckBoxLine1L .="X";}else{$SS_CheckBoxLine1L .=" ";}
$SS_CheckBoxLine1L .="                    ";
if($PaidType1=="1K"){$SS_CheckBoxLine1L .="X";}else{$SS_CheckBoxLine1L .=" ";}
$SS_CheckBoxLine1L .="                            ";
if($PaidType1=="2"){$SS_CheckBoxLine1L .="X";}else{$SS_CheckBoxLine1L .=" ";}
$SS_CheckBoxLine1L .="                   ";
if($PaidType1=="3"){$SS_CheckBoxLine1L .="X";}else{$SS_CheckBoxLine1L .=" ";}
$pdf->MultiCell(0,0, $SS_CheckBoxLine1L, 0, 'L');


$SS_CheckBoxLine1R ="                                                                                                   ";
$SS_CheckBoxLine1R .="                                                                                                   ";
if($PaidType1=="1"){$SS_CheckBoxLine1R .="X";}else{$SS_CheckBoxLine1R .=" ";}
$SS_CheckBoxLine1R .="                    ";
if($PaidType1=="1K"){$SS_CheckBoxLine1R .="X";}else{$SS_CheckBoxLine1R .=" ";}
$SS_CheckBoxLine1R .="                            ";
if($PaidType1=="2"){$SS_CheckBoxLine1R .="X";}else{$SS_CheckBoxLine1R .=" ";}
$SS_CheckBoxLine1R .="                   ";
if($PaidType1=="3"){$SS_CheckBoxLine1R .="X";}else{$SS_CheckBoxLine1R .=" ";}
$pdf->MultiCell(0,0, $SS_CheckBoxLine1R, 0, 'L');
//////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////
$SS_CheckBoxLine2L ="                                          ";
if($PaidType1=="2K"){$SS_CheckBoxLine2L .="X";}else{$SS_CheckBoxLine2L .=" ";}
$SS_CheckBoxLine2L .="                    ";
if($PaidType1=="3K"){$SS_CheckBoxLine2L .="X";}else{$SS_CheckBoxLine2L .=" ";}
$SS_CheckBoxLine2L .="                            ";
if($PaidType1=="53"){$SS_CheckBoxLine2L .=" X";}else{$SS_CheckBoxLine2L .=" ";}
$pdf->MultiCell(0,0, $SS_CheckBoxLine2L, 0, 'L');


$SS_CheckBoxLine2R ="                                                                                                  ";
$SS_CheckBoxLine2R .="                                                                                                  ";
if($PaidType1=="2K"){$SS_CheckBoxLine2R .="X";}else{$SS_CheckBoxLine2R .=" ";}
$SS_CheckBoxLine2R .="                    ";
if($PaidType1=="3K"){$SS_CheckBoxLine2R .="X";}else{$SS_CheckBoxLine2R .=" ";}
$SS_CheckBoxLine2R .="                            ";
if($PaidType1=="53"){$SS_CheckBoxLine2R .=" X";}else{$SS_CheckBoxLine2R .=" ";}
$pdf->MultiCell(0,0, $SS_CheckBoxLine2R, 0, 'L');
//////////////////////
$pdf->MultiCell(0,15, $SS_L0, 0, 'L');
////////////////////////
$SS_Choice01L ="";
//$SS_Choice01L .="24/10/2555";
$SS_Choice01L .="                  ";
//$SS_Choice01L .="480.95";
$SS_Choice01L .="             ";
//$SS_Choice01L .="48.79";
$SS_Choice01L .="                                                                        ";
$SS_Choice01L .="                                                                        ";
$SS_Choice01L .="            ";
$pdf->MultiCell(0,0, $SS_Choice01L, 0, 'R');


$SS_Choice01R ="";
//$SS_Choice01R .="24/10/2555";
$SS_Choice01R .="                   ";
//$SS_Choice01R .="480.95";
$SS_Choice01R .="             ";
//$SS_Choice01R .="48.79";
$SS_Choice01R .=" ";
$pdf->MultiCell(0,0, $SS_Choice01R, 0, 'R');
//////////////////////
$pdf->MultiCell(0,77, $SS_L0, 0, 'L');
////////////////////////
/*
$SS_Choice05L ="";
$SS_Choice05L .=$Line05Detail;
$SS_Choice05L .="               ";
$SS_Choice05L .=$Line05Date;
$SS_Choice05L .="                   ";
$SS_Choice05L .=number_format($Line05Amount, 2, '.', ',');
$SS_Choice05L .="              ";
$SS_Choice05L .=number_format($SumLine05W, 2, '.', ',');
$SS_Choice05L .="                                                                        ";
$SS_Choice05L .="                                                                        ";
$SS_Choice05L .="            ";
$pdf->MultiCell(0,0, $SS_Choice05L, 0, 'R');
*/
////////Line05L//////
if ($Line05Amount != 0 ){
$SS_Line05DetailL .="                       ";
$SS_Line05DetailL .= $Line05Detail;
}

$pdf->MultiCell(0,0, $SS_Line05DetailL, 0, 'L');

if ($Line05Amount != 0 ){
$SS_Line05DateL .="                                       ";
$SS_Line05DateL .="                                       ";
$SS_Line05DateL .= $Line05Date;
}

$pdf->MultiCell(0,0, $SS_Line05DateL, 0, 'L');

if ($Line05Amount != 0 ){
$SS_Line05AmountL .= number_format($Line05Amount, 2, '.', ',');
$SS_Line05AmountL .="                                                          ";
$SS_Line05AmountL .="                                                          ";
$SS_Line05AmountL .="                                                           ";
}
$pdf->MultiCell(0,0, $SS_Line05AmountL, 0, 'R');

if ($Line05Amount != 0 ){
$SS_SumLine05WL .= number_format($SumLine05W, 2, '.', ',');
$SS_SumLine05WL .="                                                    ";
$SS_SumLine05WL .="                                                    ";
$SS_SumLine05WL .="                                                    ";
}

$pdf->MultiCell(0,0, $SS_SumLine05WL, 0, 'R');
////////////////////
/*
$SS_Choice05R ="                                                                                                  ";
$SS_Choice05R .=$Line05Detail;
$SS_Choice05R .="          ";
$SS_Choice05R .=$Line05Date;
$SS_Choice05R .="                  ";
$SS_Choice05R .=number_format($Line05Amount, 2, '.', ',');
$SS_Choice05R .="             ";
$SS_Choice05R .=number_format($SumLine05W, 2, '.', ',');
$SS_Choice05R .=" ";
$pdf->MultiCell(0,0, $SS_Choice05R, 0, 'R');
*/

////////Line06R//////
if ($Line05Amount != 0 ){
$SS_Line05DetailR .="                                                                              ";
$SS_Line05DetailR .="                                                                              ";
$SS_Line05DetailR .="                     ";
$SS_Line05DetailR .= $Line05Detail;
}
$pdf->MultiCell(0,0, $SS_Line05DetailR, 0, 'L');
if ($Line05Amount != 0 ){
$SS_Line05DateR .="                                                                              ";
$SS_Line05DateR .="                                                                              ";
$SS_Line05DateR .="                                                                             ";
$SS_Line05DateR .= $Line05Date;
}
$pdf->MultiCell(0,0, $SS_Line05DateR, 0, 'L');

if ($Line05Amount != 0 ){
$SS_Line05AmountR .= number_format($Line05Amount, 2, '.', ',');
$SS_Line05AmountR .="                     ";
}
$pdf->MultiCell(0,0, $SS_Line05AmountR, 0, 'R');

if ($Line05Amount != 0 ){
$SS_SumLine05WR .= number_format($SumLine05W, 2, '.', ',');
$SS_SumLine05WR .=" ";
}

$pdf->MultiCell(0,0, $SS_SumLine05WR, 0, 'R');
////////////////////
//////////////////////
$pdf->MultiCell(0,15, $SS_L0, 0, 'L');
////////////////////////

/*
$SS_Choice06L ="";
$SS_Choice06L .=$Line06Detail;
$SS_Choice06L .="          ";
$SS_Choice06L .=$Line06Date;
$SS_Choice06L .="                  ";
$SS_Choice06L .=number_format($Line06Amount, 2, '.', ',');
$SS_Choice06L .="             ";
$SS_Choice06L .=number_format($SumLine06W, 2, '.', ',');
$SS_Choice06L .="                                                                        ";
$SS_Choice06L .="                                                                        ";
$SS_Choice06L .="            ";
$pdf->MultiCell(0,0, $SS_Choice06L, 0, 'R');
*/
////////Line06L//////
if ($Line06Amount != 0 ){
$SS_Line06DetailL .="                       ";
$SS_Line06DetailL .= $Line06Detail;
}
$pdf->MultiCell(0,0, $SS_Line06DetailL, 0, 'L');
if ($Line06Amount != 0 ){
$SS_Line06DateL .="                                       ";
$SS_Line06DateL .="                                       ";
$SS_Line06DateL .= $Line06Date;
}
$pdf->MultiCell(0,0, $SS_Line06DateL, 0, 'L');

if ($Line06Amount != 0 ){
$SS_Line06AmountL .= number_format($Line06Amount, 2, '.', ',');
$SS_Line06AmountL .="                                                          ";
$SS_Line06AmountL .="                                                          ";
$SS_Line06AmountL .="                                                           ";
}
$pdf->MultiCell(0,0, $SS_Line06AmountL, 0, 'R');

if ($Line06Amount != 0 ){
$SS_SumLine06WL .= number_format($SumLine06W, 2, '.', ',');
$SS_SumLine06WL .="                                                    ";
$SS_SumLine06WL .="                                                    ";
$SS_SumLine06WL .="                                                    ";
}
$pdf->MultiCell(0,0, $SS_SumLine06WL, 0, 'R');
////////////////////
/*
$SS_Choice06R ="                                                                                                  ";
$SS_Choice06R .=$Line06Detail;
$SS_Choice06R .="          ";
$SS_Choice06R .=$Line06Date;
$SS_Choice06R .="                  ";
$SS_Choice06R .=number_format($Line06Amount, 2, '.', ',');
$SS_Choice06R .="             ";
$SS_Choice06R .=number_format($SumLine06W, 2, '.', ',');
$SS_Choice06R .=" ";
$pdf->MultiCell(0,0, $SS_Choice06R, 0, 'R');

*/

////////Line06R//////
if ($Line06Amount != 0 ){
$SS_Line06DetailR .="                                                                              ";
$SS_Line06DetailR .="                                                                              ";
$SS_Line06DetailR .="                     ";
$SS_Line06DetailR .= $Line06Detail;
}
$pdf->MultiCell(0,0, $SS_Line06DetailR, 0, 'L');

if ($Line06Amount != 0 ){
$SS_Line06DateR .="                                                                              ";
$SS_Line06DateR .="                                                                              ";
$SS_Line06DateR .="                                                                             ";
$SS_Line06DateR .= $Line06Date;
}
$pdf->MultiCell(0,0, $SS_Line06DateR, 0, 'L');

if ($Line06Amount != 0 ){
$SS_Line06AmountR .= number_format($Line06Amount, 2, '.', ',');
$SS_Line06AmountR .="                     ";
}

$pdf->MultiCell(0,0, $SS_Line06AmountR, 0, 'R');

if ($Line06Amount != 0 ){
$SS_SumLine06WR .= number_format($SumLine06W, 2, '.', ',');
$SS_SumLine06WR .=" ";
}
$pdf->MultiCell(0,0, $SS_SumLine06WR, 0, 'R');
////////////////////

//////////////////////
$pdf->MultiCell(0,6, $SS_L0, 0, 'L');
////////////////////////

/*
$SS_AmountL ="";
$SS_AmountL .=number_format($TotalAmount, 2, '.', ',');
$SS_AmountL .="             ";
$SS_AmountL .=number_format($TotalW, 2, '.', ',');
$SS_AmountL .="                                                                        ";
$SS_AmountL .="                                                                        ";
$SS_AmountL .="            ";
$pdf->MultiCell(0,0, $SS_AmountL, 0, 'R');
*/

////////////
$SS_Amount1L .= number_format($TotalAmount, 2, '.', ',');
$SS_Amount1L .="                                                          ";
$SS_Amount1L .="                                                          ";
$SS_Amount1L .="                                                           ";
$pdf->MultiCell(0,0, $SS_Amount1L, 0, 'R');

$SS_Amount2L .= number_format($TotalW, 2, '.', ',');
$SS_Amount2L .="                                                    ";
$SS_Amount2L .="                                                    ";
$SS_Amount2L .="                                                    ";
$pdf->MultiCell(0,0, $SS_Amount2L, 0, 'R');
////////////////////



////////////
$SS_Amount1R .= number_format($TotalAmount, 2, '.', ',');
$SS_Amount1R .="                     ";
//$SS_Amount1R .="                                                          ";
//$SS_Amount1R .="                                                           ";
$pdf->MultiCell(0,0, $SS_Amount1R, 0, 'R');

$SS_Amount2R .= number_format($TotalW, 2, '.', ',');
$SS_Amount2R .=" ";
//$SS_Amount2R .="                                                    ";
//$SS_Amount2R .="                                                    ";
$pdf->MultiCell(0,0, $SS_Amount2R, 0, 'R');
////////////////////


/*
$SS_AmountR ="";
$SS_AmountR .=number_format($TotalAmount, 2, '.', ',');
$SS_AmountR .="             ";
$SS_AmountR .=number_format($TotalW, 2, '.', ',');
$SS_AmountR .=" ";
$pdf->MultiCell(0,0, $SS_AmountR, 0, 'R');
*/

//////////////////////
$pdf->MultiCell(0,6, $SS_L0, 0, 'L');
////////////////////////
$SS_AmountTextL ="                                   ";
$SS_AmountTextL .=$n2s->convert(number_format($TotalW, 2, '.', ','));
$pdf->MultiCell(0,0, $SS_AmountTextL, 0, 'L');


$SS_AmountTextR ="                                                                                               ";
$SS_AmountTextR .="                                                                                               ";
$SS_AmountTextR .=$n2s->convert(number_format($TotalW, 2, '.', ','));
$pdf->MultiCell(0,0, $SS_AmountTextR, 0, 'L');
//////////////////////
$pdf->MultiCell(0,6, $SS_L0, 0, 'L');
////////////////////////
$SS_CheckBoxLine3L ="        ";
$SS_CheckBoxLine3L .="X";
$pdf->MultiCell(0,0, $SS_CheckBoxLine3L, 0, 'L');


$SS_CheckBoxLine3R ="                                                                                 ";
$SS_CheckBoxLine3R .="                                                                                 ";
$SS_CheckBoxLine3R .="X";
$pdf->MultiCell(0,0, $SS_CheckBoxLine3R, 0, 'L');
//////////////////////

//////////////////////
$pdf->MultiCell(0,1, $SS_L0, 0, 'L');
////////////////////////
$SS_DateEndDoc1L ="        ";
$SS_DateEndDoc1L .="X";
//$pdf->MultiCell(0,0, $SS_DateEndDoc1L, 0, 'L');


$SS_DateEndDoc1R ="                                                                                 ";
$SS_DateEndDoc1R .="                                                                                ";
$SS_DateEndDoc1R .="X";
//$pdf->MultiCell(0,0, $SS_DateEndDoc1R, 0, 'L');
//////////////////////


$pdf->Output();

//$pdf->Output();

?>