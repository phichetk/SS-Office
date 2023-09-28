<? $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? basename(__FILE__): ""; ?>
<?=$SHOW_FILE_NAME?>

<?php

$myYear = date('Y');
$myMonth = date('m');

$LastFiveDigit =  $myYear.$myMonth;

$SQL_FIND_LAST_TAX_NO  = "SELECT TaxID ";
$SQL_FIND_LAST_TAX_NO .= "FROM  `ss_taxw` ";
$SQL_FIND_LAST_TAX_NO .= "WHERE  `TaxID` LIKE  '".$LastFiveDigit."%' ORDER BY TaxID DESC LIMIT 1";
echo $SQL_FIND_LAST_TAX_NO;
$RESULT_FIND_LAST_TAX_NO    =   $adminlogin->query($SQL_FIND_LAST_TAX_NO);
$ROW_FIND_LAST_TAX_NO       =   mysql_fetch_array($RESULT_FIND_LAST_TAX_NO);


echo "<br>";
$LastTaxID =  $ROW_FIND_LAST_TAX_NO['TaxID'];




echo " =".$LastTaxID;




if (!isset($LastTaxID)){
    $LastTaxID = $LastFiveDigit."000";
}
    

    $TaxID = intval($LastTaxID)+1;


$SQL_ListAP = "SELECT * FROM ss_taxw_apcode ";
$SQL_ListAP .= " WHERE Status = 1 ";
//echo $SQL_TAXW;
$RESULT_ListAP=$adminlogin->query($SQL_ListAP);
//$ROW_ListAP= mysql_fetch_array($RESULT_ListAP);
 
//$PostType= ['TaxID'];
//$TaxID= $ROW_ListAP['TaxID'];
//$inputAddress= $ROW_TAXW['inputAddress'];
//$OwnName= $ROW_ListAP['OwnName'];



?>
<form method="get" enctype="text/plain" >

<table>
<tr>
	<td>เอกสารเลขที่</td>
	<td><input name="TaxID" type="text" value="<?php echo $TaxID; ?>" /></td>
</tr>
<tr>
    <td></td>
    <td><input type="text" name="APID" onkeyup="FineDealer(this.value)"  /></td>
    <td ><span id="Dealer1" >&nbsp;</span></td>
    <td ><span id="Dealer2" >&nbsp;</span></td>
	<td>
    <select name ="APID" size="1">
        <?php while($ROW_ListAP= mysql_fetch_array($RESULT_ListAP)){?>
    	<option value="<?php echo $ROW_ListAP['APID'];?>"><?php echo $ROW_ListAP['APName'];?></option>
        <?php }?>
     
    </select></td>
	
</tr>
<tr>
	<td>ภงด</td>
    
	<td><select  name ="TaxType"  size="1">
	<option value="53">53</option>
	<option value="3">3</option>
        </select>
    </td>
    
</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>ข้อ5 รายละเอียด</td>
	<td><input  name ="line05detail"  type="text"  value="" /></td>
</tr>
<tr>
	<td>ข้อ5 วันที่</td>
	<td><script>DateInput('line05date', true,  'DD/MM/YYYY')</script></td>
</tr>
<tr>
	<td>ข้อ5 ยอดเต็ม</td>
	<td><input  name ="line05amount"  type="text"  value="" /></td>
</tr>
<tr>
	<td>ข้อ5 หัก %</td>
    <td><select  name ="line05percent"  size="1">
	<option value="1">1%</option>
	<option value="1.5">1.5%</option>
	<option value="3" selected >3%</option>
    <option value="5">5%</option>
    <option value="10">10%</option>
        </select>
    </td>
</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>ข้อ6 รายละเอียด</td>
	<td><input  name ="line06detail"  type="text"  value="" /></td>
</tr>

<!--tr>
	<td>ข้อ6 วันที่</td>
	<td><script>DateInput('line06date', true,  'DD/MM/YYYY')</script></td>
</tr--->
<tr>
	<td>ข้อ6 ยอดเต็ม</td>
	<td><input  name ="line06amount" type="text"  value="" /></td>
</tr>
<tr>
	<td>ข้อ6 หัก %</td>

    <td><select  name ="line06percent"  size="1">
	<option value="1">1%</option>
	<option value="1.5">1.5%</option>
	<option value="3" >3%</option>
    <option value="5" selected>5%</option>
    <option value="10">10%</option>
        </select>
    </td>
</tr>
</table>
<input  name ="myKey" type="hidden" value="newtaxw-exe" />
<input type="submit" name="btnSubmit" value="Submit" />

</form>
