<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-customer-add ": "";
 echo $SHOW_FILE_NAME;
/////
?>
<form action="main.php" method="get" enctype="text/plain">


<table>
<tr>
	<td align="center">���������١�������Ѻ�͡�����</td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>���� ���Դ���</td>
	<td><input type="text" name="receipt_contect_name" /></td>
	<td></td>
</tr>
<tr>
	<td>���� ����ѷ</td>
	<td><input type="text" name="receipt_company_name" /></td>
	<td></td>
</tr>
<tr>
	<td>�������1</td>
	<td><input type="text" name="receipt_address1" /></td>
	<td></td>
</tr>
<tr>
	<td>�������2</td>
	<td><input type="text" name="receipt_address2" /></td>
	<td></td>
</tr>
<tr>
	<td>������ɳ���</td>
	<td><input type="text" name="receipt_post" /></td>
	<td></td>
</tr>
<tr>
	<td>�������Ѿ��</td>
	<td><input type="text" name="receipt_tel" /></td>
	<td></td>
</tr>
<!--tr>
	<td>������Ͷ��</td>
	<td><input type="text" name="receipt_mobile" /></td>
	<td></td>
</tr>
<tr>
	<td>����ῡ��</td>
	<td><input type="text" name="receipt_fax" /></td>
	<td></td>
</tr-->
<tr>
	<td>�Ţ�����������</td>
	<td><input type="text"  name="TaxNo"/></td>
	<td></td>
</tr>
<!--tr>
	<td>�Ţ�ԵԺؤ��</td>
	<td><input type="text" name="No"/></td>
	<td></td>
</tr-->
<input type="hidden"  value="Receipt-Customer-Add-Exe" name="myKey" />
<tr>
	<td></td>
	<td><input type="submit" /></td>
	<td></td>
</tr>

</table>
</form>