<?php

/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? "receipt-customer-edit ": "";
 echo $SHOW_FILE_NAME;
/////



$CustomerID = $_REQUEST['CustomerID'];
$SQL_CUSTOMER_EDIT = "SELECT * FROM ss_billing_customer ";
$SQL_CUSTOMER_EDIT .= "WHERE ID=".$CustomerID;


$RESULT_CUSTOMER_EDIT=$adminlogin->query($SQL_CUSTOMER_EDIT);
    while($ROW_CUSTOMER_EDIT= mysql_fetch_array($RESULT_CUSTOMER_EDIT))
    {
        //$ContactPerson = $ROW_CUSTOMER_EDIT['ContactPerson'];
        $CustomerName   = $ROW_CUSTOMER_EDIT['ContactPerson'];
        $CompanyName    = $ROW_CUSTOMER_EDIT['CompanyName'];
        $Address        = $ROW_CUSTOMER_EDIT['Address'];
        $Address2       = $ROW_CUSTOMER_EDIT['Address2'];
        $ZipCode        = $ROW_CUSTOMER_EDIT['ZipCode'];
        $TAXID          = $ROW_CUSTOMER_EDIT['TAXID'];
        $Phone          = $ROW_CUSTOMER_EDIT['Phone'];
        $Fax            = $ROW_CUSTOMER_EDIT['Fax'];
        //$CustomerName = $ROW_CUSTOMER_EDIT['CompanyName'];
        //$CustomerName = $ROW_CUSTOMER_EDIT['CompanyName'];
        $LetterCompanyName  = $ROW_CUSTOMER_EDIT['LetterCompanyName'];	
        $LetterAddress      = $ROW_CUSTOMER_EDIT['LetterAddress'];	
        $LetterAddress2     = $ROW_CUSTOMER_EDIT['LetterAddress2'];	
        $LetterZipCode      = $ROW_CUSTOMER_EDIT['LetterZipCode'];
    
    }
?>
<form action="main.php" method="get" enctype="text/plain">


<table>
<tr>
	<td align="center">เพิ่มชื่อลูกค้าสำหรับออกใบเสร็จ</td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>ID</td>
	<td><?=$CustomerID?></td>
	<td></td>
</tr>
<tr>
	<td>ชื่อ ผู้ติดต่อ</td>
	<td><input type="text" size="50" name="receipt_contect_name" value="<?=$CustomerName?>" /></td>
	<td></td>
</tr>
<tr>
	<td>ชื่อ บริษัท</td>
	<td><input type="text"  size="50" name="receipt_company_name" value="<?=$CompanyName?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>ที่อยู่1</td>
	<td><input type="text" size="50"  name="receipt_address1" value="<?=$Address?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>ที่อยู่2</td>
	<td><input type="text" size="50" name="receipt_address2" value="<?=$Address2?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>รหัสไปรษณีย์</td>
	<td><input type="text" size="6" name="receipt_post" value="<?=$ZipCode?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>เบอร์โทรศัพท์</td>
	<td><input type="text" size="50" name="receipt_tel" value="<?=$Phone?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>เบอร์มือถือ</td>
	<td><input type="text" size="50" name="receipt_mobile" value="<?//=$CustomerName?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>เบอร์แฟกส์</td>
	<td><input type="text" size="50" name="receipt_fax" value="<?=$Fax?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>ชื่อ บริษัท-หน้าซองจดหมาย</td>
	<td><input type="text"  size="50" name="receipt_company_name" value="<?=$LetterCompanyName?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>ที่อยู่1-หน้าซองจดหมาย</td>
	<td><input type="text" size="50"  name="receipt_address1" value="<?=$LetterAddress?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>ที่อยู่2-หน้าซองจดหมาย</td>
	<td><input type="text" size="50" name="receipt_address2" value="<?=$LetterAddress2?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>รหัสไปรษณีย์-หน้าซองจดหมาย</td>
	<td><input type="text" size="6" name="receipt_post" value="<?=$LetterZipCode?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>เลขผู้เสียภาษี</td>
	<td><input type="text" size="13"  name="TaxNo" value="<?=$TAXID?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>เลขนิติบุคคล</td>
	<td><input type="text" size="13" name="No" value="<?//=$CustomerName?>"  /></td>
	<td></td>
</tr>
<input type="hidden"  value="Receipt-Customer-Edit-Exe" name="myKey" />
<tr>
	<td></td>
	<td><input type="submit" /></td>
	<td></td>
</tr>

</table>
</form>