<?php
class FundsManage
{
	function showOrder()
	{
		global $conn, $smarty;

		$member_name	= StripSlashes($_REQUEST["member_name"]);
		$transation	= StripSlashes($_REQUEST["transation"]);
		$startYear	= intval($_REQUEST["startYear"]);
		$startMonth	= intval($_REQUEST["startMonth"]);
		$startDay	= intval($_REQUEST["startDay"]);
		$toYear		= intval($_REQUEST["toYear"]);
		$toMonth	= intval($_REQUEST["toMonth"]);
		$toDay		= intval($_REQUEST["toDay"]);
		$product_id	= intval($_REQUEST["product_id"]);

		if($member_name == "" || strlen($member_name) > 20 || checkAlpha($member_name))
		{
			$myQuery = 0;
		}else {
			$sql = "select	*
				from	members
				where	member_name = '" . $member_name . "'";
			$rs = $conn->Execute($sql);
			if(!$rs)
			{
				$myQuery = 0;
			}else {
				if($rs->EOF)
				{
					$myQuery = 0;
				}else {
					$member_id = $rs->fields[0];
					$member_info = $rs->FetchRow();
					$myQuery = 1;
				}
			}
		}
		
		if($startYear == 0 || $startMonth == 0 || $startDay == 0 || $toYear == 0 || $toMonth == 0 || $toDay == 0)
		{
			$searchDate = 1;
		}else {
			if(DB_TYPE == "mysql")
			{
				$startDate	= $startYear . "-" . $startMonth . "-" . $startDay;
				$toDate		= $toYear . "-" . $toMonth . "-" . $toDay;
			}else {
				$startDate	= $startMonth . "/" . $startDay . "/" . $startYear;
				$toDate		= $toMonth . "/" . $toDay . "/" . $toYear;
			}
		}
		
		if($transation <> "1,2" && $transation <> "1" && $transation <> "2")
		{
			$transation = "1,2";
		}
		
		if($product_id == 0)
		{
			$searchProduct_id = 1;
		}
		
		if($myQuery == 0)
		{
			if(DB_TYPE == "mysql")
			{
				$sql = "select
						order_id,
						member_id,
						order_date,
						order_type,
						mode_id,
						order_amount,
						amount,
						admin_id,
						note
				 	from	orders
				 	where	member_id = 0";
			}else {
				$sql = "select
						order_id,
						member_id,
						convert(varchar(20), order_date, 120),
						order_type,
						mode_id,
						order_amount,
						amount,
						admin_id,
						note
				 	from	orders
				 	where	member_id = 0";
			}
		}else {
			if($searchProduct_id <> 1)
			{
				if(DB_TYPE == "mysql")
				{
					$sql = "select
							a.order_id,
							a.member_id,
							a.order_date,
							a.order_type,
							a.mode_id,
							a.order_amount,
							a.amount,
							a.admin_id,
							a.note
					 	from	orders a, ordermode b
					 	where	a.mode_id = b.mode_id
					 		and b.mode_lan = 1
					 		and b.product_id = " . $product_id .
					 		" and a.member_id = " . $member_info[0] .
						 	" and a.order_type in(" . $transation . ")";
					if($searchDate <> 1)
					{
						$sql .= " and to_days(a.order_date) >= to_days('" . $startDate . "')" .
						 	" and to_days(a.order_date) <= to_days( '" . $toDate . "')";
					}
				}else {
					$sql = "select
							a.order_id,
							a.member_id,
							convert(varchar(20), a.order_date, 120),
							a.order_type,
							a.mode_id,
							a.order_amount,
							a.amount,
							a.admin_id,
							a.note
					 	from	orders a, ordermode b
					 	where	a.mode_id = b.mode_id
					 		and b.mode_lan = 1
					 		and b.product_id = " . $product_id .
					 		" and a.member_id = " . $member_info[0] .
						 	" and a.order_type in(" . $transation . ")";
					if($searchDate <> 1)
					{
						$sql .= " and a.order_date > '" . $startDate . "'" .
						 	" and a.order_date-1 < '" . $toDate . "'";
					}
				}
				$sql .= " order by a.order_date desc";
			}else {
				if(DB_TYPE == "mysql")
				{
					$sql = "select
							order_id,
							member_id,
							order_date,
							order_type,
							mode_id,
							order_amount,
							amount,
							admin_id,
							note
					 	from	orders
					 	where	member_id = " . $member_info[0] .
						 	" and order_type in(" . $transation . ")";
					if($searchDate <> 1)
					{
						$sql .= " and to_days(order_date) >= to_days('" . $startDate . "')" .
						 	" and to_days(order_date) <= to_days('" . $toDate . "')";
					}
				}else {
					$sql = "select
							order_id,
							member_id,
							convert(varchar(20), order_date, 120),
							order_type,
							mode_id,
							order_amount,
							amount,
							admin_id,
							note
					 	from	orders
					 	where	member_id = " . $member_info[0] .
						 	" and order_type in(" . $transation . ")";
					if($searchDate <> 1)
					{
						$sql .= " and order_date > '" . $startDate . "'" .
						 	" and order_date-1 < '" . $toDate . "'";
					}
				}
				$sql .= " order by order_date desc";
			}
		}
		//echo "Query <br>".$sql;
		$rs = $conn->Execute($sql);
		if(!$rs)
		{
			showAdminErrorMsg($conn->ErrorMsg());
		}
		$currentPage = $_GET["currentPage"];
		initPage($rs, PAGE_SIZE, $currentPage, $pageCount, $totalRecord);

		include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/admin.title.inc.php");
		include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/admin.queryorder.form.php");
		include(ROOT_DIR . "templates/" . CURRENT_SKIN . "/admin.tail.inc.php");
		$smarty->display(CURRENT_THEME.'/page.structure.tpl');
		die();
	}	
}
?>
