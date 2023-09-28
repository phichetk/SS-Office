<?php
 /////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "report ": "";
 echo $SHOW_FILE_NAME;
/////
 ?>
        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="17%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">ลำดับ</td> 
				  <td width="57%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
	         </tr> 
<?
$SQL_TAXW_REPORT = "SELECT ID,APID,TaxID FROM ss_taxw ";
$RESULT_TAXW_REPORT=$adminlogin->query($SQL_TAXW_REPORT);
    while($ROW_TAXW_REPORT= mysql_fetch_array($RESULT_TAXW_REPORT)){
    
    
        $SQL_APID= "SELECT * FROM ss_taxw_apcode WHERE APID='".$ROW_TAXW_REPORT['APID']."'";
        $RESULT_APID=$adminlogin->query($SQL_APID);  
        while($ROW_APID= mysql_fetch_array($RESULT_APID)){ 
            
        ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                	<td><A href='taxw.php?GID=<?echo  intval($ROW_TAXW_REPORT['ID']); ?>' ><? echo $ROW_TAXW_REPORT['TaxID']; ?></A></td>
                	<td><A href='taxw.php?GID=<?echo  intval($ROW_TAXW_REPORT['ID']); ?>' ><? echo $ROW_APID['APName']?></A></td>

                </tr>

        <?
        }
    }
    
    
?>
            </tbody>
        </table>