<?php

$SQL_ListAP = "SELECT * FROM ss_taxw_apcode ";
//echo $SQL_TAXW;
$RESULT_ListAP=$adminlogin->query($SQL_ListAP);
//$ROW_ListAP= mysql_fetch_array($RESULT_ListAP);

//$PostType= ['TaxID'];
//$TaxID= $ROW_ListAP['TaxID'];
//$inputAddress= $ROW_TAXW['inputAddress'];
//$OwnName= $ROW_ListAP['OwnName'];

$myYear = date('Y');
$myMonth = date('m');

?>
<form method="get" enctype="text/plain">
<table>
<tr>
	<td>�͡����Ţ���</td>
	<td><input name="" type="text" value="<?php echo $myYear.$myMonth."xxx"; ?>" /></td>
</tr>
<tr>
    <td></td>
	<td>
    <select name ="" size="1">
        <?php while($ROW_ListAP= mysql_fetch_array($RESULT_ListAP)){?>
    	<option value="<?php echo $ROW_ListAP['APID'];?>"><?php echo $ROW_ListAP['APName'];?></option>
        <?php }?>
     
    </select></td>
	
</tr>
<tr>
	<td>���</td>
	<td><select  name =""  size="1">
	<option value="53">53</option>
	<option value="3">3</option>
</select></td>
</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>���5 ��������´</td>
	<td><input  name ="line05detail"  type="text"  value="" /></td>
</tr>
<tr>
	<td>���5 �ѹ���</td>
	<td><script>DateInput('line05date', true,  'YYYY-MM-DD')</script></td>
</tr>
<tr>
	<td>���5 �ʹ���</td>
	<td><input  name ="line05amount"  type="text"  value="" /></td>
</tr>
<tr>
	<td>���5 �ѡ %</td>
	<td><input  name ="line05percent"  type="text"  value="" /></td>
</tr>
<tr>
	<td>-</td>
	<td></td>
</tr>
<tr>
	<td>���6 ��������´</td>
	<td><input  name ="line06detail"  type="text"  value="" /></td>
</tr>

<tr>
	<td>���6 �ѹ���</td>
	<td><script>DateInput('line06date', true,  'YYYY-MM-DD')</script></td>
</tr>
<tr>
	<td>���6 �ʹ���</td>
	<td><input  name ="line06amount" type="text"  value="" /></td>
</tr>
<tr>
	<td>���6 �ѡ %</td>
	<td><input  name ="line06percent" type="text"  value="" /></td>
</tr>
</table>
<input  name ="key" type="hidden" value="newtaxw-exe" />
<input type="submit" />

</form>