<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "quotation-issue ": "";
 echo $SHOW_FILE_NAME;
/////

$issueThisYear = date('Y');
$issueThisMonth = date('m');
$issuePrefix = $issueThisYear.$issueThisMonth;

//////
$SQL_GET_QUOTATION_ID      = " SELECT QuotationNo from `ss_quotation_transection`  ";
$SQL_GET_QUOTATION_ID     .= " WHERE QuotationNo LIKE '".$issuePrefix."%'  GROUP by QuotationNo DESC " ;


echo $SQL_GET_QUOTATION_ID;
$RESULT_GET_QUOTATION_ID   =  $adminlogin->query( $SQL_GET_QUOTATION_ID    );
$ROW_GET_QUOTATION_ID      =  mysql_fetch_array(  $RESULT_GET_QUOTATION_ID );
$NUM_RESULT_ID           =  mysql_num_rows($RESULT_GET_QUOTATION_ID);         
///////

if ($NUM_RESULT_ID <= 0){         
$issueID = $issuePrefix."001";
} else {
$LastQuotationNo = $ROW_GET_QUOTATION_ID['QuotationNo'];    
$nextissue = $LastQuotationNo +1;
$issueID   = $nextissue;  
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
                	<td><script>DateInput('issueDate', true, 'YYYY-MM-DD')</script></td>
                	<td><input type="text" name="issueID" value="<? echo $issueID ?>" /></td>
                    <td >&nbsp;
                        <span id="issue-customer" >
                        <a href="main.php?myKey=Receipt-Customer-Add">เพิ่มลูกค้า</a>
                        <input type="text"  onkeyup="updateProfile(this.value)" />
                        
                        </span>
                        <span id="content">&nbsp;</span>
                    </td>
                    
                    
                </tr>
                <tr bgcolor="#CFE4E9"> 
                	<td>Quotaion|||||<input type="text" name="QuotationRef"  /></td>
                    <td>Domain|||||<input type="text" name="Domain1" /></td>
                    <td></td>
                </tr>
                 <tr bgcolor="#CFE4E9"> 
                    <td>Invoice|||||<input type="text" name="InvoiceRef" /></td>
                    <td></td>
                    <td></td>
                </tr>
      </tbody>
        </table>
 <table>
    <tbody>
        <tr>
            <td>เอกสารแบบต่างๆ</td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a>โดนเมนอย่างเดียว</a></td>
            <td><a>โดเมนพร้อมพื้นที่</a></td>
        </tr>
    </tbody>
 </table>      
<table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="2%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลำดับที่</td> 
				  <td width="25%" align="center" bgcolor="#6A98A7" class="Ar12Bb">รายการ</td>
                  <td width="2%" align="center" bgcolor="#6A98A7" class="Ar12Bb">จำนวน</td>
                  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ราคาต่อหน่วย</td>
	              
              </tr> 
              <? for($i=0;$i<20;$i++) {  $j=$i+1; ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><input type="text" size="1"    name="issueNo[]"        value="<?=$j?>" disabled /></td>
                	<td><input type="text" size="70"   name="issueDetail[]"                    /></td>
                    <td><input type="text" size="3"    name="issueQu[]"                         /></td>
                    <td><input type="text" size="10"   name="issuePrice[]"                      /></td>    
                </tr>
                
              <? }?>  
                <input type="hidden"  value="Quotation-Issue-Exe" name="myKey" />
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