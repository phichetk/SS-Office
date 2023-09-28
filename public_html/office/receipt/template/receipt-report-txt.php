
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? basename(__FILE__, '.php'): "";

 echo $SHOW_FILE_NAME;
////
$_REQUEST['INPUTYEAR'];

$issueThisYear = date('Y');
$ThisYear1 = $issueThisYear;
$LastYear1 = $issueThisYear -1;
$NextYear1 = $issueThisYear +1;

if(isset($_REQUEST['INPUTYEAR'])){
    $YearInput =  $_REQUEST['INPUTYEAR'];
}else{
    $YearInput = $ThisYear1;
}

$issuePrefix = $issueThisYear.$issueThisMonth;
#sort CustomerID
if(isset($_REQUEST['CustomerID'])){
    $C_ID_Yes =  1;
    $C_ID =  $_REQUEST['CustomerID'];
    $C_ID_SQL = " AND ss_billing_transection.CustomerID ='".$C_ID."'";
}
?>
            <table>
                <FROM>
                <tbody>
                         <tr>
                              <td> 
							  <a  href="./main.php?myKey=Receipt-Report-Txt&INPUTYEAR=<?=$LastYear1?>"  ><?=$LastYear1?></a> || 
							  <a  href="./main.php?myKey=Receipt-Report-Txt&INPUTYEAR=<?=$ThisYear1?>"  ><?=$ThisYear1?></a> || 
							  <a  href="./main.php?myKey=Receipt-Report-Txt&INPUTYEAR=<?=$NextYear1?>" ><?=$NextYear1?></a>  </td>
                         </tr>
                         </tr>
                </tbody>
                </FROM>
            </table>
        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
		  <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">Date</td> 
                  <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ID</td>
		  <td width="25%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
                  <td width="5%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ราคา1</td>
	         </tr> 
<?

$SQL_RECEIPT_REPORT  = " SELECT ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.ID,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.IssueName,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.IssueDate,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.BillingNo,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price1,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price2,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price3,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price4,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price5,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price6,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.Price7,  ";

$SQL_RECEIPT_REPORT .= " ss_billing_customer.CompanyName,  ";



$SQL_RECEIPT_REPORT .= " ss_billing_customer.ID AS GID  ";


$SQL_RECEIPT_REPORT .= " FROM ss_billing_transection  ";
$SQL_RECEIPT_REPORT .= " INNER JOIN ss_billing_customer  ";
$SQL_RECEIPT_REPORT .= " ON  ";
$SQL_RECEIPT_REPORT .= " ss_billing_transection.CustomerID=ss_billing_customer.ID ";
$SQL_RECEIPT_REPORT .= " WHERE year(ss_billing_transection.IssueDate)=".$YearInput;
$SQL_RECEIPT_REPORT .= $C_ID_SQL;

$SQL_RECEIPT_REPORT .= " ORDER BY BillingNo ASC";

//echo $SQL_RECEIPT_REPORT;

$RESULT_RECEIPT_REPORT=$adminlogin->query($SQL_RECEIPT_REPORT);
    $TotalALL =0; //Start $TotalALL;
    while($ROW_RECEIPT_REPORT= mysql_fetch_array($RESULT_RECEIPT_REPORT)){
        
    $TotalPrice = $ROW_RECEIPT_REPORT['Price1']
                +$ROW_RECEIPT_REPORT['Price2']
                +$ROW_RECEIPT_REPORT['Price3']
                +$ROW_RECEIPT_REPORT['Price4']
                +$ROW_RECEIPT_REPORT['Price5']
                +$ROW_RECEIPT_REPORT['Price6']
                +$ROW_RECEIPT_REPORT['Price7'];
               
?>
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><NOBR><A href='main.php?myKey=Receipt-Issue-Edit&TransectionID=<?echo  intval($ROW_RECEIPT_REPORT['ID']); ?>' ><? echo $ROW_RECEIPT_REPORT['IssueDate']; ?></A>|</NOBR></td>
                    <td><? echo $ROW_RECEIPT_REPORT['BillingNo']; ?>|</td>
                    <td align="right" >|<?=number_format($TotalPrice,2)?>&nbsp;&nbsp;&nbsp;&nbsp;|</td>
                	<td><NOBR><? echo $ROW_RECEIPT_REPORT['CompanyName']?></NOBR></td>
                </tr>

<?      
    $TotalALL = $TotalALL +$TotalPrice;
    }                 
?>
                <tr>
                    <td></td>
                    <td></td>
                	<td></td>
                    <td align="right"><b><?=number_format($TotalALL,2)?>  </br></td>
                    <td></td>
                	<td></td>
                </tr>
            </tbody>
        </table>
