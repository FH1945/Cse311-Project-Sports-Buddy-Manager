<?php
include('session.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<link rel="icon" href="picture/logo.png">
	<link rel="stylesheet" type="text/css" href="CSS/schedule.css">

</head>
<body>
	<div class="column1">
		<div class="home_profile" style="text-align: center; margin-top: 60px;">

      <h2><?php echo $login_session; ?></h2>

      <div class="userimg">
        <img src="picture/newuser.jpg" >
      </div>
      
      <a href="profilepage.php"><input type="button" class="btn" name="update" value="Edit Info"></a>
      <a href="scheduledate.php"><input type="button" class="btn" name="update" value="Timeslot"></a>
      <a href="logout.php"><input type="button" class="btn" name="logout" value="Log Out"></a>

      
    </div>
	</div>

	<div class="column2">
		<p class="dt"><b>Date: <span id="date"></span></b></p>
    <script>
      var date = new Date();
      document.getElementById("date").innerHTML = date.toLocaleDateString();
    </script>
		<div class="steps">
			<img src="picture/steps.jpg" >
		
		<a href="Home.php" style="float: right; "><input type="button" class="btn" name="skip" value="Continue.."></a>
</div>
	</div>
	
</body>
</html>