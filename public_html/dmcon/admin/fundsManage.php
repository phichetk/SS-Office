<?php
include("../server.inc.php");
include(ROOT_DIR . "common/db.inc.php");
include(ROOT_DIR . "init.inc.php");
include(ROOT_DIR . "common/func.inc.php");
include(ROOT_DIR . "model/member.login.php");
include(ROOT_DIR . "model/admin.fundsmanage.php");

$admin = new MemberLogin();
$admin_info = $admin->checkAdminLogin();
if($admin_info == -1)
{
	$admin->showForm("");
}

if($admin->checkAdminTask($admin_info[0], "Funds Management") < 0)
{
	showAdminErrorMsg(ADMIN_0035);
}

$fundsManage = new FundsManage();
$action = $_REQUEST["action"];
if($action == "showForm")
{
	$fundsManage->showForm("");
}else if($action == "modifyFunds") {
	$fundsManage->modifyFunds();
}else if($action == "modifyLevel") {
	$fundsManage->modifyLevel();
}else {
	$fundsManage->showForm("");
}
?>