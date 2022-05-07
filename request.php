<?php
include('session.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="CSS/request.css">
	<link rel="icon" href="picture/logo.png">
	<title>Request</title>
		

</head>
<body>

	<div class="topnav">
  <a href="home.php">
    <img src="picture/logo.png"  style="width:92px;height: 25px;">
  </a>
  <a  href="Home.php">Home</a>
  <a href="Message.php">Messages</a>
  <a class="active" href="request.php">Buddies</a>
  <a href="dashboard.php">Contact</a>
  <a href="#about">About</a>
	</div>

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

<form action="request_code.php" method="POST">

	<div class="create_team">
	<h3>Create A team with your Buddies & Have fun:</h3>
	<h4>(Select a game & create Team)</h4>
	<select name="Games">
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
<div class="fetch_data">
   

  <input type="text" id="myInput" onkeyup="myFunctiont()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">
  <tr class="header">
    <th style="width:50%; font-size: 20px;">Name</th>
    
    <th style="width:20%; font-size: 20px;">Dept</th>
    <th style="width:20%; font-size: 20px;">Batch</th>
    <th style="width:10%; font-size: 20px;">Team</th>
    
  </tr>
<?php
  $u_index = $_SESSION['login_user']; 
  

  $query= "SELECT name,Department,Semester FROM user WHERE nsuid IN (SELECT req_from FROM request WHERE req_to='$u_index' AND status='accepted')";
  $result = mysqli_query($connection,$query);
 
    while($row = mysqli_fetch_assoc($result)){ 
  ?>
  <tr>
    <td style="width:50%;"><?= $row['name']; ?></td>
    <td style="width:20%;"><?= $row['Department']; ?></td>
    <td style="width:20%;"><?= $row['Semester']; ?></td>
    <td style="width:10%;"><input type="checkbox" name="member[]" value="<?= $row['nsuid']; ?>" style="margin-left: 20px;"></td>
    <td>
      <input type="hidden" name="id" value="<?= $row['nsuid']; ?>">

    </td>
    
  </tr>
 
  <?php

  } ?>

 
  
</table>
<script>
function myFunctiont() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

</div>
</div>

   <input id="createteam" type="submit" name="create" value="create_team">
</div>
</form>



	<div class="column3">
		<p class="dt"><b>Date: <span id="date"></span></b></p>
    <script>
      var date = new Date();
      document.getElementById("date").innerHTML = date.toLocaleDateString();
    </script>
  		<div class="requests">
  			<h2> Requests: </h2>  
  		<div class="request_status"> 
  		<table id="reqTable">
    		<tr class="rheader">
    			<th style="width:50%; font-size: 20px;">Name</th>
   				<th style="width:25%; font-size: 20px;">Accept</th>
    			<th style="width:25%; font-size: 20px;">Reject</th>
    		</tr>
<?php
	$u_index = $_SESSION['login_user']; 
  $query= "SELECT name,nsuid from user where nsuid IN(SELECT req_from FROM `request` WHERE req_to='$u_index' AND status='pending')";
  $result = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($result)){ 
  ?>
  <form action="request_code.php" method="POST">
    
    		<tr>
        		<td style="width:50%;"><?= $row['name']; ?></td>
        		<td style="width:25%;"><input id="accept" type="submit" name="accept" value="Accept" style="width:100%; padding: 5px;"></td>
        		<td style="width:25%;"><input id="reject" type="submit" name="reject" value="Reject" style="width:100%; padding: 5px;"></td>
    			<td>
      			<input type="hidden" name="id" value="<?= $row['nsuid']; ?>">
    			</td>
    
      		</tr>
 
  </form>
  <?php

  } ?>
  </table>
	<script>
		function myFunction() {
  		var filter, table, tr, td, i, txtValue;

  		filter = input.value.toUpperCase();
  		table = document.getElementById("reqTable");
  		tr = table.getElementsByTagName("tr");
  		for (i = 0; i < tr.length; i++) {
    		td = tr[i].getElementsByTagName("td")[0];
    			if (td) {
      				txtValue = td.textContent || td.innerText;
      			if (txtValue.toUpperCase().indexOf(filter) > -1) {
        			tr[i].style.display = "";
      			} else {
        			tr[i].style.display = "none";
      			}
    			}       
  			}
		}
	</script>
</div>
</div>
</div>  

</body>
</html>