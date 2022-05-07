<?php
	include('session.php');

$u_index = $_SESSION['login_user']; 
 
	$game = $_POST['game'];
	$gcount = count($game);
if(isset($_POST['submitf']))
{
	
	for($i=0; $i<$gcount; $i++)
	{
		
		mysqli_query($connection, "INSERT INTO game(user_id,game) VALUES($u_index,'$game[$i]')");
		header("location: Home.php");
		
	}
	
mysqli_close($connection);
}
?>