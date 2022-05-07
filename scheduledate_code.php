<?php
	include('session.php');
$u_index = $_SESSION['login_user']; 
 	$date = $_POST['sdate'];
	$time = $_POST['time'];
	$game = $_POST['games'];
	$tcount = count($time);
if(isset($_POST['resubmit']))
{
	
	for($i=0; $i<$tcount; $i++)
	{
		
		mysqli_query($connection, "INSERT INTO `selected_timeslot`(`user_id`, `s_date`, `s_time`,`s_game`) VALUES ($u_index,'$date','$time[$i]','$game')");		
	}
	header("location: scheduledate.php");
}
if(isset($_POST['continue']))
{
	for($i=0; $i<$tcount; $i++)
	{
		
		mysqli_query($connection, "INSERT INTO `selected_timeslot`(`user_id`, `s_date`, `s_time`,`s_game`) VALUES ($u_index,'$date','$time[$i]','$game')");		
	}
	header("location: Home.php");	
}
mysqli_close($connection);
?>