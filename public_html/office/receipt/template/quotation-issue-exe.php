
<?php

/////##############
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "quotation-issue-exe ": "";
 echo $SHOW_FILE_NAME;

$CustomerID = $_REQUEST['CustomerID'];
$issueID = $_REQUEST['issueID'];
$issueDate = $_REQUEST['issueDate'];
$Domain1    = $_REQUEST['Domain1'];


for($i=0;$i<7;$i++) {
                                 
    $issueNo[$i]       =$_REQUEST['issueNo'][$i];
    $issueDetail[$i]   =$_REQUEST['issueDetail'][$i];
    $issueQu[$i]       =$_REQUEST['issueQu'][$i];
    $issuePrice[$i]    =$_REQUEST['issuePrice'][$i];    
}

$SQL_ADD_ISSUE  = " INSERT INTO ss_quotation_transection ( ";
//$SQL_ADD_ISSUE .= " `ID` , ";
$SQL_ADD_ISSUE .= " IssueDate , ";
$SQL_ADD_ISSUE .= " QuotationNo , ";
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

$SQL_ADD_ISSUE .= " Detail8 , ";
$SQL_ADD_ISSUE .= " Qty8 , ";
$SQL_ADD_ISSUE .= " Price8 , ";

$SQL_ADD_ISSUE .= " Detail9 , ";
$SQL_ADD_ISSUE .= " Qty9 , ";
$SQL_ADD_ISSUE .= " Price9 , ";

$SQL_ADD_ISSUE .= " Detail10 , ";
$SQL_ADD_ISSUE .= " Qty10 , ";
$SQL_ADD_ISSUE .= " Price10 , ";

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

$SQL_ADD_ISSUE .= " '".$issueDetail[7]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[7]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[7]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[8]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[8]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[8]."', ";

$SQL_ADD_ISSUE .= " '".$issueDetail[9]."', ";
$SQL_ADD_ISSUE .= " '".$issueQu[9]."', ";
$SQL_ADD_ISSUE .= " '".$issuePrice[9]."', ";

//$SQL_ADD_ISSUE .= " '".$issueDetail[10]."', ";
//$SQL_ADD_ISSUE .= " '".$issueQu[10]."', ";
//$SQL_ADD_ISSUE .= " '".$issuePrice[10]."', ";

$SQL_ADD_ISSUE .= " 'pk' ";
$SQL_ADD_ISSUE .= " ) ";

//$SQL_CUSTOMER_LIST = "SELECT * FROM ss_billing_customer ";
$RESULT_ADD_ISSUE=$adminlogin->query($SQL_ADD_ISSUE);

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
