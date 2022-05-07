<?php


$connection = new mysqli("localhost", "root", "", "lasttry");
session_start();
$u_index = $_SESSION['login_user']; 

    
	$game = $_POST['game'];
	$gcount = count($game);
echo $gcount;
if(isset($_POST['submitf']))
{
	
	for($i=0; $i<$gcount; $i++)
	{
		
		mysqli_query($connection, "INSERT INTO game(user_id,game) VALUES($u_index,'$game[$i]')");
		
	}
	
mysqli_close($connection);
}

?>