<?php
$SQL_TAXW_REPORT = "SELECT * FROM ss_taxw_apcode ";
//echo $SQL_TAXW_REPORT;
$RESULT_TAXW_REPORT=$adminlogin->query($SQL_TAXW_REPORT);
?>



<table>
<?php
while($ROW_TAXW_REPORT= mysql_fetch_array($RESULT_TAXW_REPORT)){
?>


<tr>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>���ͺ���ѷ </td>
	<td><?php echo   $ROW_TAXW_REPORT['APName'];?></td>
</tr>
<tr>
	<td>�������</td>
	<td><?php echo   $ROW_TAXW_REPORT['APAddress'];?></td>
</tr>
<tr>
	<td>�Ţ����</td>
	<td><?php echo   $ROW_TAXW_REPORT['APTaxNo'];?></td>
</tr>
<tr>
	<td>�Ţ����ѷ</td>
	<td><?php echo   $ROW_TAXW_REPORT['APNo'];?></td>
</tr>
<tr>
	<td></td>
	<td></td>
</tr>


<?php 
}
?>
</table>
