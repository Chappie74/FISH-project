<?php
	require("../includes/config.php"); 

	$history = array();

	if(isset($_GET["supplyid"]) && $_SESSION["account_type"] == "admin")
	{
		$success= query("DELETE FROM supply WHERE supply_id = ?;", $_GET["supplyid"]);
	}
	else if ($_SESSION["account_type"] == "supplier")
	{
		$rows = query("SELECT * FROM supply WHERE user_id = ?", $_SESSION["id"]);		
		$business_name = query("SELECT business_name FROM suppliers WHERE user_id = ?;", $_SESSION["id"]);
		render("../templates/supply_history_t.php", ["business_name"=>$business_name, "items"=>$rows]);		
	}
	else if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk")
	{
		$items = array();
		$rows = query("SELECT * FROM supply ;");		
		foreach ($rows as $row) {
			$item = $row;
			$business_name = query("SELECT business_name FROM suppliers WHERE user_id = ? LIMIT 1;", $row["user_id"]);	
			$item["business_name"]= $business_name[0]["business_name"];
			array_push($items, $item);

		}
		
		$business_name = query("SELECT business_name FROM suppliers WHERE user_id = ?;", $_SESSION["id"]);
		render("../templates/supply_history_t.php", ["items"=>$items]);	
	}
	
?>