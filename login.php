<?php

	session_start();
	if(isset($_POST['login']))
	{
		if(empty($_POST['username']) || empty($_POST['password']))
			{ echo "Username or Password Is invalid";
			}
	else
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
	$connection = new mysqli("localhost", "root", "", "tempproject");

	$query = "SELECT user_id,password FROM login WHERE user_id = ? AND password = ? LIMIT 1";
	
	$stmt = $connection->prepare($query);
	$stmt->bind_param("is", $username, $password);
	$stmt->execute();
	$stmt->bind_result($username,$password);
	$stmt->store_result();
	if($stmt->fetch())
	{
		
		$_SESSION['login_user']=$username;
		header("location: schedule.php");
	}
	else
	{
		echo "Wrong Username Or Password! Please Try with Valid Username or Password ..";
	}
	mysqli_close($connection);
	}
}
?>