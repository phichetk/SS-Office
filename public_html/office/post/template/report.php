   
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "post-report 11 ": "";
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

echo "Date today=".$tDay.$tMonth.$tYear;
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
$SQL_POST_REPORT = "SELECT * FROM ss_post ";
if ($searchdate != "all"){
    $SQL_POST_REPORT .= "WHERE PDATE LIKE '%/".$tMonth."/".$tYear."'";
}

//echo $SQL_POST_REPORT;
$RESULT_POST_REPORT=$adminlogin->query($SQL_POST_REPORT);
    while($ROW_POST_REPORT= mysql_fetch_array($RESULT_POST_REPORT)){
    
    
        $SQL_COID= "SELECT * FROM ss_post_cocode WHERE COID='".$ROW_POST_REPORT['COID']."'";
        //echo $SQL_COID;
        $RESULT_COID=$adminlogin->query($SQL_COID);  
        while($ROW_COID= mysql_fetch_array($RESULT_COID)){ 
            
        ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                    <td><? echo $ROW_POST_REPORT['PDATE']; ?></td>                
                	<td><A href='post.php?GID=<?echo  intval($ROW_POST_REPORT['ID']); ?>' ><? echo $ROW_POST_REPORT['ID']; ?></A></td>
                	<td><A href='post.php?GID=<?echo  intval($ROW_POST_REPORT['ID']); ?>' ><? echo $ROW_COID['COName']?></A></td>
                    <td><A href='main.php?myKey=taxw-detail-edit&GID=<?echo  intval($ROW_POST_REPORT['ID']); ?>' >edit</A></td>

                </tr>

        <?
        }
    }
    
    
?>
            </tbody>
        </table>