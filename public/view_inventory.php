<?php 
	require("../includes/config.php");
	if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "clerk" )
	{	
		if(isset($_GET["inventory_id"]))
		{
			$success = query("DELETE FROM inventory WHERE inventory_id = ?;",$_GET["inventory_id"]);
			redirect("view_inventory.php");
		}
		else
		{
			$inventory = query("SELECT * FROM inventory;");
			render("../templates/view_inventory_t.php", ["items"=>$inventory]);
		}
		
	}
	else
	{
		redirect("index.php");
	}

?>