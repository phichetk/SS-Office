<html>
<script language="javascript">
	function check(document){
		if(document.username.value==""){
			alert("กรุณาใส่ Username");
			document.username.focus();
			return false;
		}
		if(document.password.value==""){
			alert("กรุณาใส่ Password");
			document.password.focus();
			return false;
		}
	return true;
	}
</script>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<title>:: Siamsoft System ::</title>
<link href="css/Siamsoft_css.css"  rel="stylesheet" type="text/css" />
<link href="css/style-gradient.css"rel="stylesheet" type="text/css" />
</head>
<body class="body">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="69" valign="top"><table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" colspan="2" background="images/bg_head_edit.jpg" class="rmenu"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="240" height="81"><img src="images/logo_new.jpg"  width="300" height="81"></td>
            <td align="right" valign="bottom">&nbsp;</td>
            <td width="28"></td>
          </tr>
          
        </table></td>
      </tr>
      
      
      
    </table>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="100">&nbsp;</td>
  </tr>
  <tr>
    <td><table width="825" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="825" height="422" valign="top" background="images/bg_login_new_edit2.jpg" ><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td height="40" colspan="3"></td>
            </tr>
            <tr>
              <td width="70">&nbsp;</td>
              <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="323"><img src="images/logo_Siamsoft_new_edit.jpg" width="227" height="44">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td height="24" class="Ar14B"></td>
                          </tr>
                          <tr>
                            <td valign="top"><span class="Ar14B">Siamsoft Members </span></td>
                          </tr>
                          <tr>
                            <td height="10"></td>
                          </tr>
                        </table>
                      <form name="form1" method="post" action="./main.php" onSubmit="return check(this)">
                          <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td><span class="Ar12Bb">Member Name </span></td>
                            </tr>
                            <tr>
                              <td height="3"></td>
                            </tr>
                            <tr>
                              <td><input name="username" type="text" class="border" size="50"></td>
                            </tr>
                            <tr>
                              <td height="10"></td>
                            </tr>
                            <tr>
                              <td class="Ar12Bb">Password </td>
                            </tr>
                            <tr>
                              <td height="3"></td>
                            </tr>
                            <tr>
                              <td height="20"><input name="password" type="password" class="border" size="50">
                                  <input name="Submit" type="hidden" class="border" size="50" value="1"></td>
                            </tr>
                            <tr>
                              <td height="20">&nbsp;</td>
                            </tr>
                            
                            <tr>
                              <td height="5"></td>
                            </tr>
                            <tr>
                              <td height="20"><input name="Submit" type="image" src="images/but_login_new_edit.jpg"> </td>
                            </tr>
                          </table>
                      </form></td>
                    <td width="1" valign="top"><table width="1" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td width="1" height="66"></td>
                        </tr>
                        <tr>
                          <td height="260"></td>
                        </tr>
                    </table></td>
                    </tr>
              </table></td>
              <td width="60">&nbsp;</td>
            </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
