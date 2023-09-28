
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-customer-list ": "";
 echo $SHOW_FILE_NAME;
/////
?>
        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
                  <td width="1%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb"></td> 
				  <td width="2%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ID</td> 
				  <td width="15%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
                  <td width="20%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ที่อยู่ลูกค้า</td>
	         </tr> 
<?
$SQL_CUSTOMER_LIST = "SELECT * FROM ss_billing_customer ";
$RESULT_CUSTOMER_LIST=$adminlogin->query($SQL_CUSTOMER_LIST);
    while($ROW_CUSTOMER_LIST= mysql_fetch_array($RESULT_CUSTOMER_LIST)){
    
            
        ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                    <td><a href="main.php?myKey=Receipt-Customer-Edit&CustomerID=<?echo  intval($ROW_CUSTOMER_LIST['ID']); ?>"> Edit</a></td>
                	<td align="center" ><A href='main.php?myKey=Receipt-Customer-Edit&CustomerID=<?echo  intval($ROW_CUSTOMER_LIST['ID']); ?>' ><? echo $ROW_CUSTOMER_LIST['ID']; ?></A></td>
                	<td><A href='main.php?myKey=Receipt-Customer-Edit&CustomerID=<?echo  intval($ROW_CUSTOMER_LIST['ID']); ?>' ><? echo $ROW_CUSTOMER_LIST['CompanyName']?></A></td>
                    <td><A href='main.php?myKey=Receipt-Customer-Edit&CustomerID=<?echo  intval($ROW_CUSTOMER_LIST['ID']); ?>' ><? echo $ROW_CUSTOMER_LIST['Address']; ?></A></td>
                </tr>

        <?
        
    }
    
    
?>
            </tbody>
        </table>