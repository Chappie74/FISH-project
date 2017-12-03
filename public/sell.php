<?php 
	require("../includes/config.php");

	if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "cashier" || $_SESSION["account_type"] == "clerk")
	{
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$name = $_POST["name"];
			$brand = $_POST["brand"];
			$type = $_POST["type"];
			$price = $_POST["price"];
			$amount = (int)$_POST["amount"];

		}
		else
		{
			$rows = query("SELECT name,type, brand, quantity FROM inventory;");
			render("../templates/sell_t.php",["items"=>$rows]);
		}
	}
	else
	{
		redirect("index.php");
	}

?>