<?php 
	
	require("../includes/config.php");
	if(isset($_GET["inventory_id"]))
	{
		if($_SESSION["account_type"] == "clerk" || $_SESSION["account_type"] == "admin")
		{
			$rows = query("SELECT * FROM inventory WHERE inventory_id = ? LIMIT 1;", $_GET["inventory_id"]);
			render("../templates/update_inventory_t.php", ["items"=>$rows[0]]);
		}
		else
		{
			redirect("index.php");
		}
	}
	else if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['name'];
		$type = $_POST['type'];
		$quantity = $_POST['quantity'];
		$brand = $_POST['brand'];
		$inventory_id = $_POST["inventory_id"];

		$success = query("UPDATE inventory SET name = ?, type = ?, quantity = ?, brand = ? WHERE inventory_id = ?", $name, $type, $quantity, $brand, $inventory_id);
		redirect("view_inventory.php");
	}
	else
	{
		redirect("index.php");
	}

?>