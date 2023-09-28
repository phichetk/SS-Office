   
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "cheque-report ": "";
 echo $SHOW_FILE_NAME;
/////
?>

<?php
$tDay   = date("d");
$tMonth = date("m");
$tYear  = date("Y");

$searchdate = $_REQUEST['searchdate'];
$sMonth = $_REQUEST['sMonth'];
//$sYear  = $_REQUEST['sYear'];

echo $tDay.$tMonth.$tYear;
?>

            <table>
                <tbody>
                     <tr bgcolor="#CFE4E9"> 
                              <td width="5%" height="20" class="Ar12Bb"><A HREF="main.php?myKey=report">#</A></td>
            				  <td width="5%" height="20" class="Ar12Bb"><A HREF="main.php?myKey=report&searchdate=all">ALL</A></td> 
                              <td width="5%" height="20" class="Ar12Bb"><A HREF="main.php?myKey=report&sMonth=01">01</A></td>

            	         </tr> 
                </tbody>
                </FROM>
            </table>
                
        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="8%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
                  <td width="10%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">เลขที่</td>                   
				  <td width="57%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
                  <td width="5%" align="center" bgcolor="#6A98A7" class="Ar12Bb"> </td>                  
	         </tr> 
<?
$SQL_CHEQUE_REPORT = "SELECT ID,APID,PAIDDATE,TOTAL1,CHEQUEDATE FROM ss_cheque ";
if ($searchdate != "all"){
    $SQL_CHEQUE_REPORT .= "WHERE CHEQUEDATE LIKE '%/".$tMonth."/".$tYear."'";
}

echo $SQL_CHEQUE_REPORT;
$RESULT_CHEQUE_REPORT=$adminlogin->query($SQL_CHEQUE_REPORT);
    while($ROW_CHEQUE_REPORT= mysql_fetch_array($RESULT_CHEQUE_REPORT)){
    
    
        $SQL_APID= "SELECT * FROM ss_taxw_apcode WHERE APID='".$ROW_CHEQUE_REPORT['APID']."'";
        $RESULT_APID=$adminlogin->query($SQL_APID);  
        while($ROW_APID= mysql_fetch_array($RESULT_APID)){ 
            
        ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                    <td><? echo $ROW_CHEQUE_REPORT['CHEQUEDATE']; ?></td>                
                	<td><A href='cheque.php?GID=<?echo  intval($ROW_CHEQUE_REPORT['ID']); ?>' ><? echo $ROW_CHEQUE_REPORT['ID']; ?></A></td>
                	<td><A href='cheque.php?GID=<?echo  intval($ROW_CHEQUE_REPORT['ID']); ?>' ><? echo $ROW_APID['APName']?></A></td>
                    <td><A href='main.php?myKey=taxw-detail-edit&GID=<?echo  intval($ROW_CHEQUE_REPORT['ID']); ?>' >edit</A></td>

                </tr>

        <?
        }
    }
    
    
?>
            </tbody>
        </table>