<?php 
		require("../includes/config.php");
		if($_SESSION["account_type"] == "admin" || $_SESSION["account_type"] == "cashier" || $_SESSION["account_type"] == "clerk"   )
		{
			$rows = query("SELECT * FROM products");
			render("../templates/view_products_t.php",["items" => $rows]);
		}
		else
		{
			redirect("index.php");
		}


?>