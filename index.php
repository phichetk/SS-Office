<?php
$user1 = $_REQUEST['username'];
$pass1 = $_REQUEST['password'];


 header( "location: /public_html/office/wtax/main.php" );
 exit(0);

?>


<html>
<head>
<title>LOGIN</title>
<meta name="robots" content="noindex,nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style>
*{ FONT-SIZE: 8.5pt; FONT-FAMILY: verdana; } b { FONT-WEIGHT: bold; } .listtitle { BACKGROUND: #425984; COLOR: #EEEEEE; white-space: nowrap; border-radius: 3px; box-shadow: 1px 1px 3px #727272; } td.list { BACKGROUND: #EEEEEE; white-space: nowrap; } input { border-radius: 3px; padding-left: 4px; padding-right: 4px; } .inset { border: 1px inset #DDDDDD; } #footer { position: fixed; bottom: 0; width: 100%; padding-bottom: 20px; text-align: center; color: #A1A1A1; } #outofsync { font-weight: bold; color: #990000; }
</style>
</head>
<body onload="document.form.username.focus();if(document.form.referer.value.indexOf('#')==-1)document.form.referer.value+=location.hash;">
<center><br><br><br><br>
    <h1>Login Page<?=$user1?>+<?=$pass1?></h1>
    <table cellspacing=1 cellpadding=5>
        <tr><td class=listtitle colspan=2>Please enter your Username and Password</td></tr>
        <form action="" method="POST" name="form">
        <input type=hidden name=referer value="/">
        <tr><td class=list align=right>Username:</td><td class=list><input class=inset type=text name=username autocapitalize='none'></td></tr>
        <tr><td class=list align=right>Password:</td><td class=list><input class=inset type=password name=password></td></tr>
        <tr><td class=listtitle align=right colspan=2><input type=submit value='Login'></td></tr>
        </form>
    </table>
</center>
    <div id='footer'>Thu Sep 28 14:50:46 2023
        <div id='outofsync'></div>
        <div id='valid'>yes</div>
    </div>
</body></html>

<script language="JavaScript">
    computer_time=Math.floor(Date.now()/1000); 
    server_time=1695887446; time_diff=Math.abs(computer_time-server_time); 
    if (time_diff>86400) { 
        document.getElementById('outofsync').innerHTML='Computer or server time out of sync by '+(Math.round(100*time_diff/3600)/100)+' hours.';
    }
</script>