<?php
	
	require("../includes/config.php");
	$salt = "2a07usesomesillystringfore2uDLvp1Ii2e./U9C8sBjqp8I90dH6hi";
	//determine whether the form was submitted and which button was pressed. (signup/login)
	if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["btn_type"] == "signup") //if signup was pressed
	{
		if($_POST["account_type"] == "customer")
		{
			$first_name = $_POST["first_name"];
			$last_name = $_POST["first_name"];
			$address = $_POST["address"];
			$telephone = $_POST["telephone"];
			$email = $_POST["email"];
			$type = $_POST["account_type"];
			$password = $_POST["password"];

			$sql = "INSERT INTO users (email, password, account_type) VALUES (?,?,?);";
			$success = query($sql, $email,crypt($password,$salt), $type);
			$rows = query("SELECT LAST_INSERT_ID() AS id");
			$sql = "INSERT INTO customers (first_name,last_name,email,address,telephone_number,user_id) VALUES(?,?,?,?,?,?);";
			$success = query($sql, $first_name, $last_name, $email, $address, $telephone, $rows[0]["id"]);
			
			$_SESSION["id"] = $rows[0]["id"];
			$_SESSION["account_type"] = $account_type;	
			redirect("index.php");
		}
		else
		{
			
			$address = $_POST["address"];
			$telephone = $_POST["telephone"];
			$email = $_POST["email"];
			$business_name = $_POST["business_name"];
			$person_of_contact = $_POST["person_of_contact"];
			$account_type = $_POST["account_type"];
			$password = $_POST["password"];
			$type = $_POST["account_type"];

			$sql = "INSERT INTO users (email, password, account_type) VALUES (?,?,?);";
			$success = query($sql, $email,crypt($password,$salt), $type);
			$rows = query("SELECT LAST_INSERT_ID() AS id");
			$sql = "INSERT INTO suppliers (address,person_of_contact,email,telephone_number,business_name,user_id) VALUES(?,?,?,?,?,?);";
			$success = query($sql, $address, $person_of_contact, $email, $telephone, $business_name, $rows[0]["id"]);
			$_SESSION["id"] = $rows[0]["id"];
			$_SESSION["account_type"] = $account_type;		
			redirect("index.php");

		}
	}
	//if login was pressed
	else if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["btn_type"] == "login") //if login was pressed
	{
		$username = (string)$_POST["username"];
		$password = (string)$_POST["password"];
		$account_type = $_POST["account_type"];

		$sql = "SELECT * FROM users WHERE email = ? AND password = ? AND account_type = ? LIMIT 1;";
		$rows = query($sql, $username, crypt($password,$salt), $account_type);
		if(empty($rows))
		{
			apologize("Could not find user with that username and correspoinding password and account type.");
		}
		
		if($rows != [])
		{
			
			$_SESSION["id"] = $rows[0]["user_id"];	
			$_SESSION["account_type"] = $rows[0]["account_type"];		
			redirect("index.php");
		}
		apologize("Could not find a Username with the correspoinding password in the database. Consider signing up.");


	}

	$sql = "SELECT * FROM account_types;";
	$account_types = query($sql);

	render("../templates/login_form.php", ["account_types"=>$account_types] ,true);
?>

