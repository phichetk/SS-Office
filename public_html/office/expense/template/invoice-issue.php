<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "invoice-issue ": "";
 echo $SHOW_FILE_NAME;
/////

$issueThisYear = date('Y');
$issueThisMonth = date('m');
$issuePrefix = $issueThisYear.$issueThisMonth;

//////
$SQL_GET_INVOICE_ID      = " SELECT InvoiceNo from `ss_invoice_transection`  ";
$SQL_GET_INVOICE_ID     .= " WHERE InvoiceNo LIKE '".$issuePrefix."%'  GROUP by InvoiceNo DESC " ;


//echo $SQL_GET_INVOICE_ID;
$RESULT_GET_INVOICE_ID   =  $adminlogin->query( $SQL_GET_INVOICE_ID    );
$ROW_GET_INVOICE_ID      =  mysql_fetch_array(  $RESULT_GET_INVOICE_ID );
$NUM_INVOICE_ID           =  mysql_num_rows($RESULT_GET_INVOICE_ID);         
///////
//echo $NUM_INVOICE_ID;
if ($NUM_INVOICE_ID <= 0){         
$issueID = $issuePrefix."001";
} else {
$LastInvoiceNo = $ROW_GET_INVOICE_ID['InvoiceNo'];    
//echo $LastInvoiceNo;
$nextissue = $LastInvoiceNo +1;
$issueID   = $nextissue;  
}

?>
 <form>
 <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="3%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">�ѹ���</td> 
				  <td width="3%" align="center" bgcolor="#6A98A7" class="Ar12Bb">�Ţ����͡���</td>
                  <td width="20%" align="center" bgcolor="#6A98A7" class="Ar12Bb">�١���</td>
              </tr> 
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><script>DateInput('issueDate', true, 'YYYY-MM-DD')</script></td>
                	<td><input type="text" name="issueID" value="<? echo $issueID ?>" /></td>
                    <td >&nbsp;
                        <span id="issue-customer" >
                        <a href="main.php?myKey=Receipt-Customer-Add">�����١���</a>
                        <input type="text"  onkeyup="updateProfile(this.value)" />
                        
                        </span>
                        <span id="content">&nbsp;</span>
                    </td>
                    
                    
                </tr>
                <tr bgcolor="#CFE4E9"> 
                	<td>Quotaion|||||<input type="text" name="QuotationRef" onkeyup="findQuotation(this.value)"   /></td>
                    
                    <td>Domain|||||<span id="Domain1"><input type="text"  name="Domain1"  /></span></td>
                    
                    <td></td>
                </tr>
                <tr bgcolor="#CFE4E9"> 
                    <td colspan="3"><span id="contentQuotation">&nbsp;</span></td>
                    
                </tr>
                 <tr bgcolor="#CFE4E9"> 
                    <td>Invoice|||||<input type="text" name="InvoiceRef" onkeyup="findInvoice(this.value)"  /></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr bgcolor="#CFE4E9"> 
                    <td colspan="3"><span id="contentInvoice">&nbsp;</span></td>
                    
                </tr>
                 <tr bgcolor="#CFE4E9"> 
                    <td>Receipt|||||<input type="text" name="BillRef" onkeyup="findBill(this.value)"  /></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr bgcolor="#CFE4E9"> 
                    <td colspan="3"><span id="contentBill">&nbsp;</span></td>
                    
                </tr>
      </tbody>
        </table>
 <table>
    <tbody>
        <tr>
            <td>�͡���Ẻ��ҧ�</td>
            <td> </td>
            <td> </td>
        </tr>
        <tr>
            <td> </td>
            <td><a>ⴹ������ҧ����</a></td>
            <td><a>�����������鹷��</a></td>
        </tr>
    </tbody>
 </table>      
<table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="2%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">�ӴѺ���</td> 
				  <td width="25%" align="center" bgcolor="#6A98A7" class="Ar12Bb">��¡��</td>
                  <td width="2%" align="center" bgcolor="#6A98A7" class="Ar12Bb">�ӹǹ</td>
                  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">�Ҥҵ��˹���</td>
	              
              </tr> 
              <? for($i=0;$i<9;$i++) {  $j=$i+1; ?>

                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><input type="text" size="1"    name="issueNo[]"        value="<?=$j?>" disabled /></td>
                	<td><span id="Detail<?=$j?>" ><input type="text" size="70" name="issueDetail[]"  /></span></td>
                    <td><span id="Qty<?=$j?>" >   <input type="text" size="3" name="issueQu[]"  />     </span></td>
                    <td><span id="Price<?=$j?>" > <input type="text" size="10"   name="issuePrice[]"  /></span></td>    
                </tr>
                
              <? }?>  
                 <input type="hidden"  value="Invoice-Issue-Exe" name="myKey" />
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