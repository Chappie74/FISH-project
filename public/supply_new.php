<?php   
	require("../includes/config.php"); 

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = strtolower($_POST["name"]);
		$type = strtolower($_POST["type"]);
		$quantity = (int)$_POST["quantity"];
		$brand = strtolower($_POST["brand"]);

		$sql = "INSERT INTO inventory (name, type, quantity, brand) VALUES (?,?,?,?);";
		$success = query($sql, $name, $type, $quantity, $brand);

		$supplier_id = query("SELECT supplier_id FROM suppliers WHERE user_id = ? LIMIT 1; ", $_SESSION["id"]);		
		$sql = "INSERT INTO supply (name, supplier_id, quantity,type,brand,user_id) VALUES (?,?,?,?,?,?);";
		$success  = query($sql,$name, $supplier_id[0]["supplier_id"], $quantity,$type,$brand,$_SESSION["id"]);
		redirect("supply_history.php");
	}
	else
	{
		render("../templates/supply_new_t.php");
	}

?>