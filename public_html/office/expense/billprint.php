<?
//$GID = $_REQUEST['GID'];

//echo "xxx=".$taxGetID;
require("../../../office-data/fpdf/fpdf.php");
require("../../../office-data/classes/adminlogin.php");
require("../../../office-data/config/default-config.php");
//require("../../../config/db-connect.php");
require("../../../office-data/classes/num2text.class.php");
############## Conncect Data Base ################


mysql_connect(HOSTNAME_RECEIPT, USERNAME_RECEIPT, PASSWORD_RECEIPT) or die("Error DB Connect ");
mysql_select_db(DATABASE_RECEIPT) or die("Error DB Select ");
mysql_query("SET NAMES TIS620");

$adminlogin = new adminlogin();

$TransectionID = $_REQUEST['TransectionID'];

//$CustomerID = $_REQUEST['CustomerID'];

//echo $CustomerID;
//$issueThisYear = date('Y');
//$issueThisMonth = date('m');
//$issueID = $issueThisYear.$issueThisMonth."0xx";
$SQL_ISSUE_EDIT_FIND_COMPANY  = " SELECT ";
//$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.ID,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.IssueName,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.IssueDate,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.BillingNo,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Domain1,  ";


$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail1,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty1,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price1,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price2,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail3,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty3,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price3,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail4,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty4,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price4,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail5,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty5,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price5,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail6,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty6,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price6,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Detail7,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Qty7,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Price7,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.Cheque,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.CompanyName,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.CompanyName2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.TAXID,";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Address,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Address2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.ZipCode,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Phone,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Fax  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " FROM ss_billing_transection  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " INNER JOIN ss_billing_customer  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ON  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.CustomerID=ss_billing_customer.ID ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " WHERE ss_billing_transection.ID='".$TransectionID."'";

//echo $SQL_ISSUE_EDIT_FIND_COMPANY;

$RESULT_ISSUE_EDIT_FIND_COMPANY=$adminlogin->query($SQL_ISSUE_EDIT_FIND_COMPANY);
    $ROW_ISSUE_EDIT_FIND_COMPANY= mysql_fetch_array($RESULT_ISSUE_EDIT_FIND_COMPANY);
    
        $CompanyName    =$ROW_ISSUE_EDIT_FIND_COMPANY['CompanyName'];
        $CompanyName2   =$ROW_ISSUE_EDIT_FIND_COMPANY['CompanyName2'];
        $TaxID          =$ROW_ISSUE_EDIT_FIND_COMPANY['TAXID'];
        $BillingNo      =$ROW_ISSUE_EDIT_FIND_COMPANY['BillingNo'];
        $Domain1        =$ROW_ISSUE_EDIT_FIND_COMPANY['Domain1'];
        $IssueDate      =$ROW_ISSUE_EDIT_FIND_COMPANY['IssueDate'];
        $Address        =$ROW_ISSUE_EDIT_FIND_COMPANY['Address'];
        $Address2       =$ROW_ISSUE_EDIT_FIND_COMPANY['Address2'];
        $ZipCode        =$ROW_ISSUE_EDIT_FIND_COMPANY['ZipCode'];
        $Phone          =$ROW_ISSUE_EDIT_FIND_COMPANY['Phone'];
        $Fax            =$ROW_ISSUE_EDIT_FIND_COMPANY['Fax'     ];
        
        $Detail1        =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail1'  ];
        $Qty1           =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty1'     ];
        $Price1         =$ROW_ISSUE_EDIT_FIND_COMPANY['Price1'   ];
        
        $Cheque  =$ROW_ISSUE_EDIT_FIND_COMPANY['Cheque'   ];
        
            if(trim($Cheque)!="1"){
        $PaidTypeText = "CASH";
            }
        $ReceiptNo0 = 0;
        $RCPNO =0;
        
        $PriceTotal1 = $Price1 * $Qty1;
        if($Price1!=0){
        $RCPNO = $RCPNO+1;
        $ReceiptNo1     = $RCPNO;
        //$ReceiptNo1     = $ReceiptNo0+1;
        $NumPrice1      = number_format($Price1,2,'.',',');
        $NumPriceTotal1 = number_format($PriceTotal1,2,'.',',');
        } else { $NumPrice1 = ""; $ReceiptNo1 = "" ; $Qty1 = "" ; $NumPriceTotal1 = "";}
        
        $Detail2   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail2'];
        $Qty2      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty2'     ];
        $Price2    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price2'   ];
        
        $PriceTotal2 = $Price2 * $Qty2;
        if($Price2!=0){
        $RCPNO = $RCPNO+1;
        $ReceiptNo2     = $RCPNO;
        //$ReceiptNo2     = $ReceiptNo0+$ReceiptNo1+1;
        $NumPrice2      = number_format($Price2,2,'.',',');
        $NumPriceTotal2 = number_format($PriceTotal2,2,'.',',');
        } else { $NumPrice2 =""; $ReceiptNo2 = ""; $Qty2 = "" ;$NumPriceTotal2 = "";}
        
        $Detail3   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail3'];
        $Qty3      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty3'     ];
        $Price3    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price3'   ];
        
        $PriceTotal3 = $Price3 * $Qty3;
        if($Price3!=0){
        $RCPNO = $RCPNO+1;
        $ReceiptNo3     = $RCPNO;
        //$ReceiptNo3     = $ReceiptNo0+$ReceiptNo1+$ReceiptNo2+1;
        $NumPrice3 = number_format($Price3,2,'.',',');
        $NumPriceTotal3 = number_format($PriceTotal3,2,'.',',');
        } else { $NumPrice3 =""; $ReceiptNo3 = "";$Qty3 = "" ; $NumPriceTotal3 = "";}
                
        $Detail4   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail4'];
        $Qty4      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty4'     ];
        $Price4    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price4'   ];
        
        $PriceTotal4 = $Price4 * $Qty4;
        if($Price4!=0){
        $RCPNO = $RCPNO+1;
        $ReceiptNo4     = $RCPNO;
        //$ReceiptNo4     = $ReceiptNo0+$ReceiptNo1+$ReceiptNo2+$ReceiptNo3+1;
        $NumPrice4 = number_format($Price4,2,'.',',');
        $NumPriceTotal4 = number_format($PriceTotal4,2,'.',',');
        } else { $NumPrice4 =""; $ReceiptNo4 = "";$Qty4 = "" ; $NumPriceTotal4 = "";}
        
        $Detail5   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail5'];
        $Qty5      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty5'     ];
        $Price5    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price5'   ];
        
        $PriceTotal5 = $Price5 * $Qty5;
        if($Price5!=0){
        $ReceiptNo5     = $ReceiptNo0+$ReceiptNo1+$ReceiptNo2+$ReceiptNo3+$ReceiptNo4+1;
        $NumPrice5 = number_format($Price5,2,'.',',');
        $NumPriceTotal5 = number_format($PriceTotal5,2,'.',',');
        } else { $NumPrice5 =""; $ReceiptNo5 = "";$Qty5 = "" ; $NumPriceTotal5 = "";}
        
        $Detail6   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail6'];
        $Qty6      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty6'     ];
        $Price6    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price6'   ];
        
        $PriceTotal6 = $Price6 * $Qty6;
        if($Price6!=0){
        $ReceiptNo6     = $ReceiptNo0+$ReceiptNo1+$ReceiptNo2+$ReceiptNo3+$ReceiptNo4+$ReceiptNo5+1;
        $NumPrice6 = number_format($Price6,2,'.',',');
        $NumPriceTotal6 = number_format($PriceTotal6,2,'.',',');
        } else { $NumPrice6 =""; $ReceiptNo6 = ""; $Qty6 = "" ;$NumPriceTotal6 = "";}
        
        $Detail7   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail7'];
        $Qty7      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty7'     ];
        $Price7    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price7'   ];
        
        $PriceTotal7 = $Price7 * $Qty7;
        if($Price7!=0){
        $ReceiptNo7     = $ReceiptNo0+$ReceiptNo1+$ReceiptNo2+$ReceiptNo3+$ReceiptNo4+$ReceiptNo5+$ReceiptNo6+1;
        $NumPrice7 = number_format($Price7,2,'.',',');
        
        $NumPriceTotal7 = number_format($PriceTotal7,2,'.',',');
        } else { $NumPrice7 =""; $ReceiptNo7 = "";$Qty7 = "" ; $NumPriceTotal7 = "";}
        
        $TotalAmount = $PriceTotal1 + $PriceTotal2 +$PriceTotal3 + $PriceTotal4 + $PriceTotal5 + $PriceTotal6 + $PriceTotal7 ;


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

$pdf = new PDF('P','mm','A4');


//require('fpdf.php');
 
//$pdf=new FPDF( 'P' , 'mm' , array( 100,200 ) );
$pdf->SetTitle('FPDF tutorial');
$pdf->AddFont('DilleniaUPC','B','dillb.php');
$pdf->AddPage();


$pdf->Image('receipt4.jpg', 10, 0, 199,148);
$pdf->Image('receipt4.jpg', 10, 148, 199,148);
//$pdf->Image('receipt-img.jpg', 145, 0, 144);
//$pdf->Image('stamper3.gif', 123, 198.75, 16);
//$pdf->Image('stamper3.gif', 268, 198.75, 16);
$pdf->SetFont('DilleniaUPC','B',12);
$SS_L0 ="";
$pdf->MultiCell(0,14, $SS_L0, 0, 'L');
//////////////////////
$SS_RTitle1 ="                                                                                                                                                                 ";
$SS_RTitle1 .="ใบเสร็จรับเงิน   ต้นฉบับ";
$pdf->MultiCell(0,0, $SS_RTitle1, 0, 'L');
/////////////////////

////////////////////// 
$SS_L_OWN_TAX_NO ="                                                         ";
$SS_L_OWN_TAX_NO .="เลขประจำตัวผู้เสียภาษี  0105550004177";
$pdf->MultiCell(0,0, $SS_L_OWN_TAX_NO, 0, 'L');
/////////////////////

$pdf->MultiCell(0,8, $SS_L0, 0, 'L');
//////////////////////
$pdf->MultiCell(0,1, $EMPTYBLANK, 0, 'R');
/////////////////////
$SS_RNumber1 ="เอกสารเลขที่       ".$BillingNo;
$SS_RNumber1 .="                            ";
$pdf->MultiCell(0,0, $SS_RNumber1, 0, 'R');
//////////////////////

$SS_RCompanyName ="                                            ";
$SS_RCompanyName .=$CompanyName;
$pdf->MultiCell(0,0, $SS_RCompanyName, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_RCompanyName2 ="                                            ";
$SS_RCompanyName2 .=$CompanyName2;
$pdf->MultiCell(0,0, $SS_RCompanyName2, 0, 'L');
/////////////////////
$SS_RNumber1 ="Document No";
$SS_RNumber1 .="                                            ";
$pdf->MultiCell(0,0, $SS_RNumber1, 0, 'R');
//////////////////////
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_TaxNO ="                                                        ";
$SS_TaxNO .=$TaxID;
$pdf->MultiCell(0,0, $SS_TaxNO, 0, 'L');
////////////////////////////

$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
//////////////////////
$pdf->MultiCell(0,1, $EMPTYBLANK, 0, 'R');
/////////////////////
$SS_RAddress1 ="                                            ";
$SS_RAddress1 .=$Address;
$pdf->MultiCell(0,0, $SS_RAddress1, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_RAddress2 ="                                            ";
$SS_RAddress2 .=$Address2." ".$ZipCode;
$pdf->MultiCell(0,0, $SS_RAddress2, 0, 'L');

////////////////////////////
$SS_RDate ="วันที่ / Date       ".date("d/m/Y", strtotime($IssueDate));
$SS_RDate .="                            ";
$pdf->MultiCell(0,0, $SS_RDate, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,4.5, $SS_L0, 0, 'L');
//////////////////////
$SS_RPhone ="                                            ";
$SS_RPhone .=$Phone;
$pdf->MultiCell(0,0, $SS_RPhone, 0, 'L');
////////////////////////////
$SS_RFax ="                                                                                 ";
$SS_RFax .="โทรสาร/Fax ";
$SS_RFax .=$Fax;
//$pdf->MultiCell(0,0, $SS_RFax, 0, 'L');
////////////////////////////

$pdf->MultiCell(0,15, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo1 ="                        ";
$SS_RNo1 .=$ReceiptNo1;
$pdf->MultiCell(0,0, $SS_RNo1, 0, 'L');
////////////////////////////
$SS_RDetail1 ="                                                  ";
$SS_RDetail1 .=$Detail1;
$pdf->MultiCell(0,0, $SS_RDetail1, 0, 'L');
////////////////////////////
$SS_RUnitPrice1 =$NumPrice1;
$SS_RUnitPrice1 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice1, 0, 'R');
////////////////////////////
$SS_RQt1 =$Qty1;
$SS_RQt1 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt1, 0, 'R');
////////////////////////////
$SS_Price1 =$NumPriceTotal1;
$SS_Price1 .="           ";
$pdf->MultiCell(0,0, $SS_Price1, 0, 'R');
////////////////////////////


$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo2 ="                        ";
$SS_RNo2 .=$ReceiptNo2;
$pdf->MultiCell(0,0, $SS_RNo2, 0, 'L');
////////////////////////////
$SS_RDetail2 ="                                                  ";
$SS_RDetail2 .=$Detail2;
$pdf->MultiCell(0,0, $SS_RDetail2, 0, 'L');
////////////////////////////
$SS_RUnitPrice2 =$NumPrice2;
$SS_RUnitPrice2 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice2, 0, 'R');
////////////////////////////
$SS_RQt2 =$Qty2;
$SS_RQt2 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt2, 0, 'R');
////////////////////////////
$SS_Price2 =$NumPriceTotal2;
$SS_Price2 .="           ";
$pdf->MultiCell(0,0, $SS_Price2, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo3 ="                        ";
$SS_RNo3 .=$ReceiptNo3;
$pdf->MultiCell(0,0, $SS_RNo3, 0, 'L');
////////////////////////////
$SS_RDetail3 ="                                                  ";
$SS_RDetail3 .=$Detail3;
$pdf->MultiCell(0,0, $SS_RDetail3, 0, 'L');
////////////////////////////
$SS_RUnitPrice3 =$NumPrice3;
$SS_RUnitPrice3 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice3, 0, 'R');
////////////////////////////
$SS_RQt3 =$Qty3;
$SS_RQt3 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt3, 0, 'R');
////////////////////////////
$SS_Price3 =$NumPriceTotal3;
$SS_Price3 .="           ";
$pdf->MultiCell(0,0, $SS_Price3, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo4 ="                        ";
$SS_RNo4 .=$ReceiptNo4;
$pdf->MultiCell(0,0, $SS_RNo4, 0, 'L');
////////////////////////////
$SS_RDetail4 ="                                                  ";
$SS_RDetail4 .=$Detail4;
$pdf->MultiCell(0,0, $SS_RDetail4, 0, 'L');
////////////////////////////
$SS_RUnitPrice4 =$NumPrice4;
$SS_RUnitPrice4 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice4, 0, 'R');
////////////////////////////
$SS_RQt4 =$Qty4;
$SS_RQt4 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt4, 0, 'R');
////////////////////////////
$SS_Price4 =$NumPriceTotal4;
$SS_Price4 .="           ";
$pdf->MultiCell(0,0, $SS_Price4, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo5 ="                        ";
$SS_RNo5 .=$ReceiptNo5;
$pdf->MultiCell(0,0, $SS_RNo5, 0, 'L');
////////////////////////////
$SS_RDetail5 ="                                                  ";
$SS_RDetail5 .=$Detail5;
$pdf->MultiCell(0,0, $SS_RDetail5, 0, 'L');
////////////////////////////
$SS_RUnitPrice5 =$NumPrice5;
$SS_RUnitPrice5 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice5, 0, 'R');
////////////////////////////
$SS_RQt5 =$Qty5;
$SS_RQt5 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt5, 0, 'R');
////////////////////////////
$SS_Price5 =$NumPriceTotal5;
$SS_Price5 .="           ";
$pdf->MultiCell(0,0, $SS_Price5, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo6 ="                        ";
$SS_RNo6 .=$ReceiptNo6;
$pdf->MultiCell(0,0, $SS_RNo6, 0, 'L');
////////////////////////////
$SS_RDetail6 ="                                                  ";
$SS_RDetail6 .=$Detail6;
$pdf->MultiCell(0,0, $SS_RDetail6, 0, 'L');
////////////////////////////
$SS_RUnitPrice6 =$NumPrice6;
$SS_RUnitPrice6 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice6, 0, 'R');
////////////////////////////
$SS_RQt6 =$Qty6;
$SS_RQt6 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt6, 0, 'R');
////////////////////////////
$SS_Price6 =$NumPriceTotal6;
$SS_Price6 .="           ";
$pdf->MultiCell(0,0, $SS_Price6, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo7 ="                        ";
$SS_RNo7 .=$ReceiptNo7;
$pdf->MultiCell(0,0, $SS_RNo7, 0, 'L');
////////////////////////////
$SS_RDetail7 ="                                                  ";
$SS_RDetail7 .=$Detail7;
$pdf->MultiCell(0,0, $SS_RDetail7, 0, 'L');
////////////////////////////
$SS_RUnitPrice7 =$NumPrice7;
$SS_RUnitPrice7 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice7, 0, 'R');
////////////////////////////
$SS_RQt7 =$Qty7;
$SS_RQt7 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt7, 0, 'R');
////////////////////////////
$SS_Price7 =$NumPriceTotal7;
$SS_Price7 .="           ";
$pdf->MultiCell(0,0, $SS_Price7, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,11, $SS_L0, 0, 'L');
////////////////////////////
$SS_Total =number_format($TotalAmount,2,'.',',');
$SS_Total .="           ";
$pdf->MultiCell(0,0, $SS_Total, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_CASH_CHEQUE ="                                                                        ";
$SS_CASH_CHEQUE .= $PaidTypeText;

$pdf->MultiCell(0,0, $SS_CASH_CHEQUE, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
////////////////////////////
$SS_Amount =number_format($TotalAmount,2,'.',',');
$SS_Amount .="           ";
$pdf->MultiCell(0,0, $SS_Amount, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,10, $SS_L0, 0, 'L');
////////////////////////////
$SS_Amount_Text ="                                                                                                                                             ";
$SS_Amount_Text .=$SS_OwnID = $n2s->convert($TotalAmount);
$pdf->MultiCell(0,0, $SS_Amount_Text, 0, 'L');
////////////////////////////


$pdf->MultiCell(0,43, $SS_L0, 0, 'L');

#############2222#######################
//////////////////////
$SS_RTitle1 ="                                                                                                                                                                 ";
$SS_RTitle1 .="ใบเสร็จรับเงิน   สำเนา";
$pdf->MultiCell(0,0, $SS_RTitle1, 0, 'L');
/////////////////////

////////////////////// 
$SS_L_OWN_TAX_NO ="                                                         ";
$SS_L_OWN_TAX_NO .="เลขประจำตัวผู้เสียภาษี  0105550004177";
$pdf->MultiCell(0,0, $SS_L_OWN_TAX_NO, 0, 'L');
/////////////////////

$pdf->MultiCell(0,7, $SS_L0, 0, 'L');
//////////////////////
$pdf->MultiCell(0,1, $EMPTYBLANK, 0, 'R');
/////////////////////
$SS_RNumber1 ="เอกสารเลขที่       ".$BillingNo;
$SS_RNumber1 .="                            ";
$pdf->MultiCell(0,0, $SS_RNumber1, 0, 'R');
//////////////////////

$SS_RCompanyName ="                                            ";
$SS_RCompanyName .=$CompanyName;
$pdf->MultiCell(0,0, $SS_RCompanyName, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_RCompanyName2 ="                                            ";
$SS_RCompanyName2 .=$CompanyName2;
$pdf->MultiCell(0,0, $SS_RCompanyName2, 0, 'L');
/////////////////////
$SS_RNumber1 ="Document No";
$SS_RNumber1 .="                                            ";
$pdf->MultiCell(0,0, $SS_RNumber1, 0, 'R');
//////////////////////
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_TaxNO ="                                                        ";
$SS_TaxNO .=$TaxID;
$pdf->MultiCell(0,0, $SS_TaxNO, 0, 'L');
////////////////////////////

$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
//////////////////////
$pdf->MultiCell(0,1, $EMPTYBLANK, 0, 'R');
/////////////////////
$SS_RAddress1 ="                                            ";
$SS_RAddress1 .=$Address;
$pdf->MultiCell(0,0, $SS_RAddress1, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
//////////////////////
$SS_RAddress2 ="                                            ";
$SS_RAddress2 .=$Address2." ".$ZipCode;
$pdf->MultiCell(0,0, $SS_RAddress2, 0, 'L');

////////////////////////////
$SS_RDate ="วันที่ / Date       ".date("d/m/Y", strtotime($IssueDate));;
$SS_RDate .="                            ";
$pdf->MultiCell(0,0, $SS_RDate, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,4.5, $SS_L0, 0, 'L');
//////////////////////
$SS_RPhone ="                                            ";
$SS_RPhone .=$Phone;
$pdf->MultiCell(0,0, $SS_RPhone, 0, 'L');
////////////////////////////
$SS_RFax ="                                                                                 ";
$SS_RFax .="โทรสาร/Fax ";
$SS_RFax .=$Fax;
//$pdf->MultiCell(0,0, $SS_RFax, 0, 'L');
////////////////////////////

$pdf->MultiCell(0,15, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo1 ="                        ";
$SS_RNo1 .=$ReceiptNo1;
$pdf->MultiCell(0,0, $SS_RNo1, 0, 'L');
////////////////////////////
$SS_RDetail1 ="                                                  ";
$SS_RDetail1 .=$Detail1;
$pdf->MultiCell(0,0, $SS_RDetail1, 0, 'L');
////////////////////////////
$SS_RUnitPrice1 =$NumPrice1;
$SS_RUnitPrice1 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice1, 0, 'R');
////////////////////////////
$SS_RQt1 =$Qty1;
$SS_RQt1 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt1, 0, 'R');
////////////////////////////
$SS_Price1 =$NumPriceTotal1;
$SS_Price1 .="           ";
$pdf->MultiCell(0,0, $SS_Price1, 0, 'R');
////////////////////////////


$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo2 ="                        ";
$SS_RNo2 .=$ReceiptNo2;
$pdf->MultiCell(0,0, $SS_RNo2, 0, 'L');
////////////////////////////
$SS_RDetail2 ="                                                  ";
$SS_RDetail2 .=$Detail2;
$pdf->MultiCell(0,0, $SS_RDetail2, 0, 'L');
////////////////////////////
$SS_RUnitPrice2 =$NumPrice2;
$SS_RUnitPrice2 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice2, 0, 'R');
////////////////////////////
$SS_RQt2 =$Qty2;
$SS_RQt2 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt2, 0, 'R');
////////////////////////////
$SS_Price2 =$NumPriceTotal2;
$SS_Price2 .="           ";
$pdf->MultiCell(0,0, $SS_Price2, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo3 ="                        ";
$SS_RNo3 .=$ReceiptNo3;
$pdf->MultiCell(0,0, $SS_RNo3, 0, 'L');
////////////////////////////
$SS_RDetail3 ="                                                  ";
$SS_RDetail3 .=$Detail3;
$pdf->MultiCell(0,0, $SS_RDetail3, 0, 'L');
////////////////////////////
$SS_RUnitPrice3 =$NumPrice3;
$SS_RUnitPrice3 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice3, 0, 'R');
////////////////////////////
$SS_RQt3 =$Qty3;
$SS_RQt3 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt3, 0, 'R');
////////////////////////////
$SS_Price3 =$NumPriceTotal3;
$SS_Price3 .="           ";
$pdf->MultiCell(0,0, $SS_Price3, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo4 ="                        ";
$SS_RNo4 .=$ReceiptNo4;
$pdf->MultiCell(0,0, $SS_RNo4, 0, 'L');
////////////////////////////
$SS_RDetail4 ="                                                  ";
$SS_RDetail4 .=$Detail4;
$pdf->MultiCell(0,0, $SS_RDetail4, 0, 'L');
////////////////////////////
$SS_RUnitPrice4 =$NumPrice4;
$SS_RUnitPrice4 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice4, 0, 'R');
////////////////////////////
$SS_RQt4 =$Qty4;
$SS_RQt4 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt4, 0, 'R');
////////////////////////////
$SS_Price4 =$NumPriceTotal4;
$SS_Price4 .="           ";
$pdf->MultiCell(0,0, $SS_Price4, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo5 ="                        ";
$SS_RNo5 .=$ReceiptNo5;
$pdf->MultiCell(0,0, $SS_RNo5, 0, 'L');
////////////////////////////
$SS_RDetail5 ="                                                  ";
$SS_RDetail5 .=$Detail5;
$pdf->MultiCell(0,0, $SS_RDetail5, 0, 'L');
////////////////////////////
$SS_RUnitPrice5 =$NumPrice5;
$SS_RUnitPrice5 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice5, 0, 'R');
////////////////////////////
$SS_RQt5 =$Qty5;
$SS_RQt5 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt5, 0, 'R');
////////////////////////////
$SS_Price5 =$NumPriceTotal5;
$SS_Price5 .="           ";
$pdf->MultiCell(0,0, $SS_Price5, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo6 ="                        ";
$SS_RNo6 .=$ReceiptNo6;
$pdf->MultiCell(0,0, $SS_RNo6, 0, 'L');
////////////////////////////
$SS_RDetail6 ="                                                  ";
$SS_RDetail6 .=$Detail6;
$pdf->MultiCell(0,0, $SS_RDetail6, 0, 'L');
////////////////////////////
$SS_RUnitPrice6 =$NumPrice6;
$SS_RUnitPrice6 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice6, 0, 'R');
////////////////////////////
$SS_RQt6 =$Qty6;
$SS_RQt6 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt6, 0, 'R');
////////////////////////////
$SS_Price6 =$NumPriceTotal6;
$SS_Price6 .="           ";
$pdf->MultiCell(0,0, $SS_Price6, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo7 ="                        ";
$SS_RNo7 .=$ReceiptNo7;
$pdf->MultiCell(0,0, $SS_RNo7, 0, 'L');
////////////////////////////
$SS_RDetail7 ="                                                  ";
$SS_RDetail7 .=$Detail7;
$pdf->MultiCell(0,0, $SS_RDetail7, 0, 'L');
////////////////////////////
$SS_RUnitPrice7 =$NumPrice7;
$SS_RUnitPrice7 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice7, 0, 'R');
////////////////////////////
$SS_RQt7 =$Qty7;
$SS_RQt7 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt7, 0, 'R');
////////////////////////////
$SS_Price7 =$NumPriceTotal7;
$SS_Price7 .="           ";
$pdf->MultiCell(0,0, $SS_Price7, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,11, $SS_L0, 0, 'L');
////////////////////////////
$SS_Total =number_format($TotalAmount,2,'.',',');
$SS_Total .="           ";
$pdf->MultiCell(0,0, $SS_Total, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_CASH_CHEQUE ="                                                                        ";
$SS_CASH_CHEQUE .=$PaidTypeText;

$pdf->MultiCell(0,0, $SS_CASH_CHEQUE, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,4, $SS_L0, 0, 'L');
////////////////////////////
$SS_Amount =number_format($TotalAmount,2,'.',',');
$SS_Amount .="           ";
$pdf->MultiCell(0,0, $SS_Amount, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,9.5, $SS_L0, 0, 'L');
////////////////////////////
$SS_Amount_Text ="                                                                                                                                             ";
$SS_Amount_Text .=$SS_OwnID = $n2s->convert($TotalAmount);
$pdf->MultiCell(0,0, $SS_Amount_Text, 0, 'L');
////////////////////////////

$MyPDF1 = "receipt-";
$MyPDF2 = $BillingNo;
$MyPDF3 = date("d/m/Y", strtotime($IssueDate));
$MyPDF4 = $Domain1;
$MyPDF5 = $TotalAmount;

$MyPDF = $MyPDF1.$MyPDF2."-".$MyPDF3."-".$MyPDF4."-".$MyPDF5.".pdf";

$pdf->Output($MyPDF,'I');

//$pdf->Output();

?>