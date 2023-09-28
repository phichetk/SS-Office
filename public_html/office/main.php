<html>
<head>
<title>SIAMSOFT OFFICE WEB PROGRAM</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="libs/style.css" rel="stylesheet" type="text/css" /> 
<script language="JavaScript" src="libs/functions.js"></script>
<script type="text/javascript" src="js/calendarDateInput.js"></script>

</head>

<body class="body" >
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="69" valign="top">
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" colspan="2" background="images/bg_head.jpg" class="rmenu">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="240" height="81"><a href="./main.php"><img src="images/logo_new.jpg" width="300" height="81"></a>
			<td width="30"><a href="../../../../own-all/public_html/office/main.php"><img src="images/own-logo.jpg" width="300" height="81"></a></td>
            <td valign="top">&nbsp;</td>
            <td width="30"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td colspan="2" class="rmenu"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="14" colspan="4"></td>
            </tr>
          <tr>
            <td width="15" align="right" valign="top">&nbsp;</td>
            <td width="285" align="right" valign="top">

			<?
				//require_once("template/leftmenu.php");
			?>

			</td>
            <td width="15">&nbsp;</td>
            <td valign="top">
			<?
				//require_once("../../office/classes/lib_main.php");
			?>
			</td>
            
          <tr>
            <td >&nbsp;</td>
            <td ><h1>
			<NOBR>
			<a href="post/main.php">ส่งไปรษณีย์</a> || <a href="receipt/main.php">ออกใบเสร็จ</a> || <a href="wtax/main.php">หัก ณที่จ่าย</a> || <a href="cheque/main.php">จ่ายเช็ค</a> || <a href="expense/main.php">ค่าใช้จ่าย</a>  
			</NOBR>
			</h1></td>

            <td >&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>

<table>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>&nbsp;</td></tr>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?>
		</td>
	</tr>
</table>

</body>
</html>