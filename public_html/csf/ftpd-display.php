<?PHP
//echo "xxx=".$taxGetID;
//require("../../../office-data/fpdf/fpdf.php");
require("../../office-data/config/default-config.php");
//define('DATABASE_CSF', "siamsoft_csf");
require("../../office-data/classes/adminlogin.php");
//require("../../office-data/config/db-connect.php");
//require("../../../office-data/classes/num2text.class.php");
############## Conncect Data Base ################


mysql_connect(HOSTNAME, USERNAME, PASSWORD) or die("Error DB Connect ");
mysql_select_db(DATABASE_CSF) or die("Error DB Select ");
mysql_query("SET NAMES TIS620");

$adminlogin = new adminlogin();

//$TransectionID = $_REQUEST['TransectionID'];
?>
<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>CSF FILLTER DISPLAY</TITLE>
</HEAD>
<BODY>
<style>
#navigation{position:fixed;width:100%;z-index:99999;margin:0;padding:0;border:0;outline:0;top:0;left:0;font-size:13px;vertical-align:baseline;background:transparent;font-family:Lucida Sans Unicode,Lucida Grande,sans-serif;font-style:normal;line-height:18px;color:#333}
#breadcrumbs{min-height:43px}#breadcrumbs p{background-color:#eaeaea;border-bottom-style:solid;border-bottom-color:#cecece;border-width:1px;margin:0;padding:7px 12px}#breadcrumbs p,#breadcrumbs p a{color:#4c4c4c;text-decoration:none;font-family:verdana,arial,helvetica,clean,sans-serif;line-height:16px}#breadcrumbs p a.active{font-weight:700;color:#666;text-decoration:none}#breadcrumbs p a:hover{color:#000}
#breadcrumbsContainer{background-color:#eaeaea;border-bottom-style:solid;border-bottom-color:#cecece;min-height:41px;border-width:0 0 1px 0}.breadcrumbs{margin:0;padding:10px 12px 1px 12px;height:24px;list-style-image:none;list-style-position:outside}.breadcrumbs li{display:inline;padding:3px 3px 3px 3px}.breadcrumbs ul li,ol li{line-height:24px}.breadcrumbs li a{color:#4c4c4c;-ms-filter:"alpha(opacity=70)";filter:alpha(opacity=70);-webkit-opacity:.7;-moz-opacity:.7;-khtml-opacity:.7;opacity:.7}.breadcrumbs li a:link,a:visited,a:active{text-decoration:none;cursor:default}.breadcrumbs li img{position:relative;width:18px;height:18px;top:4px}
.breadcrumbs li a:hover{cursor:pointer;color:#000;-ms-filter:"alpha(opacity=100)";filter:alpha(opacity=100);-webkit-opacity:1;-moz-opacity:1;-khtml-opacity:1;opacity:1;text-decoration:none}.breadcrumbs li .leafNode{color:#333;-ms-filter:"alpha(opacity=90)";filter:alpha(opacity=90);-webkit-opacity:.9;-moz-opacity:.9;-khtml-opacity:.9;opacity:.9}
</style>
<div id="navigation">
	<div id="breadcrumbsContainer" class="hideBreadcrumbs">
        <ul id="breadcrumbs_list" class="breadcrumbs">
        <li><a href="/cpsess2941552634/scripts/command?PFILE=main"><img border="0" alt='Home' src='/images/home.png' /><span class="imagenode">Home</span></a> <span>&raquo;</span></li>
		<li><a href="/cpsess2941552634/scripts/command?PFILE=Plugins"><span>Plugins</span></a> <span>&raquo;</span></li>
		<li><a href="csf.cgi" class="leafNode"><span>XXX</span></a></li>
        </ul>
    </div>
</div>
<br />
<br />
<br />
<b style='font-size: 16px'>FTPD-DISPLAY.PHP</b>
<style type="text/css">
a {
	color: #000000;
	text-decoration: underline;
}
td {
	font-family:Arial, Helvetica, sans-serif;
	font-size:small;
}
body {
	font-family:Arial, Helvetica, sans-serif;
	font-size:small;
}
pre {
	font-family: Courier New, Courier;
	font-size: 12px;
}
.comment {
	border-radius:5px;
	border: 1px solid #DDDDDD;
	padding: 10px;
	font-family: Courier New, Courier;
	font-size: 14px
}
.value-default {
	background:#F5F5F5;
	padding:2px;
	border-radius:5px;
}
.value-other {
	background:#F4F4EA;
	padding:2px;
	border-radius:5px;
}
.value-disabled {
	background:#F5F5F5;
	padding:2px;
	border-radius:5px;
}
.value-warning {
	background:#FFC0CB;
	padding:2px;
	border-radius:5px;
}
.section {
	border-radius:5px;
	border: 2px solid #990000;
	padding: 10px;
	font-size:16px;
	font-weight:bold;
}
.input {
	min-width:0px;
	padding:3px;
	background:#FFFFFF;
	border-radius:3px;
	border:1px solid #A6C150;
	color:#990000 !important;
	font-family:Verdana, Geneva, sans-serif;
	text-shadow: 0px 1px 1px #CDCDCD;
	font-size:13px;
	font-weight:normal;
	margin:2px;
}
.input:hover {
	cursor:pointer;
	border:1px solid #A6C150;
	box-shadow: 0px 0px 6px 1px #A6C150;
}
input[type=text], textarea, select {
	-webkit-transition: all 0.30s ease-in-out;
	-moz-transition: all 0.30s ease-in-out;
	-ms-transition: all 0.30s ease-in-out;
	-o-transition: all 0.30s ease-in-out;
	transition: all 0.30s ease-in-out;
	border-radius:3px;
	outline: none;
	padding: 3px 0px 3px 3px;
	margin: 5px 1px 3px 0px;
	border: 1px solid #DDDDDD;
}
input[type=text]:focus, textarea:focus, select:focus {
	box-shadow: 0 0 5px #CC0000;
	padding: 3px 0px 3px 3px;
	margin: 5px 1px 3px 0px;
	border: 1px solid #CC0000;
}
</style>
<form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>' method='post'>
<input type='hidden' name='action' value='savedeny'>
<fieldset><legend><b><a href="./ftpd-display.php">display</a></b> || <b><a href="./ftpd.php">edit</a> || <b><a href="./ftpd-group.php">GROUP</a></b>|| <b><a href="./ftpd-csfpost.php">CSFPOST</a></b></legend>
<table align='center'>

<tr><td><textarea name='formdata' cols='221' rows='20' style='font-family: Courier New, Courier; font-size: 12px'>
<?php
$SQL_FTPD_CSF  = " SELECT * ";
$SQL_FTPD_CSF .= " FROM  `csfpost` ";
//$SQL_FTPD_CSF .= " WHERE  `Detail1` LIKE  '%ftpd%' ";
$SQL_FTPD_CSF .= " ORDER BY Port,IP1, IP2, IP3 ";
//$SQL_FTPD_CSF .= " GROUP BY Port ";

$RESULT_FTPD_CSF       = $adminlogin->query($SQL_FTPD_CSF);
//$ROW_FTPD_CSF          = mysql_fetch_array($RESULT_FTPD_CSF);
    $iii=0;
    while($ROW_FTPD_CSF= mysql_fetch_array($RESULT_FTPD_CSF)){
        
     $IP1 = $ROW_FTPD_CSF['IP1'];
     $IP2 = $ROW_FTPD_CSF['IP2'];
     $IP3 = $ROW_FTPD_CSF['IP3'];
     $IP4 = $ROW_FTPD_CSF['IP4'];
     
     $IPPORT = $ROW_FTPD_CSF['Port'];
	 $IPDETAIL2 = $ROW_FTPD_CSF['Detail2'];
     //echo "iptables -I INPUT -s  ".$IP1.".".$IP2.".".$IP3.".".$IP4."   -p tcp -m state --state NEW -m tcp --dport ".$IPPORT." -j DROP";
	 echo "".$IP1.".".$IP2.".".$IP3.".".$IP4." # ".$IPDETAIL2; //Update 19/9/18

     echo "\n";
    $iii++;
    }

//print_r($ROW_FTPD_CSF);
    
?>
</textarea></br></td></tr>
<tr><td>SPcount=<?=$SPcount?></td></tr>
<tr><td>iii=<?=$iii?></td></tr>
</table></fieldset>
<p align='center'><input type='submit' class='input' value='Change'></p>
</form>
<p><form action='csf.cgi' method='post'><input type='submit' class='input' value='Return'></form></p>
<pre style='font-family: Courier New, Courier; font-size: 12px'>csf: v7.67</pre><p>&copy;2006-2015, <a href='http://www.configserver.com' target='_blank'>ConfigServer Services</a> (Way to the Web Limited)</p>
</BODY>
</HTML>


