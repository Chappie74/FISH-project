<?php 
	
	require("../includes/config.php");
	$salt = "2a07usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi";
	if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["account_type"] == "admin")
	{
		$email = $_POST["email"];
		$password = $_POST["email"];
		$account_type = $_POST["account_type"];
		$success = query("INSERT INTO users (email, password, account_type) VALUES (?,?,?);", $email, crypt($password, $salt), $account_type);
		redirect("view_users.php");
	}
	else if ($_SESSION["account_type"] == "admin")
	{
		$rows = query("SELECT * FROM account_types");
		render("../templates/add_user_t.php",["account_types"=>$rows]);
	}
	else
	{
		redirect("index.php");
	}
	
?>