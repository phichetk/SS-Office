<form action="main.php" method="get" enctype="text/plain">


<table>
<tr>
	<td>เพิ่มผู้ถูกหัก</td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>ชื่อ</td>
	<td><input type="text" name="Name" size="50" /></td>
	<td></td>
</tr>
<tr>
	<td>ที่อยู่</td>
	<td><input type="text" name="Address" size="100" /></td>
	<td></td>
</tr>
<tr>
	<td>เลขผู้เสียภาษี</td>
	<td><input type="text"  name="TaxNo"/></td>
	<td></td>
</tr>
<tr>
	<td>เลขนิติบุคคล</td>
	<td><input type="text" name="No"/></td>
	<td></td>
</tr>
<tr>
	<td>ประเภท ภาษี ภงด.</td>
	<td><select  name ="TaxType"  size="1">

	<option value="3" >3</option>
    <option value="53" selected >53</option>

        </select>
    </td>
	<td></td>
</tr>
<tr>
	<td>หมายเหตุ</td>
	<td><input type="text" name="Remark"  size="100" /></td>
	<td></td>
</tr>
<input type="hidden"  value="APadd-exe" name="key" />
<tr>
	<td></td>
	<td><input type="submit" /></td>
	<td></td>
</tr>

</table>
</form>