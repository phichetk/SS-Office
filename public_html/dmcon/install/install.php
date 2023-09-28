<?php
include("../common/func.inc.php");
include("../common/lib/adodb.inc.php");
include("install.tools.inc.php");
$action = $_REQUEST["action"];
if($action == "showWelcome")
{
	showWelcome();
}else if($action == "step1") {
	processStep1("");
}else if($action == "step2") {
	processStep2("");
}else if($action == "step3") {
	processStep3("");
}else {
	showWelcome();
}
?>
