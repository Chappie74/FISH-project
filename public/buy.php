<?php 
	require("../includes/config.php");

	if($_SESSION["account_type"] == "customer")
	{
		if($_SERVER["REQUEST_METHOD"] =="POST")
		{
			$amount = (int)$_POST["amount"];
			$user_id = $_SESSION["id"];
			$price = $_POST["price"];
			$product_id = $_POST["p_id"];

			$success = query("INSERT INTO buys (product_id, user_id, amount, price) VALUES(?,?,?,?)",$product_id, $user_id,$amount, $price);
			redirect("../products_history.php");
		}
		else
		{
			$rows = query("SELECT * FROM products");
			render("../templates/buy_t.php",["items"=>$rows]);
		}
	}
	else
	{
		redirect("index.php");
	}
?>