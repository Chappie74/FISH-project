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
			$description = $_POST["description"];
			$invent_id = $_POST["invent_id"];

			$exists = query("SELECT amount FROM products WHERE inventory_id = ? LIMIT 1;", $invent_id); 	

			if(!empty($exists))
			{
				$success = query("UPDATE products SET marked_price = ? ,description = ?, amount = ? WHERE inventory_id = ?", $price,$description,$amount,$invent_id);

				if($amount < $exists["amount"] )
				{
					$success = query("UPDATE inventory SET quantity = quantity + ? WHERE inventory_id = ?",$exists["amount"] - $amount, $invent_id);
					redirect("view_products.php");
				}
				else if($amount > $exists["amount"])
				{
					$success = query("UPDATE inventory SET quantity = quantity - ? WHERE inventory_id = ?", $amount, $invent_id);
					redirect("view_products.php");
				}
				

				redirect("index.php");
			}
			else
			{
				$success = query("INSERT INTO products (name,brand,type,marked_price,description,inventory_id,amount) VALUES(?,?,?,?,?,?,?);", $name, $brand, $type, $price,$description,$invent_id,$amount);
				$success = query("UPDATE inventory SET quantity = quantity - ? WHERE inventory_id = ?", $amount, $invent_id);
				redirect("index.php");
			}
			
		}
		else
		{
			$rows = query("SELECT name,type, brand, quantity, inventory_id FROM inventory;");
			render("../templates/sell_t.php",["items"=>$rows]);
		}
	}
	else
	{
		redirect("index.php");
	}

?>