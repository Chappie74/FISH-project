<?php 
	require("../includes/config.php");
	if($_SESSION["account_type"] == "admin" ||$_SESSION["account_type"] == "clerk" || $_SESSION["account_type"] == "cashier")
	{
		$rows = query("SELECT * FROM buys");
		$items = array();
		foreach($rows as $row)
		{
			$item = array();
			$product = query("SELECT name,type,brand,description FROM products WHERE product_id = ? LIMIT 1;", $row["product_id"]);
			$item["p_name"] = $product[0]["name"];
			$item["p_type"] = $product[0]["type"];
			$item["p_brand"] = $product[0]["brand"];
			$item["p_amount"] = $row["quantity"];
			$item["p_price"] = $row["price"];

			$users = query("SELECT email FROM users WHERE user_id = ? LIMIT 1;", $row["user_id"]);
			$item["email"] = $users[0]["email"];

			$customer = query("SELECT first_name, last_name FROM customers WHERE user_id = ? LIMIT 1", $row["user_id"]);
			$item["name"] = $customer["first_name"]." ".$customer["last_name"];
			array_push($items, $item);
		}
		render("../templates/products_history_t.php",["items" => $items]);
		
	}
	else if($_SESSION["account_type"] == "customer")
	{
		$rows = query("SELECT * FROM buys WHERE user_id =?",$_SESSION["id"]);
		$items = array();
		foreach($rows as $row)
		{
			$item = array();
			$product = query("SELECT name,type,brand,description FROM products WHERE product_id = ? LIMIT 1;", $row["product_id"]);
			$item["p_name"] = $product[0]["name"];
			$item["p_type"] = $product[0]["type"];
			$item["p_brand"] = $product[0]["brand"];
			$item["p_amount"] = $row["quantity"];
			$item["p_price"] = $row["price"];


			array_push($items, $item);
		}
		render("../templates/products_history_t.php",["items" => $items]);
	}
	else
	{
		redirect("index.php");
	}
?>