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
	<td align="center">���������١�������Ѻ�͡�����</td>
	<td></td>
	<td></td>
</tr>
<tr>
	<td>ID</td>
	<td><?=$CustomerID?></td>
	<td></td>
</tr>
<tr>
	<td>���� ���Դ���</td>
	<td><input type="text" size="50" name="receipt_contect_name" value="<?=$CustomerName?>" /></td>
	<td></td>
</tr>
<tr>
	<td>���� ����ѷ</td>
	<td><input type="text"  size="50" name="receipt_company_name" value="<?=$CompanyName?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>�������1</td>
	<td><input type="text" size="50"  name="receipt_address1" value="<?=$Address?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>�������2</td>
	<td><input type="text" size="50" name="receipt_address2" value="<?=$Address2?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>������ɳ���</td>
	<td><input type="text" size="6" name="receipt_post" value="<?=$ZipCode?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>�������Ѿ��</td>
	<td><input type="text" size="50" name="receipt_tel" value="<?=$Phone?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>������Ͷ��</td>
	<td><input type="text" size="50" name="receipt_mobile" value="<?//=$CustomerName?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>����ῡ��</td>
	<td><input type="text" size="50" name="receipt_fax" value="<?=$Fax?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>���� ����ѷ-˹�ҫͧ������</td>
	<td><input type="text"  size="50" name="receipt_company_name" value="<?=$LetterCompanyName?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>�������1-˹�ҫͧ������</td>
	<td><input type="text" size="50"  name="receipt_address1" value="<?=$LetterAddress?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>�������2-˹�ҫͧ������</td>
	<td><input type="text" size="50" name="receipt_address2" value="<?=$LetterAddress2?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>������ɳ���-˹�ҫͧ������</td>
	<td><input type="text" size="6" name="receipt_post" value="<?=$LetterZipCode?>"   /></td>
	<td></td>
</tr>
<tr>
	<td>�Ţ�����������</td>
	<td><input type="text" size="13"  name="TaxNo" value="<?=$TAXID?>"  /></td>
	<td></td>
</tr>
<tr>
	<td>�Ţ�ԵԺؤ��</td>
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