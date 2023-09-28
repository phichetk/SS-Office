 <?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "newtaxw-exe ": "";
 echo $SHOW_FILE_NAME;
/////
?>

<?php
$TaxID          = $_REQUEST['TaxID'];
$APID           = $_REQUEST['APID'];
$TaxType         = $_REQUEST['TaxType'];

$line05detail   = $_REQUEST['line05detail'];
$line05date     = $_REQUEST['line05date'];
$line05amount   = $_REQUEST['line05amount'];
$line05percent  = $_REQUEST['line05percent'];

$line06detail   = $_REQUEST['line06detail'];
$line06date     = $line05date ;
$line06amount   = $_REQUEST['line06amount'];
$line06percent  = $_REQUEST['line06percent'];


echo "<BR>";
echo $TaxID;
echo "<BR>";
echo $PaidNameID;
echo "<BR>";
echo $TaxType;
echo "<BR>";
echo $line05detail;
echo "<BR>";
echo $line05date;
echo "<BR>";
echo $line05amount;
echo "<BR>";
echo $line05percent;
echo "<BR>";
echo $line06detail;
echo "<BR>";
echo $line06date;
echo "<BR>";
echo $line06amount;
echo "<BR>";
echo $line06percent;
echo "<BR>";
$SQL_INSERT_NEW_WHT = " INSERT INTO  `siamsoft_office`.`ss_taxw` ( ";
$SQL_INSERT_NEW_WHT .= "     `TaxID` , ";
$SQL_INSERT_NEW_WHT .= "     `CompID` , ";
$SQL_INSERT_NEW_WHT .= "     `APID` , ";
$SQL_INSERT_NEW_WHT .= "     `Line05Detail` , ";
$SQL_INSERT_NEW_WHT .= "     `Line05Date` , ";
$SQL_INSERT_NEW_WHT .= "     `Line05Amount` , ";
$SQL_INSERT_NEW_WHT .= "     `Line05W` , ";
$SQL_INSERT_NEW_WHT .= "     `Line06Detail` , ";
$SQL_INSERT_NEW_WHT .= "     `Line06Date` , ";
$SQL_INSERT_NEW_WHT .= "     `Line06Amount` , ";
$SQL_INSERT_NEW_WHT .= "     `Line06W` , ";
$SQL_INSERT_NEW_WHT .= "     `Remark` ";
$SQL_INSERT_NEW_WHT .= " ) VALUES (   ";
$SQL_INSERT_NEW_WHT .= "     '".$TaxID."',   ";
$SQL_INSERT_NEW_WHT .= "     '1',  ";
$SQL_INSERT_NEW_WHT .= "     '".$APID."', ";
$SQL_INSERT_NEW_WHT .= "     '".$line05detail."', ";
$SQL_INSERT_NEW_WHT .= "     '".$line05date."', ";
$SQL_INSERT_NEW_WHT .= "     '".$line05amount."',   ";
$SQL_INSERT_NEW_WHT .= "     '".$line05percent."', ";
$SQL_INSERT_NEW_WHT .= "     '".$line06detail."', ";
$SQL_INSERT_NEW_WHT .= "     '".$line06date."',   ";
$SQL_INSERT_NEW_WHT .= "     '".$line06amount."',   ";
$SQL_INSERT_NEW_WHT .= "     '".$line05percent."',   ";
$SQL_INSERT_NEW_WHT .= "     'REMARKS' ";
$SQL_INSERT_NEW_WHT .= "     ) ";
echo $SQL_INSERT_NEW_WHT;

//echo $SQL_TAXW;
$RESULT_INSERT_NEW_WHT   =   $adminlogin->query($SQL_INSERT_NEW_WHT);
//$ROW_FIND_LAST_TAX_NO       =   mysql_fetch_array($RESULT_FIND_LAST_TAX_NO);



?>