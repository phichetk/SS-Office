<?

			$cfg["page"] = $_REQUEST["page"] ? $_REQUEST["page"] : "index";

			if     ("111" == $cfg["page"]) { 
					require_once("template/m-receipt-manage.php");
			}elseif("121" == $cfg["page"]) { 
					require_once("template/m-course-monthly.php");
			}elseif("131" == $cfg["page"]) { 
                    require_once("template/m-course-monthly.php");
			}elseif("141" == $cfg["page"]) { 
                    require_once("template/m-course-monthly.php");
			}elseif("logout" == $cfg["page"]) {//
					require_once("template/logout.php");
			}else {
					require_once("template/walcome.php");
			}

				
			?>