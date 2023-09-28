<?php

$InputName = $_REQUEST['Name'];
$InputAddress = $_REQUEST['Address'];
$InputTaxNo = $_REQUEST['TaxNo'];
$InputNo = $_REQUEST['No'];
$InputTaxType = $_REQUEST['TaxType'];
$InputRemark = $_REQUEST['Remark'];


//echo $InputName.$InputAddress.$InputTaxNo.$InputNo;

$SQL_TAXW = "INSERT INTO  `siamsoft_post`.`ss_apcode` (";
$SQL_TAXW .= "`APID` ,";
$SQL_TAXW .= "`APName` ,";
$SQL_TAXW .= "`APAddress` ,";
$SQL_TAXW .= "`APTaxNo` ,";
$SQL_TAXW .= "`APNo` ,";
$SQL_TAXW .= "`TaxType` ,";
$SQL_TAXW .= "`Remark`";
$SQL_TAXW .= " )";
$SQL_TAXW .= " VALUES (";
$SQL_TAXW .= " NULL ,  '".$InputName."',  '".$InputAddress."',  '".$InputTaxNo."',  '".$InputNo."', NULL";
$SQL_TAXW .= " )";

//echo $SQL_TAXW;
$RESULT_TAXW=$adminlogin->query($SQL_TAXW);
//$ROW_TAXW= mysql_fetch_array($RESULT_TAXW);

echo "added";
?>