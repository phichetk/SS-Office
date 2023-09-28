<?php
/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "apadd-exe ": "";
 echo $SHOW_FILE_NAME;
/////

$InputName = $_REQUEST['Name'];
$InputAddress = $_REQUEST['Address'];
$InputTaxNo = $_REQUEST['TaxNo'];
$InputNo = $_REQUEST['No'];
$InputTaxType = $_REQUEST['TaxType'];
$InputRemark = $_REQUEST['Remark'];


//echo $InputName.$InputAddress.$InputTaxNo.$InputNo;

$SQL_TAXW = "INSERT INTO  `siamsoft_post`.`ss_apcode` (";
$SQL_TAXW .= "`APID` ,                      ";
$SQL_TAXW .= "`APName` ,                    ";
$SQL_TAXW .= "`APAddress` ,                 ";
$SQL_TAXW .= "`APTaxNo` ,                   ";
$SQL_TAXW .= "`APNo` ,                      ";
$SQL_TAXW .= "`TaxType` ,                   ";
$SQL_TAXW .= "`Status` ,                   ";
$SQL_TAXW .= "`Remark`                      ";
$SQL_TAXW .= " )                            ";
$SQL_TAXW .= " VALUES (                     ";
$SQL_TAXW .= " NULL ,  '".$InputName."',    ";
$SQL_TAXW .= "  '".$InputAddress."',        ";
$SQL_TAXW .= "  '".$InputTaxNo."',          ";
$SQL_TAXW .= "  '".$InputNo."',             ";
$SQL_TAXW .= "  '1',             ";
$SQL_TAXW .= "  NULL                        ";
$SQL_TAXW .= " )";

//echo $SQL_TAXW;
$RESULT_TAXW=$adminlogin->query($SQL_TAXW);
//$ROW_TAXW= mysql_fetch_array($RESULT_TAXW);

echo "added";
?>