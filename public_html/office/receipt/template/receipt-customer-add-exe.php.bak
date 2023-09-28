
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-customer-add-exe ": "";
 echo $SHOW_FILE_NAME;
/////


//$InputName = $_REQUEST['Name'];
//$InputAddress = $_REQUEST['Address'];
//$InputTaxNo = $_REQUEST['TaxNo'];
//$InputNo = $_REQUEST['No'];

$InputContactPerson         = $_REQUEST['receipt_contect_name'];
$InputCompanyName           = $_REQUEST['receipt_company_name'];
$InputAddress               = $_REQUEST['receipt_address1'];
$InputAddress2              = $_REQUEST['receipt_address2'];
$InputZipCode               = $_REQUEST['receipt_post'];
$InputPhone                 = $_REQUEST['receipt_tel'];
$InputPhone2                = $_REQUEST['receipt_mobile'];
$InputFax                   = $_REQUEST['receipt_fax'];
$InputTaxNo                 = $_REQUEST['TaxNo'];
//$InputNo                    = $_REQUEST['No'];


//receipt_contect_name
//echo $InputName.$InputAddress.$InputTaxNo.$InputNo;

$SQL_TAXW = "INSERT INTO  ss_billing_customer ( ";
$SQL_TAXW .= "`ID` , ";
$SQL_TAXW .= "`ContactPerson` , ";
$SQL_TAXW .= "`CompanyName` , ";
$SQL_TAXW .= "`Address` , ";
$SQL_TAXW .= "`Address2` , ";
$SQL_TAXW .= "`ZipCode` , ";
$SQL_TAXW .= "`LetterCompanyName` , ";
$SQL_TAXW .= "`LetterAddress` , ";
$SQL_TAXW .= "`LetterAddress2` , ";
$SQL_TAXW .= "`LetterZipCode` , ";
$SQL_TAXW .= "`TAXID` , ";
$SQL_TAXW .= "`Phone` , ";
$SQL_TAXW .= "`Phone2` , ";
$SQL_TAXW .= "`Fax` , ";
$SQL_TAXW .= "`Fax2` ";
$SQL_TAXW .= ") ";
$SQL_TAXW .= "VALUES ( ";
$SQL_TAXW .= "NULL , "; //ID
$SQL_TAXW .= "'".$InputContactPerson."' ,  ";   //ContactPerson
$SQL_TAXW .= "'".$InputCompanyName."' ,  ";     //CompanyName
$SQL_TAXW .= "'".$InputAddress."' ,  ";     //Address
$SQL_TAXW .= "'".$InputAddress2."' ,  ";     //Address2
$SQL_TAXW .= "'".$InputZipCode."' , ";      //ZipCode
$SQL_TAXW .= "'".$InputCompanyName."' , ";      //LetterCompanyName
$SQL_TAXW .= "'".$InputAddress."' , ";      //LetterAddress
$SQL_TAXW .= "'".$InputAddress2."' , ";      //LetterAddress
$SQL_TAXW .= "'".$InputZipCode."' , ";      //LetterZipCode
$SQL_TAXW .= "'".$InputTaxNo."' , ";      //TAXID
$SQL_TAXW .= "'".$InputPhone."' , ";      //Phone
$SQL_TAXW .= "'".$InputPhone."' , ";      //Phone2
$SQL_TAXW .= "'".$InputFax."' , ";      //Fax
$SQL_TAXW .= "'".$InputFax."'   ";      //Fax2
$SQL_TAXW .= "); ";

/*
$SQL_TAXW = "INSERT INTO  `siamsoft_post`.`ss_apcode` (";
$SQL_TAXW .= "`APID` ,";
$SQL_TAXW .= "`APName` ,";
$SQL_TAXW .= "`APAddress` ,";
$SQL_TAXW .= "`APTaxNo` ,";
$SQL_TAXW .= "`APNo` ,";
$SQL_TAXW .= "`Remark`";
$SQL_TAXW .= " )";
$SQL_TAXW .= " VALUES (";
$SQL_TAXW .= " NULL ,  '".$InputName."',  '".$InputAddress."',  '".$InputTaxNo."',  '".$InputNo."', NULL";
$SQL_TAXW .= " )";

*/
//echo $SQL_TAXW;
$RESULT_TAXW=$adminlogin->query($SQL_TAXW);
//$ROW_TAXW= mysql_fetch_array($RESULT_TAXW);

echo "added";
?>