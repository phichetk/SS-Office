<?php
$SQL_TAXW_REPORT = "SELECT * FROM ss_taxw_apcode ";
//echo $SQL_TAXW_REPORT;
$RESULT_TAXW_REPORT=$adminlogin->query($SQL_TAXW_REPORT);
?>



<table >
<?php
while($ROW_TAXW_REPORT= mysql_fetch_array($RESULT_TAXW_REPORT)){
?>


<tr>
	<td></td>
	<td></td>
</tr>
<tr bgcolor="#CFE4E9">
	<td>���ͺ���ѷ </td>
	<td><a href="#" ><?php echo   $ROW_TAXW_REPORT['APName'];?></a></td>
</tr>
<tr bgcolor="#CFE4E9">
	<td>�������</td>
	<td><?php echo   $ROW_TAXW_REPORT['APAddress'];?></td>
</tr>
<tr bgcolor="#CFE4E9" >
	<td>�Ţ����</td>
	<td><?php echo   $ROW_TAXW_REPORT['APTaxNo'];?></td>
</tr>
<tr bgcolor="#CFE4E9">
	<td>�Ţ����ѷ</td>
	<td><?php echo   $ROW_TAXW_REPORT['APNo'];?></td>
</tr>
<tr bgcolor="#CFE4E9">
	<td>�����˵�</td>
	<td></td>
</tr>


<?php 
}
?>
</table>
