<?php
include('session.php');
$u_index = $_SESSION['login_user']; 
 if(isset($_POST['accept']))
  {
    $accept= $_POST['id'];
    mysqli_query($connection,"UPDATE `request` SET `status`='accepted' WHERE req_from= '$accept' AND req_to='$u_index'");
    header("location: request.php");
    
  } 
  if(isset($_POST['reject']))
  {
    $reject= $_POST['id'];
    mysqli_query($connection,"UPDATE `request` SET `status`='rejected' WHERE req_from= '$accept' AND req_to='$u_index'");
    header("location: request.php");
  } 
mysqli_close($connection);

?>

<?php

if(isset($_POST['create']))
{
	$gameteam = $_POST['Games'];
	mysqli_query($connection,"INSERT INTO `team`(`interested_game`) VALUES ('$gameteam')");
	$query = mysqli_query($connection,"select team_id from team order by team_id DESC limit 1");
	$team_id = mysqli_fetch($query);
	echo $team_id;
	$member = $_POST['member'];
	$member_count = count($member);
	for($i=0; $i<$member_count; $i++)
	{
		
	}

}
?>
