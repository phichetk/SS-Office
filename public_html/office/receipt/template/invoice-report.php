
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "invoice-report ": "";
 echo $SHOW_FILE_NAME;
/////
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

?>
            <table>
                <FROM>
                <tbody>
                     <tr bgcolor="#FFCC00"> 
            				  <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ตั้งแต่วันที่</td> 
                              <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ถึงวันที่</td>
                              <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb"></td>
            	         </tr> 
                         <tr bgcolor="#CFE4E9"> 
       				          <td><script>DateInput('issueDate', true, 'DD-MM-YYYY')</script></td>
                              <td><script>DateInput('issueDate', true, 'DD-MM-YYYY')</script></td>
                              <td><input type="submit" /> </td>
            	         </tr> 
                         <tr>
                              <td><a  >ALL</a> || 
							  <a  href="./main.php?myKey=Receipt-Report&INPUTYEAR=<?=$LastYear1?>"  ><?=$LastYear1?></a> || 
							  <a  href="./main.php?myKey=Receipt-Report&INPUTYEAR=<?=$ThisYear1?>"  ><?=$ThisYear1?></a> || 
							  <a  href="./main.php?myKey=Receipt-Report&INPUTYEAR=<?=$NextYear1?>" ><?=$NextYear1?></a>  </td>
                         </tr>
                         </tr>
                </tbody>
                </FROM>
            </table>

        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
            
            
             
             <tr bgcolor="#FFCC00"> 
				  <td width="10" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
                  <td width="20" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ID</td>
				  <td width="50" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
				  <td width="50" align="center" bgcolor="#6A98A7" class="Ar12Bb">รายการ</td>
                  <td width="5" align="center" bgcolor="#6A98A7" class="Ar12Bb">พิมพ์ซอง</td>
                  <td width="5" align="center" bgcolor="#6A98A7" class="Ar12Bb">พิมพ์เอกสาร</td>
	         </tr> 
<?

$SQL_RECEIPT_REPORT  = " SELECT ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.ID,  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.IssueName,  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.IssueDate,  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.InvoiceNo,  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.Domain1,  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.ID AS GID,  ";
$SQL_RECEIPT_REPORT .= " ss_billing_customer.CompanyName  ";

$SQL_RECEIPT_REPORT .= " FROM ss_invoice_transection  ";
$SQL_RECEIPT_REPORT .= " INNER JOIN ss_billing_customer  ";
$SQL_RECEIPT_REPORT .= " ON  ";
$SQL_RECEIPT_REPORT .= " ss_invoice_transection.CustomerID=ss_billing_customer.ID ORDER BY InvoiceNo ASC";

//echo $SQL_RECEIPT_REPORT;

$RESULT_RECEIPT_REPORT=$adminlogin->query($SQL_RECEIPT_REPORT);
    while($ROW_RECEIPT_REPORT= mysql_fetch_array($RESULT_RECEIPT_REPORT)){
           
?>
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><A href='main.php?myKey=Invoice-Issue-Edit&TransectionID=<?echo  intval($ROW_RECEIPT_REPORT['ID']); ?>' ><? echo $ROW_RECEIPT_REPORT['IssueDate']; ?></A></td>
                    <td><? echo $ROW_RECEIPT_REPORT['InvoiceNo']; ?></td>
                	<td><? echo $ROW_RECEIPT_REPORT['CompanyName']?></td>
                	<td><? echo $ROW_RECEIPT_REPORT['Domain1']?></td>
                    <td><A href='../post/post.php?GID=<?=$ROW_RECEIPT_REPORT['GID']?>' target='_blank' >พิมพ์</A></td>
                    <td><A href='invoiceprint.php?TransectionID=<?=$ROW_RECEIPT_REPORT['ID']?>' target='_blank' >พิมพ์</A></td>
                </tr>

<?      
    }  
?>
            </tbody>
        </table>