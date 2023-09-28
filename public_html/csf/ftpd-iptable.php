<?PHP
//echo "xxx=".$taxGetID;
//require("../../../office-data/fpdf/fpdf.php");
require("../../office-data/classes/adminlogin.php");
require("../../office-data/config/default-config.php");
//require("../../../config/db-connect.php");
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
<TITLE>CSF FILLTER</TITLE>
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
		<li><a href="csf.cgi" class="leafNode"><span>ConfigServer Security &amp; Firewall</span></a></li>
        </ul>
    </div>
</div>
<br />
<br />
<br />
<img src='csf/csf_small.png' align='absmiddle' alt='csf logo'> <b style='font-size: 16px'>ConfigServer Security &amp; Firewall - csf v7.67</b>
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
<fieldset><legend><b>Edit /etc/csf/csf.deny</b></legend>
<table align='center'>

<tr><td><textarea name='formdata' cols='221' rows='20' style='font-family: Courier New, Courier; font-size: 12px'>
<?php 

$formdata = $_POST['formdata'];
$formdata1=str_replace("\r\n","ENDLINE",$formdata);
$SPdata1 = split("ENDLINE",$formdata1);
$SPcount = count($SPdata1);

//$lines_arr = preg_split('/\n|\r/',$formdata);
###########
//echo "ARRAY=";
//echo count($SPdata1);
//echo "\n";
//$num_newlines = count($lines_arr); 
//echo "ALLLINE=".$num_newlines;
//iptables -I INPUT -s  223.223.146.0/24  -p tcp -m state --state NEW -m tcp --dport 21 -j DROP
//iptables -I INPUT -s  253.253.253.253  -p tcp -m state --state NEW -m tcp --dport 21 -j DROP


//echo "\n";
//print_r($SPdata1);
$iii=1;
for($i=0;$i<=$SPcount-1;$i++)
{
   //echo $SPdata1[$i];
   $SPdataIP = split("iptables -I INPUT -s  ",$SPdata1[$i],2);
   //echo  "IP=".$SPdataIP[0];
   //$IPFull1 = $SPdataIP[0];
   //echo  "IP=".$IPFull1;
  
        $SPIPDT1 = explode(' -p tcp -m state --state NEW -m tcp --dport ',$SPdataIP[1],4);
         //print_r($SPIPDT1);
            
            $SPIPAll = explode('.',$SPIPDT1[0],4);
            $IP1=trim($SPIPAll[0]);
            $IP2=trim($SPIPAll[1]);
            $IP3=trim($SPIPAll[2]);
            $IP4=trim($SPIPAll[3]);
            
            //print_r($SPIPAll);
            
            $SPIPPORT = explode(' ',$SPIPDT1[1],4);
            //print_r($SPIPPORT);
            $IPPORT1      = trim($SPIPPORT[0]);
            
            echo "IP=".$IP1.".".$IP2.".".$IP3.".".$IP4."PORT".$IPPORT1;
            
            
            //echo  "IP2=".$SPIPAll[1];
            echo "\n";
            
   
         //$SPdataDetail1 = split(" ",$SPdataIP[1],3);
         //echo  "Detail".$SPdataDetail1[0];
            //$Detail1=$SPdataDetail1[0];
            //$Detail2="";
   //if($SPdataDetail1[0]=="(ftpd)"){
   // echo "iptables -I INPUT -s  ".$SPdataIP[0]."  -p tcp -m state --state NEW -m tcp --dport 21 -j DROP";
   //  echo "\n";
   //  $iii++;


   
   //} 

$SQL_INSERT_CSF = "INSERT INTO  `siamsoft_csf`.`csf1` (";
$SQL_INSERT_CSF .= "`IP1` ,";
$SQL_INSERT_CSF .= "`IP2` ,";
$SQL_INSERT_CSF .= "`IP3` ,";
$SQL_INSERT_CSF .= "`IP4` ,";
//$SQL_INSERT_CSF .= "`Detail1` ,";
$SQL_INSERT_CSF .= "`Port`";
$SQL_INSERT_CSF .= ")VALUES (";
$SQL_INSERT_CSF .= "  '".$IP1."',  ";
$SQL_INSERT_CSF .= "  '".$IP2."',  ";
$SQL_INSERT_CSF .= "  '".$IP3."',  ";
$SQL_INSERT_CSF .= "  '".$IP4."',  ";
//$SQL_INSERT_CSF .= "  '".$Detail1."'," ;
$SQL_INSERT_CSF .= "  '".$IPPORT1."' )" ;

if(isset($_POST['submit'])){
$RESULT_INSERT_CSF      = $adminlogin->query($SQL_INSERT_CSF);
}
//$ROW_INSERT_CSF         = mysql_fetch_array($RESULT_INSERT_CSF);
    
}


    
?>
</textarea></br></td></tr>
<tr><td>SPcount=<?=$SPcount?></td></tr>
<tr><td>iii=<?=$iii?></td></tr>
</table></fieldset>
<p align='center'><input name="submit" type='submit' class='input' value='Change'></p>
</form>
<p><form action='csf.cgi' method='post'><input type='submit' class='input' value='Return'></form></p>
<pre style='font-family: Courier New, Courier; font-size: 12px'>csf: v7.67</pre><p>&copy;2006-2015, <a href='http://www.configserver.com' target='_blank'>ConfigServer Services</a> (Way to the Web Limited)</p>
</BODY>
</HTML>
