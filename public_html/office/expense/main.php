<?
#######################################
# SIAMSOFT Accounting Systems
# Expend Module
# Version : 1.0
# Date : 14/7/19
# Credit : phichet khoeiarsa
# Contact : phichet@siamsoft.com
#######################################
session_start();
date_default_timezone_set("Asia/Bangkok");

########## Load Configuration ##########
require("../../../office-data/config/default-config.php");
require("../../../office-data/classes/adminlogin.php");
############## Conncect Data Base ################

mysql_connect(HOSTNAME_RECEIPT, USERNAME_RECEIPT, PASSWORD_RECEIPT) or die("Error DB Connect ");
mysql_select_db(DATABASE_EXPEND) or die("Error DB Select ");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");

########## Action ##########
$adminlogin = new adminlogin();
//$helper = new helper();
//$helper->session_timeout();
$username=$_POST['username'];
$password=$_POST['password'];
$myKey=$_REQUEST['myKey'];
echo "\$_FILES[\"fileUpload\"][\"name\"] = ".$_FILES["fileUpload"]["name"]."<br>";


?>

<!DOCTYPE html>
<html>
<head>
<?php include 'index-meta-header.php'; ?>
</head>
<body>
<div data-role="page" class="jqm-demos jqm-home">

    <?php include 'index-body-header.php'; ?>
    <!-- /header -->
    
    <?
    if($myKey =="expense-add"){
        require("template/expense-add.php"		);            
    }
    if($myKey =="expense-add-exe"){
        require("template/expense-add-exe.php"	);            
    }
	if($myKey =="expense-added"){
        require("template/expense-added.php"	);            
    }
    if($myKey =="expense-report"){
        require("template/expense-report.php"	);        
    }
    if (!isset($myKey)){
        require("template/expense-report.php"	);
    }
	?>
    <?php // include 'index-body.php'; ?>
    
    <!-- /content -->
    <?php include 'index-navi-menu.php'; ?>	    
     <!-- /panel -->

    <?php include 'index-body-footer.php'; ?>
    <!-- /footer -->
    
	<!-- TODO: This should become an external panel so we can add input to markup (unique ID) -->

    <?php include 'index-search-menu.php'; ?>
    <!-- /panel -->


</div><!-- /page -->

</body>
</html>
