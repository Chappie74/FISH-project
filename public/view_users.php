<?php 
	
	require("../includes/config.php");
	if(isset($_GET["user_id"]) && $_SESSION["account_type"] == "admin")
	{
		$user_id = $_GET["user_id"];
		query("DELETE FROM users WHERE user_id = ?", $user_id);
		redirect("view_users.php");
	}
	else if($_SESSION["account_type"] == "admin")
	{
		$rows = query("SELECT * FROM users ORDER BY account_type;");
		render("../templates/view_users_t.php", ["items"=>$rows]);
	}
	else
	{
		redirect("index.php");
	}

?>