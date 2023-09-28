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
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.IssueName,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.IssueDate,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.QuotationNo,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Domain1,  ";


$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail1,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty1,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price1,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price2,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail3,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty3,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price3,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail4,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty4,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price4,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail5,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty5,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price5,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail6,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty6,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price6,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail7,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty7,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price7,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail8,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty8,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price8,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail9,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty9,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price9,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail10,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty10,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price10,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail11,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty11,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price11,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail12,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty12,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price12,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail13,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty13,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price13,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail14,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty14,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price14,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail15,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty15,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price15,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail16,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty16,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price16,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail17,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty17, ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price17,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail18,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty18,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price18,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail19,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty19,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price19,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Detail20,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Qty20,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.Price20,  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.DisableAmount,  ";


$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.CompanyName,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.TAXID,";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Address,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Address2,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.ZipCode,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Phone,  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.Fax  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " FROM ss_quotation_transection  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " INNER JOIN ss_billing_customer  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ON  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_quotation_transection.CustomerID=ss_billing_customer.ID ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " WHERE ss_quotation_transection.ID='".$TransectionID."'";

//echo $SQL_ISSUE_EDIT_FIND_COMPANY;

$RESULT_ISSUE_EDIT_FIND_COMPANY=$adminlogin->query($SQL_ISSUE_EDIT_FIND_COMPANY);
    $ROW_ISSUE_EDIT_FIND_COMPANY= mysql_fetch_array($RESULT_ISSUE_EDIT_FIND_COMPANY);
    
        $CompanyName    =$ROW_ISSUE_EDIT_FIND_COMPANY['CompanyName'];
        $TaxID          =$ROW_ISSUE_EDIT_FIND_COMPANY['TAXID'];
        $QuotationNo      =$ROW_ISSUE_EDIT_FIND_COMPANY['QuotationNo'];
        $Domain1         =$ROW_ISSUE_EDIT_FIND_COMPANY['Domain1'];
        $IssueDate      =$ROW_ISSUE_EDIT_FIND_COMPANY['IssueDate'];
        $Address        =$ROW_ISSUE_EDIT_FIND_COMPANY['Address'];
        $Address2       =$ROW_ISSUE_EDIT_FIND_COMPANY['Address2'];
        $ZipCode        =$ROW_ISSUE_EDIT_FIND_COMPANY['ZipCode'];
        $Phone          =$ROW_ISSUE_EDIT_FIND_COMPANY['Phone'];
        $Fax            =$ROW_ISSUE_EDIT_FIND_COMPANY['Fax'];
        $DisableAmount  =$ROW_ISSUE_EDIT_FIND_COMPANY['DisableAmount'];
        
        $Detail1   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail1'];
        $Qty1      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty1'     ];
        $Price1    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price1'   ];
        
        $PriceTotal1 = $Price1 * $Qty1;
        
        $QLN0 =0;//QuotationLineNo
        
        if($Price1!=0){
        $QLN1     = $QLN0+1;
        $NumPrice1      = number_format($Price1,2,'.',',');
        $NumPriceTotal1 = number_format($PriceTotal1,2,'.',',');
        } else { $NumPrice1 = ""; $QLN1 = "" ; $Qty1 = "" ; $NumPriceTotal1 = "";}
        
        $Detail2   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail2'];
        $Qty2      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty2'     ];
        $Price2    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price2'   ];
        
        $PriceTotal2 = $Price2 * $Qty2;
        if($Price2!=0){
        $QLN2     = $QLN1+$QLN0+1;
        $NumPrice2      = number_format($Price2,2,'.',',');
        $NumPriceTotal2 = number_format($PriceTotal2,2,'.',',');
        } else { $NumPrice2 =""; $QLN2 = ""; $Qty2 = "" ;$NumPriceTotal2 = "";}
        
        $Detail3   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail3'];
        $Qty3      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty3'     ];
        $Price3    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price3'   ];
        
        $PriceTotal3 = $Price3 * $Qty3;
        if($Price3!=0){
        $QLN3     = $QLN2+$QLN1+$QLN0+1;
        $NumPrice3 = number_format($Price3,2,'.',',');
        $NumPriceTotal3 = number_format($PriceTotal3,2,'.',',');
        } else { $NumPrice3 =""; $QLN3 = "";$Qty3 = "" ; $NumPriceTotal3 = "";}
                
        $Detail4   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail4'];
        $Qty4      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty4'     ];
        $Price4    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price4'   ];
        
        $PriceTotal4 = $Price4 * $Qty4;
        if($Price4!=0){
        $QLN4     = $QLN3+$QLN2+$QLN1+$QLN0+1;
        $NumPrice4 = number_format($Price4,2,'.',',');
        $NumPriceTotal4 = number_format($PriceTotal4,2,'.',',');
        } else { $NumPrice4 =""; $QLN4 = "";$Qty4 = "" ; $NumPriceTotal4 = "";}
        
        $Detail5   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail5'];
        $Qty5      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty5'     ];
        $Price5    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price5'   ];
        
        $PriceTotal5 = $Price5 * $Qty5;
        if($Price5!=0){
        $ReceiptNo5     = "5";
        $NumPrice5 = number_format($Price5,2,'.',',');
        $NumPriceTotal5 = number_format($PriceTotal5,2,'.',',');
        } else { $NumPrice5 =""; $ReceiptNo5 = "";$Qty5 = "" ; $NumPriceTotal5 = "";}
        
        $Detail6   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail6'];
        $Qty6      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty6'     ];
        $Price6    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price6'   ];
        
        $PriceTotal6 = $Price6 * $Qty6;
        if($Price6!=0){
        $ReceiptNo6     = "6";
        $NumPrice6 = number_format($Price6,2,'.',',');
        $NumPriceTotal6 = number_format($PriceTotal6,2,'.',',');
        } else { $NumPrice6 =""; $ReceiptNo6 = ""; $Qty6 = "" ;$NumPriceTotal6 = "";}
        
        $Detail7   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail7'];
        $Qty7      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty7'     ];
        $Price7    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price7'   ];
        
        $PriceTotal7 = $Price7 * $Qty7;
        if($Price7!=0){
        $ReceiptNo7     = "7";
        $NumPrice7 = number_format($Price7,2,'.',',');
        
        $NumPriceTotal7 = number_format($PriceTotal7,2,'.',',');
        } else { $NumPrice7 =""; $ReceiptNo7 = "";$Qty7 = "" ; $NumPriceTotal7 = "";}
        
        //##8//
        $Detail8   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail8'];
        $Qty8      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty8'     ];
        $Price8    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price8'   ];
        
        $PriceTotal8 = $Price8 * $Qty8;
        if($Price8!=0){
        $ReceiptNo8     = "8";
        $NumPrice8 = number_format($Price8,2,'.',',');
        
        $NumPriceTotal8 = number_format($PriceTotal8,2,'.',',');
        } else { $NumPrice8 =""; $ReceiptNo8 = "";$Qty8 = "" ; $NumPriceTotal8 = "";}
        //##END8//
        
        //##9//
        $Detail9   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail9'];
        $Qty9      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty9'     ];
        $Price9    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price9'   ];
        
        $PriceTotal9 = $Price9 * $Qty9;
        if($Price9!=0){
        $ReceiptNo9     = "9";
        $NumPrice9 = number_format($Price9,2,'.',',');
        
        $NumPriceTotal9 = number_format($PriceTotal9,2,'.',',');
        } else { $NumPrice9 =""; $ReceiptNo9 = "";$Qty9 = "" ; $NumPriceTotal9 = "";}
        //##END9//
        
         //##10//
        $Detail10   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail10'];
        $Qty10      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty10'     ];
        $Price10    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price10'   ];
        
        $PriceTotal10 = $Price10 * $Qty10;
        if($Price10!=0){
        $ReceiptNo10     = "10";
        $NumPrice10 = number_format($Price10,2,'.',',');
        
        $NumPriceTotal10 = number_format($PriceTotal10,2,'.',',');
        } else { $NumPrice10 =""; $ReceiptNo10 = "";$Qty10 = "" ; $NumPriceTotal10 = "";}
        //##END10//
        
                 //##11//
        $Detail11   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail11'];
        $Qty11      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty11'     ];
        $Price11    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price11'   ];
        
        $PriceTotal11 = $Price11 * $Qty11;
        if($Price11!=0){
        $ReceiptNo11     = "11";
        $NumPrice11 = number_format($Price11,2,'.',',');
        
        $NumPriceTotal11 = number_format($PriceTotal11,2,'.',',');
        } else { $NumPrice11 =""; $ReceiptNo11 = "";$Qty11 = "" ; $NumPriceTotal11 = "";}
        //##END11//
          
         //##12//
        $Detail12   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail12'];
        $Qty12      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty12'     ];
        $Price12    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price12'   ];
        
        $PriceTotal12 = $Price12 * $Qty12;
        if($Price12!=0){
        $ReceiptNo12     = "12";
        $NumPrice12 = number_format($Price12,2,'.',',');
        
        $NumPriceTotal12 = number_format($PriceTotal12,2,'.',',');
        } else { $NumPrice12 =""; $ReceiptNo12 = "";$Qty12 = "" ; $NumPriceTotal12 = "";}
        //##END12//
          
         //##13//
        $Detail13   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail13'];
        $Qty13      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty13'     ];
        $Price13    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price13'   ];
        
        $PriceTotal13 = $Price13 * $Qty13;
        if($Price13!=0){
        $ReceiptNo13     = "13";
        $NumPrice13 = number_format($Price13,2,'.',',');
        
        $NumPriceTotal13 = number_format($PriceTotal13,2,'.',',');
        } else { $NumPrice13 =""; $ReceiptNo13 = "";$Qty13 = "" ; $NumPriceTotal13 = "";}
        //##END13//
          
         //##14//
        $Detail14   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail14'];
        $Qty14      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty14'     ];
        $Price14    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price14'   ];
        
        $PriceTotal14 = $Price14 * $Qty14;
        if($Price14!=0){
        $ReceiptNo14     = "14";
        $NumPrice14 = number_format($Price14,2,'.',',');
        
        $NumPriceTotal14 = number_format($PriceTotal14,2,'.',',');
        } else { $NumPrice14 =""; $ReceiptNo14 = "";$Qty14 = "" ; $NumPriceTotal14 = "";}
        //##END14//
          
         //##15//
        $Detail15   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail15'];
        $Qty15      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty15'     ];
        $Price15    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price15'   ];
        
        $PriceTotal15 = $Price15 * $Qty15;
        if($Price15!=0){
        $ReceiptNo15     = "15";
        $NumPrice15 = number_format($Price15,2,'.',',');
        
        $NumPriceTotal15 = number_format($PriceTotal15,2,'.',',');
        } else { $NumPrice15 =""; $ReceiptNo15 = "";$Qty15 = "" ; $NumPriceTotal15 = "";}
        //##END15//
          
         //##16//
        $Detail16   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail16'];
        $Qty16      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty16'     ];
        $Price16    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price16'   ];
        
        $PriceTotal16 = $Price16 * $Qty16;
        if($Price16!=0){
        $ReceiptNo16     = "16";
        $NumPrice16 = number_format($Price16,2,'.',',');
        
        $NumPriceTotal16 = number_format($PriceTotal16,2,'.',',');
        } else { $NumPrice16 =""; $ReceiptNo16 = "";$Qty16 = "" ; $NumPriceTotal16 = "";}
        //##END16//
          
         //##17//
        $Detail17   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail17'];
        $Qty17      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty17'     ];
        $Price17    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price17'   ];
        
        $PriceTotal17 = $Price17 * $Qty17;
        if($Price17!=0){
        $ReceiptNo17     = "17";
        $NumPrice17 = number_format($Price17,2,'.',',');
        
        $NumPriceTotal17 = number_format($PriceTotal17,2,'.',',');
        } else { $NumPrice17 =""; $ReceiptNo17 = "";$Qty17 = "" ; $NumPriceTotal17 = "";}
        //##END17//
          
         //##18//
        $Detail18   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail18'];
        $Qty18      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty18'     ];
        $Price18    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price18'   ];
        
        $PriceTotal18 = $Price18 * $Qty18;
        if($Price18!=0){
        $ReceiptNo18     = "18";
        $NumPrice18 = number_format($Price18,2,'.',',');
        
        $NumPriceTotal18 = number_format($PriceTotal18,2,'.',',');
        } else { $NumPrice18 =""; $ReceiptNo18 = "";$Qty18 = "" ; $NumPriceTotal18 = "";}
        //##END18//
          

        
        
        
         //##19//
        $Detail19   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail19'];
        $Qty19      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty19'     ];
        $Price19    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price19'   ];
        
        $PriceTotal19 = $Price19 * $Qty19;
        if($Price19!=0){
        $ReceiptNo19     = "19";
        $NumPrice19 = number_format($Price19,2,'.',',');
        
        $NumPriceTotal19 = number_format($PriceTotal19,2,'.',',');
        } else { $NumPrice19 =""; $ReceiptNo19 = "";$Qty19 = "" ; $NumPriceTotal19 = "";}
        //##END19//
        
        
        //##20//
        $Detail20   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail20'];
        $Qty20      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty20'     ];
        $Price20    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price20'   ];
        
        $PriceTotal20 = $Price20 * $Qty20;
        if($Price20!=0){
        $ReceiptNo20     = "20";
        $NumPrice20 = number_format($Price20,2,'.',',');
        
        $NumPriceTotal20 = number_format($PriceTotal20,2,'.',',');
        } else { $NumPrice20 =""; $ReceiptNo20 = "";$Qty20 = "" ; $NumPriceTotal20 = "";}
        //##END20//
        
        
        $TotalAmount =  $PriceTotal1 + $PriceTotal2 +$PriceTotal3 + $PriceTotal4 + $PriceTotal5  ;
        $TotalAmount =  $TotalAmount + $PriceTotal6 + $PriceTotal7 + $PriceTotal8  + $PriceTotal9 + $PriceTotal10 ;
        $TotalAmount =  $TotalAmount + $PriceTotal11 + $PriceTotal12 + $PriceTotal13  + $PriceTotal14 + $PriceTotal15 ;
        $TotalAmount =  $TotalAmount + $PriceTotal16 + $PriceTotal17 + $PriceTotal18  + $PriceTotal19 + $PriceTotal20 ;
        $n2s = new num2text;
        $TextTotalAmount =  $n2s->convert($TotalAmount) ;
        $NumTotalAmount =  number_format($TotalAmount,2,'.',',');
        
        if ($DisableAmount==1){
            $NumTotalAmount = "";
            $TextTotalAmount = "";
        };
        
        $MYBANKACCNAME      =   "SIAMSOFT.COM CO.,LTD.";
        $MYBANK             =   "KASIKORNBANK   SEACONSQUARE";
        $MYBANKNO           =   "095-2-21493-6  SAVING";


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

$pdf = new PDF('P','mm','A4');


//require('fpdf.php');
 
//$pdf=new FPDF( 'P' , 'mm' , array( 100,200 ) );
$pdf->SetTitle('FPDF tutorial');
$pdf->AddFont('DilleniaUPC','B','dillb.php');
$pdf->AddPage();


$pdf->Image('quotation5.jpg', -1, 0, 210);
//pk-signature.jpg
$pdf->Image('pk-signature.jpg', 28, 236,40);
//$pdf->Image('receipt4.jpg', 10, 148, 199,148);
//$pdf->Image('receipt-img.jpg', 145, 0, 144);
//$pdf->Image('stamper3.gif', 123, 198.75, 16);
//$pdf->Image('stamper3.gif', 268, 198.75, 16);
$pdf->SetFont('DilleniaUPC','B',12);
$SS_L0 ="";
$pdf->MultiCell(0,44, $SS_L0, 0, 'L');

$pdf->MultiCell(0,8, $SS_L0, 0, 'L');
//////////////////////
$pdf->MultiCell(0,1, $EMPTYBLANK, 0, 'R');
/////////////////////
$SS_RNumber1 ="เอกสารเลขที่       ".$QuotationNo;
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

////////////////////////////
$SS_Expire_Date ="Expire Date     7 Days";
$SS_Expire_Date .="                                 ";
$pdf->MultiCell(0,0, $SS_Expire_Date, 0, 'R');
////////////////////////////


$pdf->MultiCell(0,20, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo1 ="               ";
$SS_RNo1 .=$QLN1;
$pdf->MultiCell(0,0, $SS_RNo1, 0, 'L');
////////////////////////////
$SS_RDetail1 ="                                          ";
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
$SS_Price1 .="     ";
$pdf->MultiCell(0,0, $SS_Price1, 0, 'R');
////////////////////////////


$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo2 ="               ";
$SS_RNo2 .=$QLN2;
$pdf->MultiCell(0,0, $SS_RNo2, 0, 'L');
////////////////////////////
$SS_RDetail2 ="                                          ";
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
$SS_Price2 .="     ";
$pdf->MultiCell(0,0, $SS_Price2, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo3 ="               ";
$SS_RNo3 .=$QLN3;
$pdf->MultiCell(0,0, $SS_RNo3, 0, 'L');
////////////////////////////
$SS_RDetail3 ="                                          ";
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
$SS_Price3 .="     ";
$pdf->MultiCell(0,0, $SS_Price3, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo4 ="               ";
$SS_RNo4 .=$QLN4;
$pdf->MultiCell(0,0, $SS_RNo4, 0, 'L');
////////////////////////////
$SS_RDetail4 ="                                          ";
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
$SS_Price4 .="     ";
$pdf->MultiCell(0,0, $SS_Price4, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo5 ="               ";
$SS_RNo5 .=$ReceiptNo5;
$pdf->MultiCell(0,0, $SS_RNo5, 0, 'L');
////////////////////////////
$SS_RDetail5 ="                                          ";
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
$SS_Price5 .="     ";
$pdf->MultiCell(0,0, $SS_Price5, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_RNo6 ="               ";
$SS_RNo6 .=$ReceiptNo6;
$pdf->MultiCell(0,0, $SS_RNo6, 0, 'L');
////////////////////////////
$SS_RDetail6 ="                                          ";
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
$SS_Price6 .="     ";
$pdf->MultiCell(0,0, $SS_Price6, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////

///####### 7 ####
$SS_RNo7 ="               ";
$SS_RNo7 .=$ReceiptNo7;
$pdf->MultiCell(0,0, $SS_RNo7, 0, 'L');
////////////////////////////
$SS_RDetail7 ="                                          ";
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
$SS_Price7 .="     ";
$pdf->MultiCell(0,0, $SS_Price7, 0, 'R');



////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 7 #####

///####### 8 ####
$SS_RNo8 ="               ";
$SS_RNo8 .=$ReceiptNo8;
$pdf->MultiCell(0,0, $SS_RNo8, 0, 'L');
////////////////////////////
$SS_RDetail8 ="                                          ";
$SS_RDetail8 .=$Detail8;
$pdf->MultiCell(0,0, $SS_RDetail8, 0, 'L');
////////////////////////////
$SS_RUnitPrice8 =$NumPrice8;
$SS_RUnitPrice8 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice8, 0, 'R');
////////////////////////////
$SS_RQt8 =$Qty8;
$SS_RQt8 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt8, 0, 'R');
////////////////////////////
$SS_Price8 =$NumPriceTotal8;
$SS_Price8 .="     ";
$pdf->MultiCell(0,0, $SS_Price8, 0, 'R');



////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 8 #####

///####### 9 ####
$SS_RNo9 ="               ";
$SS_RNo9 .=$ReceiptNo9;
$pdf->MultiCell(0,0, $SS_RNo9, 0, 'L');
////////////////////////////
$SS_RDetail9 ="                                          ";
$SS_RDetail9 .=$Detail9;
$pdf->MultiCell(0,0, $SS_RDetail9, 0, 'L');
////////////////////////////
$SS_RUnitPrice9 =$NumPrice9;
$SS_RUnitPrice9 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice9, 0, 'R');
////////////////////////////
$SS_RQt9 =$Qty9;
$SS_RQt9 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt9, 0, 'R');
////////////////////////////
$SS_Price9 =$NumPriceTotal9;
$SS_Price9 .="     ";
$pdf->MultiCell(0,0, $SS_Price9, 0, 'R');




////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 9 #####


///####### 10 ####
$SS_RNo10 ="               ";
$SS_RNo10 .=$ReceiptNo10;
$pdf->MultiCell(0,0, $SS_RNo10, 0, 'L');
////////////////////////////
$SS_RDetail10 ="                                          ";
$SS_RDetail10 .=$Detail10;
$pdf->MultiCell(0,0, $SS_RDetail10, 0, 'L');
////////////////////////////
$SS_RUnitPrice10 =$NumPrice10;
$SS_RUnitPrice10 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice10, 0, 'R');
////////////////////////////
$SS_RQt10 =$Qty10;
$SS_RQt10 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt10, 0, 'R');
////////////////////////////
$SS_Price10 =$NumPriceTotal10;
$SS_Price10 .="     ";
$pdf->MultiCell(0,0, $SS_Price10, 0, 'R');



////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 10 #####

///####### 11 ####
$SS_RNo11 ="               ";
$SS_RNo11 .=$ReceiptNo11;
$pdf->MultiCell(0,0, $SS_RNo11, 0, 'L');
////////////////////////////
$SS_RDetail11 ="                                          ";
$SS_RDetail11 .=$Detail11;
$pdf->MultiCell(0,0, $SS_RDetail11, 0, 'L');
////////////////////////////
$SS_RUnitPrice11 =$NumPrice11;
$SS_RUnitPrice11 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice11, 0, 'R');
////////////////////////////
$SS_RQt11 =$Qty11;
$SS_RQt11 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt11, 0, 'R');
////////////////////////////
$SS_Price11 =$NumPriceTotal11;
$SS_Price11 .="     ";
$pdf->MultiCell(0,0, $SS_Price11, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 11 #####

///####### 12 ####
$SS_RNo12 ="               ";
$SS_RNo12 .=$ReceiptNo12;
$pdf->MultiCell(0,0, $SS_RNo12, 0, 'L');
////////////////////////////
$SS_RDetail12 ="                                          ";
$SS_RDetail12 .=$Detail12;
$pdf->MultiCell(0,0, $SS_RDetail12, 0, 'L');
////////////////////////////
$SS_RUnitPrice12 =$NumPrice12;
$SS_RUnitPrice12 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice12, 0, 'R');
////////////////////////////
$SS_RQt12 =$Qty12;
$SS_RQt12 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt12, 0, 'R');
////////////////////////////
$SS_Price12 =$NumPriceTotal12;
$SS_Price12 .="     ";
$pdf->MultiCell(0,0, $SS_Price12, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 12 #####

///####### 13 ####
$SS_RNo13 ="               ";
$SS_RNo13 .=$ReceiptNo13;
$pdf->MultiCell(0,0, $SS_RNo13, 0, 'L');
////////////////////////////
$SS_RDetail13 ="                                          ";
$SS_RDetail13 .=$Detail13;
$pdf->MultiCell(0,0, $SS_RDetail13, 0, 'L');
////////////////////////////
$SS_RUnitPrice13 =$NumPrice13;
$SS_RUnitPrice13 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice13, 0, 'R');
////////////////////////////
$SS_RQt13 =$Qty13;
$SS_RQt13 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt13, 0, 'R');
////////////////////////////
$SS_Price13 =$NumPriceTotal13;
$SS_Price13 .="     ";
$pdf->MultiCell(0,0, $SS_Price13, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 13 #####

///####### 14 ####
$SS_RNo14 ="               ";
$SS_RNo14 .=$ReceiptNo14;
$pdf->MultiCell(0,0, $SS_RNo14, 0, 'L');
////////////////////////////
$SS_RDetail14 ="                                          ";
$SS_RDetail14 .=$Detail14;
$pdf->MultiCell(0,0, $SS_RDetail14, 0, 'L');
////////////////////////////
$SS_RUnitPrice14 =$NumPrice14;
$SS_RUnitPrice14 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice14, 0, 'R');
////////////////////////////
$SS_RQt14 =$Qty14;
$SS_RQt14 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt14, 0, 'R');
////////////////////////////
$SS_Price14 =$NumPriceTotal14;
$SS_Price14 .="     ";
$pdf->MultiCell(0,0, $SS_Price14, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 14 #####

///####### 15 ####
$SS_RNo15 ="               ";
$SS_RNo15 .=$ReceiptNo15;
$pdf->MultiCell(0,0, $SS_RNo15, 0, 'L');
////////////////////////////
$SS_RDetail15 ="                                          ";
$SS_RDetail15 .=$Detail15;
$pdf->MultiCell(0,0, $SS_RDetail15, 0, 'L');
////////////////////////////
$SS_RUnitPrice15 =$NumPrice15;
$SS_RUnitPrice15 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice15, 0, 'R');
////////////////////////////
$SS_RQt15 =$Qty15;
$SS_RQt15 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt15, 0, 'R');
////////////////////////////
$SS_Price15 =$NumPriceTotal15;
$SS_Price15 .="     ";
$pdf->MultiCell(0,0, $SS_Price15, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 15 #####

///####### 16 ####
$SS_RNo16 ="               ";
$SS_RNo16 .=$ReceiptNo16;
$pdf->MultiCell(0,0, $SS_RNo16, 0, 'L');
////////////////////////////
$SS_RDetail16 ="                                          ";
$SS_RDetail16 .=$Detail16;
$pdf->MultiCell(0,0, $SS_RDetail16, 0, 'L');
////////////////////////////
$SS_RUnitPrice16 =$NumPrice16;
$SS_RUnitPrice16 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice16, 0, 'R');
////////////////////////////
$SS_RQt16 =$Qty16;
$SS_RQt16 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt16, 0, 'R');
////////////////////////////
$SS_Price16 =$NumPriceTotal16;
$SS_Price16 .="     ";
$pdf->MultiCell(0,0, $SS_Price16, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 16 #####

///####### 17 ####
$SS_RNo17 ="               ";
$SS_RNo17 .=$ReceiptNo17;
$pdf->MultiCell(0,0, $SS_RNo17, 0, 'L');
////////////////////////////
$SS_RDetail17 ="                                          ";
$SS_RDetail17 .=$Detail17;
$pdf->MultiCell(0,0, $SS_RDetail17, 0, 'L');
////////////////////////////
$SS_RUnitPrice17 =$NumPrice17;
$SS_RUnitPrice17 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice17, 0, 'R');
////////////////////////////
$SS_RQt17 =$Qty17;
$SS_RQt17 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt17, 0, 'R');
////////////////////////////
$SS_Price17 =$NumPriceTotal17;
$SS_Price17 .="     ";
$pdf->MultiCell(0,0, $SS_Price17, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 17 #####

///####### 18 ####
$SS_RNo18 ="               ";
$SS_RNo18 .=$ReceiptNo18;
$pdf->MultiCell(0,0, $SS_RNo18, 0, 'L');
////////////////////////////
$SS_RDetail18 ="                                          ";
$SS_RDetail18 .=$Detail18;
$pdf->MultiCell(0,0, $SS_RDetail18, 0, 'L');
////////////////////////////
$SS_RUnitPrice18 =$NumPrice18;
$SS_RUnitPrice18 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice18, 0, 'R');
////////////////////////////
$SS_RQt18 =$Qty18;
$SS_RQt18 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt18, 0, 'R');
////////////////////////////
$SS_Price18 =$NumPriceTotal18;
$SS_Price18 .="     ";
$pdf->MultiCell(0,0, $SS_Price18, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 18 #####

///####### 19 ####
$SS_RNo19 ="               ";
$SS_RNo19 .=$ReceiptNo19;
$pdf->MultiCell(0,0, $SS_RNo19, 0, 'L');
////////////////////////////
$SS_RDetail19 ="                                          ";
$SS_RDetail19 .=$Detail19;
$pdf->MultiCell(0,0, $SS_RDetail19, 0, 'L');
////////////////////////////
$SS_RUnitPrice19 =$NumPrice19;
$SS_RUnitPrice19 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice19, 0, 'R');
////////////////////////////
$SS_RQt19 =$Qty19;
$SS_RQt19 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt19, 0, 'R');
////////////////////////////
$SS_Price19 =$NumPriceTotal19;
$SS_Price19 .="     ";
$pdf->MultiCell(0,0, $SS_Price19, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////


///#### END 19 #####

///####### 20 ####
$SS_RNo20 ="               ";
$SS_RNo20 .=$ReceiptNo20;
$pdf->MultiCell(0,0, $SS_RNo20, 0, 'L');
////////////////////////////
$SS_RDetail20 ="                                          ";
$SS_RDetail20 .=$Detail20;
$pdf->MultiCell(0,0, $SS_RDetail20, 0, 'L');
////////////////////////////
$SS_RUnitPrice20 =$NumPrice20;
$SS_RUnitPrice20 .="                                                   ";
$pdf->MultiCell(0,0, $SS_RUnitPrice20, 0, 'R');
////////////////////////////
$SS_RQt20 =$Qty20;
$SS_RQt20 .="                                    ";
$pdf->MultiCell(0,0, $SS_RQt20, 0, 'R');
////////////////////////////
$SS_Price20 =$NumPriceTotal20;
$SS_Price20 .="     ";
$pdf->MultiCell(0,0, $SS_Price20, 0, 'R');


////////////////////////////
$pdf->MultiCell(0,8, $SS_L0, 0, 'L');
////////////////////////////


///#### END 20 #####

///#### TOTAL
$SS_Total =$NumTotalAmount;
$SS_Total .="     ";
$pdf->MultiCell(0,0, $SS_Total, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
$SS_CASH_CHEQUE ="                                     ";
$SS_CASH_CHEQUE .="CASH";

$pdf->MultiCell(0,0, $SS_CASH_CHEQUE, 0, 'L');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////
////////////////////////////
$SS_MY_BANK ="                                     ";
$SS_MY_BANK .=$MYBANK;

$pdf->MultiCell(0,0, $SS_MY_BANK, 0, 'L');
////////////////////////////

$SS_Amount =$NumTotalAmount;
$SS_Amount .="     ";
$pdf->MultiCell(0,0, $SS_Amount, 0, 'R');
////////////////////////////
$pdf->MultiCell(0,5, $SS_L0, 0, 'L');
////////////////////////////

////////////////////////////
$SS_MY_BANK_NO ="                                     ";
$SS_MY_BANK_NO .=$MYBANKNO;

$pdf->MultiCell(0,0, $SS_MY_BANK_NO, 0, 'L');
////////////////////////////
////////////////////////////
$pdf->MultiCell(0,6, $SS_L0, 0, 'L');
////////////////////////////

////////////////////////////
$SS_MY_BANK_NAME ="                                     ";
$SS_MY_BANK_NAME .=$MYBANKACCNAME;

$pdf->MultiCell(0,0, $SS_MY_BANK_NAME, 0, 'L');
////////////////////////////

$SS_Amount_Text =$SS_OwnID = $TextTotalAmount;
$SS_Amount_Text .="                          ";
$pdf->MultiCell(0,0, $SS_Amount_Text, 0, 'R');
////////////////////////////
////////////////////////////
$pdf->MultiCell(0,27, $SS_L0, 0, 'L');
////////////////////////////

$SS_Amount_DATE ="                         ";
$SS_Amount_DATE .=date("d/m/Y", strtotime($IssueDate));
$pdf->MultiCell(0,0, $SS_Amount_DATE, 0, 'L');
////////////////////////////


////////////////////////////
///######################
$MyPDF1 = "quotation-";
$MyPDF2 = $QuotationNo;
$MyPDF3 = date("d/m/Y", strtotime($IssueDate));
$MyPDF4 = $Domain1;
$MyPDF5 = $TotalAmount;
$MyPDF = $MyPDF1.$MyPDF2."-".$MyPDF3."-".$MyPDF4."-".$MyPDF5.".pdf";

$pdf->Output($MyPDF,'I');

//$pdf->Output();

?>