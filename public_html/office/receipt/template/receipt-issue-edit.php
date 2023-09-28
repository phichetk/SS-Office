<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-issue-edit ": "";
 echo $SHOW_FILE_NAME;
/////
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

$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_customer.CompanyName  ";

$SQL_ISSUE_EDIT_FIND_COMPANY .= " FROM ss_billing_transection  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " INNER JOIN ss_billing_customer  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ON  ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " ss_billing_transection.CustomerID=ss_billing_customer.ID ";
$SQL_ISSUE_EDIT_FIND_COMPANY .= " WHERE ss_billing_transection.ID='".$TransectionID."'";


$RESULT_ISSUE_EDIT_FIND_COMPANY=$adminlogin->query($SQL_ISSUE_EDIT_FIND_COMPANY);
    while($ROW_ISSUE_EDIT_FIND_COMPANY= mysql_fetch_array($RESULT_ISSUE_EDIT_FIND_COMPANY)){
        $CompanyName =$ROW_ISSUE_EDIT_FIND_COMPANY['CompanyName'];
        $BillingNo =$ROW_ISSUE_EDIT_FIND_COMPANY['BillingNo'];
        $IssueDate =$ROW_ISSUE_EDIT_FIND_COMPANY['IssueDate'];
        
        
        $Detail[0]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail1'];
        $Qty[0]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty1'     ];
        $Price[0]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price1'   ];
        
        $Detail[1]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail2'];
        $Qty[1]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty2'     ];
        $Price[1]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price2'   ];
        
        $Detail[2]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail3'];
        $Qty[2]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty3'     ];
        $Price[2]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price3'   ];
        
        $Detail[3]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail4'];
        $Qty[3]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty4'     ];
        $Price[3]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price4'   ];
        
        $Detail[4]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail5'];
        $Qty[4]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty5'     ];
        $Price[4]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price5'   ];
        
        $Detail[5]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail6'];
        $Qty[5]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty6'     ];
        $Price[5]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price6'   ];
        
        $Detail[6]   =$ROW_ISSUE_EDIT_FIND_COMPANY['Detail7'];
        $Qty[6]      =$ROW_ISSUE_EDIT_FIND_COMPANY['Qty7'     ];
        $Price[6]    =$ROW_ISSUE_EDIT_FIND_COMPANY['Price7'   ];
        

        
    }
?>
 <form>
 <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="3%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
				  <td width="3%" align="center" bgcolor="#6A98A7" class="Ar12Bb">เลขที่เอกสาร</td>
                  <td width="20%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลูกค้า</td>
              </tr> 
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td>&nbsp;<?=$IssueDate?></td>
                	<td>&nbsp;<?=$BillingNo?></td>
                    <td>&nbsp;<?=$CompanyName?></td>
                    
                    
                </tr>
                <tr bgcolor="#CFE4E9"> 
                	<td>Quotaion|||||<input type="text" name="QuotationRef"  /></td>
                    <td></td>
                    <td></td>
                </tr>
                 <tr bgcolor="#CFE4E9"> 
                    <td>Invoice|||||<input type="text" name="InvoiceRef" /></td>
                    <td></td>
                    <td></td>
                </tr>
      </tbody>
        </table>
       
<table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="2%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลำดับที่</td> 
				  <td width="25%" align="center" bgcolor="#6A98A7" class="Ar12Bb">รายการ</td>
                  <td width="9%" align="center" bgcolor="#6A98A7" class="Ar12Bb">จำนวน</td>
                  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ราคาต่อหน่วย</td>
	              
              </tr> 
              <? for($i=0;$i<7;$i++) {  $j=$i+1; ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><input type="text" size="1"    name="issueNo[]"        value="<?=$j?>" disabled /></td>
                	<td><input type="text" size="70"   name="issueDetail[]"    value="<?=$Detail[$i]?>"                /></td>
                    <td><input type="text" size="9"    name="issueQu[]"        value="<?=$Qty[$i]?>"                 /></td>
                    <td><input type="text" size="10"   name="issuePrice[]"     value="<?=$Price[$i]?>"                 /></td>    
                </tr>
                
              <? }?>  
                <input type="hidden"  value="Receipt-Issue-Exe" name="myKey" />
                <tr>
                	<td></td>
                	<td><span id="submit-bt" ><input type="submit" disabled /></span></td>
                	<td></td>
                </tr>
                    </tbody>
        </table>
       
            </tbody>
        </table>
         </form>