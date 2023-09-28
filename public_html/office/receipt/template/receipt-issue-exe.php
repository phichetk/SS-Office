
<?php

/////##############
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-issue-exe ": "";
 echo $SHOW_FILE_NAME;

$CustomerID = $_REQUEST['CustomerID'];
$issueID = $_REQUEST['issueID'];
$issueDate = $_REQUEST['issueDate'];

$Domain1 = $_REQUEST['Domain1'];


for($i=0;$i<7;$i++) {
                                 
    $issueNo[$i]       =$_REQUEST['issueNo'][$i];
    $issueDetail[$i]   =$_REQUEST['issueDetail'][$i];
    $issueQu[$i]       =$_REQUEST['issueQu'][$i];
    $issuePrice[$i]    =$_REQUEST['issuePrice'][$i];    
}

$SQL_ADD_ISSUE  = " INSERT INTO ss_billing_transection ( ";
//$SQL_ADD_ISSUE .= " `ID` , ";
$SQL_ADD_ISSUE .= " IssueDate , ";
$SQL_ADD_ISSUE .= " BillingNo , ";
$SQL_ADD_ISSUE .= " CustomerID , ";

$SQL_ADD_ISSUE .= " Domain1 , ";

$SQL_ADD_ISSUE .= " Detail1 , ";
$SQL_ADD_ISSUE .= " Qty1 , ";
$SQL_ADD_ISSUE .= " Price1 , ";

$SQL_ADD_ISSUE .= " Detail2 , ";
$SQL_ADD_ISSUE .= " Qty2 , ";
$SQL_ADD_ISSUE .= " Price2 , ";

$SQL_ADD_ISSUE .= " Detail3 , ";
$SQL_ADD_ISSUE .= " Qty3 , ";
$SQL_ADD_ISSUE .= " Price3 , ";

$SQL_ADD_ISSUE .= " Detail4 , ";
$SQL_ADD_ISSUE .= " Qty4 , ";
$SQL_ADD_ISSUE .= " Price4 , ";

$SQL_ADD_ISSUE .= " Detail5 , ";
$SQL_ADD_ISSUE .= " Qty5 , ";
$SQL_ADD_ISSUE .= " Price5 , ";

$SQL_ADD_ISSUE .= " Detail6 , ";
$SQL_ADD_ISSUE .= " Qty6 , ";
$SQL_ADD_ISSUE .= " Price6 , ";

$SQL_ADD_ISSUE .= " Detail7 , ";
$SQL_ADD_ISSUE .= " Qty7 , ";
$SQL_ADD_ISSUE .= " Price7 , ";

$SQL_ADD_ISSUE .= " IssueName ";
$SQL_ADD_ISSUE .= " ) ";
$SQL_ADD_ISSUE .= " VALUES ( ";
//$SQL_ADD_ISSUE .= " NULL , ";
$SQL_ADD_ISSUE .= " '".$issueDate."', ";
$SQL_ADD_ISSUE .= " '".$issueID."', ";
$SQL_ADD_ISSUE .= " '".$CustomerID."', ";

$SQL_ADD_ISSUE .= " '".$Domain1."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[0]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[0]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[0]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[1]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[1]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[1]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[2]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[2]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[2]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[3]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[3]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[3]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[4]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[4]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[4]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[5]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[5]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[5]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[6]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[6]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[6]."', ";

$SQL_ADD_ISSUE .= " 'pk' ";
$SQL_ADD_ISSUE .= " ) ";

//$SQL_CUSTOMER_LIST = "SELECT * FROM ss_billing_customer ";
$RESULT_ADD_ISSUE=$adminlogin->query($SQL_ADD_ISSUE);


///######################ss_main_transection######

$SQL_ADD_MAIN  = " INSERT INTO ss_main_transection ( ";
//$SQL_ADD_MAIN .= " `ID` , ";
//$SQL_ADD_MAIN .= " IssueDate , ";
//$SQL_ADD_MAIN .= " MainNo , ";
//$SQL_ADD_MAIN .= " CustomerID , ";

$SQL_ADD_MAIN .= " Domain1 , ";

$SQL_ADD_MAIN .= " Detail1 , ";
$SQL_ADD_MAIN .= " Qty1 , ";
$SQL_ADD_MAIN .= " Price1 , ";

$SQL_ADD_MAIN .= " Detail2 , ";
$SQL_ADD_MAIN .= " Qty2 , ";
$SQL_ADD_MAIN .= " Price2 , ";

$SQL_ADD_MAIN .= " Detail3 , ";
$SQL_ADD_MAIN .= " Qty3 , ";
$SQL_ADD_MAIN .= " Price3 , ";

$SQL_ADD_MAIN .= " Detail4 , ";
$SQL_ADD_MAIN .= " Qty4 , ";
$SQL_ADD_MAIN .= " Price4 , ";

$SQL_ADD_MAIN .= " Detail5 , ";
$SQL_ADD_MAIN .= " Qty5 , ";
$SQL_ADD_MAIN .= " Price5 , ";

$SQL_ADD_MAIN .= " Detail6 , ";
$SQL_ADD_MAIN .= " Qty6 , ";
$SQL_ADD_MAIN .= " Price6 , ";

$SQL_ADD_MAIN .= " Detail7 , ";
$SQL_ADD_MAIN .= " Qty7 , ";
$SQL_ADD_MAIN .= " Price7 , ";

$SQL_ADD_MAIN .= " BillRef , ";

//$SQL_ADD_MAIN .= " IssueName ";
$SQL_ADD_MAIN .= " ) ";
$SQL_ADD_MAIN .= " VALUES ( ";
//$SQL_ADD_MAIN .= " NULL , ";
//$SQL_ADD_MAIN .= " '".$issueDate."', ";
//$SQL_ADD_MAIN .= " '".$issueID."', ";
//$SQL_ADD_MAIN .= " '".$CustomerID."', ";

$SQL_ADD_MAIN .= " '".$Domain1."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[0]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[0]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[0]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[1]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[1]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[1]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[2]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[2]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[2]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[3]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[3]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[3]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[4]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[4]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[4]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[5]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[5]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[5]."', ";

$SQL_ADD_MAIN .= " '".$issueDetail[6]."', ";
$SQL_ADD_MAIN .= " '".$issueQu[6]."', ";
$SQL_ADD_MAIN .= " '".$issuePrice[6]."', ";

//$SQL_ADD_MAIN .= " '".$issueID."', ";


$SQL_ADD_MAIN .= " 'pk' ";
$SQL_ADD_MAIN .= " ) ";

//$SQL_CUSTOMER_LIST = "SELECT * FROM ss_billing_customer ";
//$RESULT_ADD_MAIN=$adminlogin->query($SQL_ADD_MAIN);

/////################
?>

 <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="5%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
				  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">เลขที่เอกสาร</td>
                  <td width="20%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลูกค้า</td>
              </tr> 
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><? echo $issueDate; ?></td>
                	<td><input type="text" name="issue-ID" id="issue-ID" /></td>
                    <td>&nbsp;<? echo $CustomerID; ?></td>
                 
                    
                </tr>
      </tbody>
        </table>
        <form>
<table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="2%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลำดับที่</td> 
				  <td width="25%" align="center" bgcolor="#6A98A7" class="Ar12Bb">รายการ</td>
                  <td width="2%" align="center" bgcolor="#6A98A7" class="Ar12Bb">จำนวน</td>
                  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ราคาต่อหน่วย</td>
	              
              </tr> 
                                 
              <? for($i=0;$i<9;$i++) {?>                              
                <tr bgcolor="#CFE4E9"> 
                	<td><?=$issueNo[$i]?></td>
                	<td><?=$issueDetail[$i]?></td>
                    <td><?=$issueQu[$i]?></td>
                    <td><?=$issuePrice[$i]?></td>    
                </tr>               
              <? }?> 
              
                <input type="hidden"  value="Receipt-Issue-Exe" name="myKey" />
                <tr>
                	<td></td>
                	<td></td>
                	<td></td>
                </tr>
                    </tbody>
        </table>
        </form>
            </tbody>
        </table>