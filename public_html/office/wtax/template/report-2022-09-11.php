<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "report ": "";
 echo $SHOW_FILE_NAME;
/////
?>

<?php
$tDay   = date("d");
$tMonth = date("m");
$tYear  = date("Y");

$searchdate = $_REQUEST['searchdate'];
$sMonth = $_REQUEST['sMonth'];
$sYear  = $_REQUEST['sYear'];

if(isset($_REQUEST['sMonth'])){
    $tMonth = $sMonth;
}
if(isset($_REQUEST['sYear'])){
    $tYear = $sYear;
}

echo "Today=".$tDay.$tMonth.$tYear;
?>

            <table>
                <tbody>
                     <tr bgcolor="#CFE4E9"> 
                              <td width="5%" height="20" class="Ar12Bb"><A HREF="main.php?myKey=report">#</A></td>
            				  <td width="5%" height="20" class="Ar12Bb"><A HREF="main.php?myKey=report&searchdate=all">ALL</A></td>
                              <? for($i=01;$i<=12;$i++){   if(strlen($i)<=1){   $jj = "0".$i;     } else {$jj=$i;}   ?>
                              &nbsp;
                              <td width="5%" height="20" class="Ar12Bb">&nbsp;&nbsp;<A HREF="main.php?myKey=report&sMonth=<?=$jj?>"><?=$jj."/".$tYear?></A>&nbsp;&nbsp;</td>
                              <?  }  ?>
            	         </tr> 
                </tbody>
                </FROM>
            </table>
                
        <table cellSpacing=1 cellPadding=1 width="100%" border=0>
            <tbody>
             <tr bgcolor="#FFCC00"> 
				  <td width="8%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">วันที่</td> 
                  <td width="8%" height="20" align="center" bgcolor="#6A98A7" class="Ar12Bb">เลขที่</td>                   
				  <td width="40%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ชื่อลูกค้า</td>
                  <td width="8%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ยอดก่อนหัก5</td>
                  <td width="10%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ยอดหัก5</td>
                  <td width="8%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ยอดก่อนหัก6</td>
                  <td width="10%" align="center" bgcolor="#6A98A7" class="Ar12Bb">ยอดหัก6</td>
                  <td width="5%" align="center" bgcolor="#6A98A7" class="Ar12Bb">EDIT</td>                  
	         </tr> 
<?
$SQL_TAXW_REPORT  = "SELECT ID,APID,TaxID,Line05Date,Line06Date ";
$SQL_TAXW_REPORT .= " ,Line05Amount,Line05W,Line05Detail  ";
$SQL_TAXW_REPORT .= " ,Line06Amount,Line06W,Line06Detail ";
$SQL_TAXW_REPORT .= " FROM ss_taxw ";
if ($searchdate != "all"){
    $SQL_TAXW_REPORT .= "WHERE Line05Date LIKE '%/".$tMonth."/".$tYear."'";
}

echo $SQL_TAXW_REPORT;

///////////////START EXPORT//////////
   $filName = "download/debit.txt";
   $objWrite = fopen($filName, "w");

		$IntLine		= 1; //intial line    
$RESULT_TAXW_REPORT2 = $adminlogin2->query($SQL_TAXW_REPORT);
	while( $ROW_TAXW_REPORT2= mysql_fetch_array($RESULT_TAXW_REPORT2)){
		
		$Line05Date			= $ROW_TAXW_REPORT2['Line05Date'];
		$Line05Detail		= $ROW_TAXW_REPORT2['Line05Detail'];
       	 	$Line05Amount		= $ROW_TAXW_REPORT2['Line05Amount'];   
		$NumberLine05Amount = number_format($ROW_TAXW_REPORT2['Line05Amount'],2);  
        	$Line05W			= $ROW_TAXW_REPORT2['Line05W'];
        	$AmountLine05W		= $Line05Amount * $Line05W /100  ;
		$NumberAmount05		= number_format($AmountLine05W, 2, '.','');  

		$Line06Date			= $ROW_TAXW_REPORT2['Line06Date'];
		$Line06Detail		= $ROW_TAXW_REPORT2['Line06Detail'];
        	$Line06Amount		= $ROW_TAXW_REPORT2['Line06Amount'];  
		$NumberLine06Amount = number_format($ROW_TAXW_REPORT2['Line06Amount'],2); 
        	$Line06W			= $ROW_TAXW_REPORT2['Line06W'];
        	$AmountLine06W		= $Line06Amount * $Line06W /100;
		$NumberAmount06		= number_format($AmountLine06W, 2, '.', '');  


		
		$APID			= $ROW_TAXW_REPORT2['APID'];
        $SQL_APID= "SELECT * FROM ss_taxw_apcode WHERE APID='".$APID."'";
        $RESULT_APID=$adminlogin2->query($SQL_APID);  
        //echo "<BR/>".$SQL_APID;
        
			while($ROW_APID= mysql_fetch_array($RESULT_APID)){
			$APTaxNo		= $ROW_APID['APTaxNo'];
		        $APTitle                = $ROW_APID['APTitle'];
			$APName			= $ROW_APID['APName'];
			
			}
		
        
//						1			2				3				4				5			6					7		    8
		echo "<BR/>".$IntLine."|".$APTaxNo."|".$APTitle."|".$APName."|".$Line05Date."|".$Line05Detail."|".$Line05W."|".$NumberLine05Amount."|".$NumberAmount05."|1";

		if($Line06Amount>0){
//						9				10				  11			12				13
		echo "|".$Line06Date."|".$Line06Detail."|".$Line06W."|".$NumberLine06Amount."|".$NumberAmount06."|1";
		}else{
		echo "||||||";
		}
		fwrite($objWrite, " \n");
		$IntLine++;
	}
	fclose($objWrite);
	echo "<br>Generated CSV Done. <a href=".$filName." class=\"Ar12Bb\" >Download</a>";
/////////////END EXPORT////////////
$RESULT_TAXW_REPORT=$adminlogin->query($SQL_TAXW_REPORT);
    while($ROW_TAXW_REPORT= mysql_fetch_array($RESULT_TAXW_REPORT)){
        
        $AmountLine5    = $ROW_TAXW_REPORT['Line05Amount'];
        $AmountLine5Num = number_format($AmountLine5, 2, '.', ',');
        
        $Line05W        = $ROW_TAXW_REPORT['Line05W'];
        $AmountLine05W  = $AmountLine5 * $Line05W /100;
        $AmountLine05WNum = number_format($AmountLine05W, 2, '.', ',');
        
        $AmountLine6    = $ROW_TAXW_REPORT['Line06Amount'];
        $AmountLine6Num = number_format($AmountLine6, 2, '.', ',');
        
        $Line06W        = $ROW_TAXW_REPORT['Line06W'];
        $AmountLine06W  = $AmountLine6 * $Line06W /100;
        $AmountLine06WNum = number_format($AmountLine06W, 2, '.', ',');  
        
    
        $SQL_APID= "SELECT * FROM ss_taxw_apcode WHERE APID='".$ROW_TAXW_REPORT['APID']."'";
        $RESULT_APID=$adminlogin->query($SQL_APID);  
        //echo $SQL_APID;
        while($ROW_APID= mysql_fetch_array($RESULT_APID)){ 
            
            $SUMAmountLine5 = $AmountLine5 + $SUMAmountLine5;
            $SUMAmountLine5Num = number_format($SUMAmountLine5, 2, '.', ','); 
            
            
            
            $SUMAmountLine6 = $AmountLine6 + $SUMAmountLine6;
            $SUMAmountLine6Num = number_format($SUMAmountLine6, 2, '.', ','); 
            
            
            $SUMTOTAL = $SUMAmountLine5 + $SUMAmountLine6;
            $SUMTOTALNum= number_format($SUMTOTAL, 2, '.', ','); 
             
            //$SQL_FIND_AMOUNT_FROM_AP  = " SELECT * FROM ";
            //$SQL_FIND_AMOUNT_FROM_AP .= " SELECT * FROM ";
        
            
        ?>
                                 
                <tr bgcolor="#CFE4E9"> 
                    <td><? echo $ROW_TAXW_REPORT['Line05Date']; ?></td>                
                	<td><A href='taxw.php?GID=<?echo  intval($ROW_TAXW_REPORT['ID']); ?>' ><? echo $ROW_TAXW_REPORT['TaxID']; ?></A></td>
                	<td><A href='taxw.php?GID=<?echo  intval($ROW_TAXW_REPORT['ID']); ?>' ><? echo $ROW_APID['APName']?></A></td>
                    <td align="right"><?=$AmountLine5Num?></td>
                    <td align="right"><?=$AmountLine05WNum?>(<?=$Line05W?>%)</td>
                    <td align="right"><? if($AmountLine6!=0){?><?=$AmountLine6Num?><?}?></td>
                    <td align="right"><? if($AmountLine6!=0){?><?=$AmountLine06WNum?>(<?=$Line06W?>%)<?}?></td>
                    <td><A href='main.php?myKey=taxw-detail-edit&GID=<?echo  intval($ROW_TAXW_REPORT['ID']); ?>' >edit</A></td>

                </tr>
                

      
    <?   } // end  while($ROW_APID  ?>

 <?   }   //end while($ROW_TAXW_REPORT ?>
 
                  <tr bgcolor="#6A98A7"> 
                    <td></td>                
                	<td></td>
                    <td></td>
                    <td align="right" class="Ar16Bb" ><?=$SUMAmountLine5Num?></td>
                    <td></td>
                    <td align="right" class="Ar16Bb" ><?=$SUMAmountLine6Num?></td>
                    <td></td>
                    <td></td>

                </tr>
                 <tr bgcolor="#6A98A7"> 
                    <td>.</td>                
                	<td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>
                <tr bgcolor="#6A98A7"> 
                    <td></td>                
                	<td></td>
                    <td></td>
                    <td></td>
                    <td>TOTAL</td>
                    <td align="right" class="Ar16Bb" ><?=$SUMTOTALNum?></td>
                    <td></td>
                    <td></td>

                </tr>

               
                
            </tbody>
        </table>
