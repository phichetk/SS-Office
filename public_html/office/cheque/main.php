<?
#######################################
# Waso Accounting Systems
# Version : 1.0
# Date : 9/1/2553
# Credit : phichet khoeiarsa
# Contact : phichet@siamsoft.com
#######################################
session_start();


########## Load Configuration ##########
require("../../../office-data/config/default-config.php");
require("../../../office-data/config/db-connect.php");
require("../../../office-data/classes/adminlogin.php");
//require("../../classes/lib_helper.php");
//require("libs/lib_user_domain_manage.php");
//include ("lib_mail.php");

########## Action ##########
$adminlogin = new adminlogin();
//$helper = new helper();
//$helper->session_timeout();
$username=$_POST['username'];
$password=$_POST['password'];
$myKey=$_REQUEST['myKey'];
//àªç¤ user start

//if (isset($_SESSION["user"])) { 
//  echo $_SESSION["user"];
//} else {
//  echo "unknown";
//}

//if(!isset($_SESSION['user'])){
if(0){
	////echo "session not register";
	require_once("index.php");
	$adminlogin_result = $adminlogin->checkuser($username,$password);
	
	if(isset($_SESSION['user'])){
	$sql="INSERT INTO  `ws_user_log` (`UserName` , `IPAddress` ) VALUES ( '".$_SESSION['user']."' , '".getenv('REMOTE_ADDR')."' )";
	$result=$adminlogin->query($sql);
	print("<SCRIPT LANGUAGE='JavaScript'>");
	print("setTimeout(\"window.location='main.php'\",300);");
	print("</SCRIPT>");
	$yyy=0;
	}

}else{
//echo "sadfasdfasdf==".$_SESSION['user'];
///////echo "session registered";

require_once("template/head.php");

 ?>

<body class="body" >

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="69" valign="top">
	<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td height="26" colspan="2" background="../images/bg_head.jpg" class="rmenu">
		<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="240" height="81"><img src="../images/logo_new.jpg" width="300" height="81"></td>
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
				require_once("template/leftmenu.php");
			?>

			</td>
            <td width="15">&nbsp;</td>
            <td valign="top">

			<?
				    if($myKey =="newtaxw"){
                        require("template/newtaxw.php");            
                    }
                    if($myKey =="newtaxw-exe"){
                        require("template/newtaxw-exe.php");           
                    }
                    if($myKey =="taxw-detail-edit"){
                        require("template/taxw-detail-edit.php");            
                    }
                    if($myKey =="taxw-detail-edit-exe"){
                        require("template/taxw-detail-edit-exe.php");           
                    }
                    if($myKey =="report"){         
                        require("template/report.php");        
                    }
                    if($myKey =="APadd"){
                        require("template/apadd.php");             
                    }
                    if($myKey =="APadd-exe"){
                        require("template/apadd.exe.php");  
                    }
                    if($myKey =="APlist"){
                        require("template/aplist.php");
                    }
                    if (!isset($myKey)){
                        require("template/report.php");
                    }
			?>

			</td>
          </tr>
        </table></td>
      </tr>
    </table>
    </td>
  </tr>
</table>
<table>
	<tr>
		<td>&nbsp;</td>
		<td><?php echo $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?>
		</td>
	</tr>
</table>
</body>
</html>
<?



}

?>