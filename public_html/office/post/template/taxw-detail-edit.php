   
<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "wtax-detail-edit ": "";
 echo $SHOW_FILE_NAME;
/////
?>
<?php
$GID = $_REQUEST['GID'];

//$SQL_ListAP = "SELECT * FROM ss_taxw_apcode ";
$SQL_WTAX_DETAIL  = "SELECT * FROM ss_taxw ";
$SQL_WTAX_DETAIL .= "WHERE ID='".$GID."'" ;
//$SQL_WTAX_DETAIL .= "SELECT * FROM ss_taxw ";

//echo $SQL_TAXW;
$RESULT_WTAX_DETAIL=$adminlogin->query($SQL_WTAX_DETAIL);
$ROW_WTAX_DETAIL= mysql_fetch_array($RESULT_WTAX_DETAIL);
//$ROW_ListAP= mysql_fetch_array($RESULT_ListAP);

//$PostType= ['TaxID'];
//$TaxID= $ROW_ListAP['TaxID'];
//$inputAddress= $ROW_TAXW['inputAddress'];
//$OwnName= $ROW_ListAP['OwnName'];

//$myYear = date('Y');
//$myMonth = date('m');

?>
<form method="get" enctype="text/plain">
<table>
<tr>
	<td>เอกสารเลขที่</td>
	<td><input name="" type="text" value="<?php echo $ROW_WTAX_DETAIL['TaxID']; ?>" /></td>
</tr>
<tr>
    <td></td>
	<td>
    <?php echo $ROW_WTAX_DETAIL['PaidName']; ?>
    </td>
	
</tr>
<tr>
	<td>ภงด</td>
	<td><select  name =""  size="1">
	<option <?php if ( "53" == $ROW_WTAX_DETAIL['PaidType1']){ echo selected ;} ?> value="53">53</option>
	<option <?php if (  "3" == $ROW_WTAX_DETAIL['PaidType1']){ echo selected ;} ?> value="3">3</option>
</select></td>
</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>ข้อ5 รายละเอียด</td>
	<td><input  name ="line05detail"  type="text"  value="<?php echo $ROW_WTAX_DETAIL['Line05Detail']; ?>" /></td>
</tr>
<tr>
	<td>ข้อ5 วันที่</td>
	<td><script>DateInput('line05date', true,  'DD/MM/YYYY','<?php echo $ROW_WTAX_DETAIL['Line05Date']; ?>')</script></td>
</tr>
<tr>
	<td>ข้อ5 ยอดเต็ม</td>
	<td><input  name ="line05amount"  type="text"  value="<?php echo $ROW_WTAX_DETAIL['Line05Amount']; ?>" /></td>
</tr>
<tr>
	<td>ข้อ5 หัก %</td>
     <td><select  name ="line06percent"  size="1">
	<option value="1" <? if( 1 == $ROW_WTAX_DETAIL['Line05W'] ) { echo "selected";} ?> >1%</option>
	<option value="3" <? if( 3 == $ROW_WTAX_DETAIL['Line05W'] ) { echo "selected";} ?>  >3%</option>
    <option value="5" <? if( 5 == $ROW_WTAX_DETAIL['Line05W'] ) { echo "selected";} ?>  >5%</option>
    <option value="10" <? if( 10 == $ROW_WTAX_DETAIL['Line05W'] ) { echo "selected";} ?>  >10%</option>
        </select>
    </td>

</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>ข้อ6 รายละเอียด</td>
	<td><input  name ="line06detail"  type="text"  value="<?php echo $ROW_WTAX_DETAIL['Line06Detail']; ?>" /></td>
</tr>

<!--tr>
	<td>ข้อ6 วันที่</td>
	<td><script>DateInput('line06date', true,  'DD/MM/YYYY','03/06/2013')</script></td>
</tr-->
<tr>
	<td>ข้อ6 ยอดเต็ม</td>
	<td><input  name ="line06amount" type="text"  value="<?php echo $ROW_WTAX_DETAIL['Line06Amount']; ?>" /></td>
</tr>
<tr>
	<td>ข้อ6 หัก %</td>
    <td><select  name ="line06percent"  size="1">
	<option value="1" <? if( 1 == $ROW_WTAX_DETAIL['Line06W'] ) { echo "selected";} ?> >1%</option>
	<option value="3" <? if( 3 == $ROW_WTAX_DETAIL['Line06W'] ) { echo "selected";} ?>  >3%</option>
    <option value="5" <? if( 5 == $ROW_WTAX_DETAIL['Line06W'] ) { echo "selected";} ?>  >5%</option>
    <option value="10" <? if( 10 == $ROW_WTAX_DETAIL['Line06W'] ) { echo "selected";} ?>  >10%</option>
        </select>
    </td>
</tr>
</table>
<input  name ="GID" type="hidden" value="<? echo $GID; ?>" />
<input  name ="key" type="hidden" value="newtaxw-exe" />
<input type="submit" />

</form>