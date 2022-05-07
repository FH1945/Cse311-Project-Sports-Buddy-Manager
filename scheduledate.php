<?php
include('session.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>Schedule</title>
	<link rel="icon" href="picture/logo.png">
	<link rel="stylesheet" type="text/css" href="CSS/scheduledate.css">

</head>
<body>
	<div class="topnav">
  <a href="home.php">
    <img src="picture/logo.png"  style="width:92px;height: 25px;">
  </a>
  <a href="Home.php">Home</a>
  <a href="Message.php">Messages</a>
  <a href="request.php">Buddies</a>
  <a href="dashboard.php">Contact</a>
  <a href="#about">About</a>
</div>

	<div class="column1">
		<div class="home_profile" style="text-align: center; margin-top: 60px;">

      <h2><?php echo $login_session; ?></h2>

      <div class="userimg">
        <img src="picture/newuser.jpg" >
      </div>
      <a href="logout.php"><input type="button" class="btn" name="logout" value="Log Out"></a>
      <a href="profilepage.php"><input type="button" class="btn" name="update" value="Edit Info"></a>

      
    </div>
	</div>

	<div class="column2">
		<p class="dt"><b>Date: <span id="date"></span></b></p>
    <script>
      var date = new Date();
      document.getElementById("date").innerHTML = date.toLocaleDateString();
    </script>
		
    	<?php 
    		$query=mysqli_query($connection,"SELECT date FROM `available_timeslot` ORDER BY date DESC limit 1 ");
    		$date=mysqli_fetch_assoc($query);
    		$max_date=$date['date'];
    	 ?>
    	<form action="scheduledate_code.php" method="POST">
		<p class="availabletime">Select a Date,Game &<br> choose available time's:</p>
		<b>Date :</b><input type="date"  id="selectdate" name="sdate" value="Select Date..." max="<?php $max_date; ?>" min="2020-05-02">
		<tr class="availablegame">
              <td>
                <b>Game :</b>
              </td>
              <td>
              <select name="games">
                <option selected hidden value=" ">Sports</option>
                <option value="CRICKET">CRICKET</option>
                <option value="FOOTBALL">FOOTBALL</option>
                <option value="BASKETBALL">BASKETBALL</option>
                <option value="BADMINTON">BADMINTON</option>
                <option value="CHESS">CHESS</option>
                <option value="BILLIARD">BILLIARD</option>
                <option value="TABLE TENNIS">TABLE TENNIS</option>
                <option value="CAROM">CAROM</option>
              </select>
 
              
 
              </td>

           
          </tr>
		<div class="checkboxes">
		

	<div class="wrapper_timeslot">
		<div class="title">
			Select Your Free time slot's to Play!
		</div>

		<div class="container">
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="09:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">09:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="10:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">10:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="11:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">11:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="12:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">12:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="13:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">13:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="14:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">14:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="15:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">15:00:00</div>	
				</div>	
			</label>
			<label class="option_item">
				<input type="checkbox" class="checkbox" name="time[]" value="16:00:00">
				<div class="option_inner">
					<div class="tickmark"></div>
					<div class="icon"></div>
					<div class="name">16:00:00</div>	
				</div>	
			</label>


		</div>	
	</div>
	
	<div class="button">
		
		<input type="submit" name="resubmit" value="Register your Available Times for other days :)">
		<input type="submit" id="continue" name="continue" value="Continue->">
	</div>
	</form>


</div>
</div>
</body>
</html>