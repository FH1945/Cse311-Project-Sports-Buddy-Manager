<?php
include('session.php');
$connection = new mysqli("localhost", "root", "", "tempproject");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="CSS/Home.css">
<link rel="icon" href="picture/logo.png">

</head>
<body>

<div class="topnav">
  <a href="home.php">
    <img src="picture/logo.png"  style="width:92px;height: 25px;">
  </a>
  <a class="active" href="Home.php">Home</a>
  <a href="Message.php">Messages</a>
  <a href="request.php">Buddies</a>
  <a href="dashboard.php">Contact</a>
  <a href="#about">About</a>
</div>



<div class="split">
  <div class="column1">
    <div class="home_profile" style="text-align: center; margin-top: 60px;">

      <h2><?php echo $login_session; ?></h2>

      <div class="userimg">
        <img src="picture/newuser.jpg" >
      </div>
       <a href="profilepage.php"><input type="button" class="btn" name="update" value="Edit Info"></a>
      <a href="scheduledate.php"><input type="button" class="btn" name="timeslot" value="Timeslot"></a>
      <a href="logout.php"><input type="button" class="btn" name="logout" value="Log Out"></a>

      
    </div>
  </div>




  <div class="column2" style="background-color:#fff;">
    <p class="dt"><b>Date: <span id="date"></span></b></p>
    <script>
      var date = new Date();
      document.getElementById("date").innerHTML = date.toLocaleDateString();
    </script>
    <div class="box">
      <div class="header">
        <h3>Simple Search</h3>
      </div>
        <div class="row" >
          <form action="Home.php" method="POST">
  
            <tr>
              <td>
                <b>Sports :</b>
              </td>
              <td>
              <select name="sports">
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
          <br>

          <tr>
            <td>
              <b>Times :</b>
            </td>
            <td>
              <select name="times" >
                <option selected hidden value=" ">Times</option>
                <option value="09:00:00">09:00:00</option>
                <option value="10:00:00">10:00:00</option>
                <option value="11:00:00">11:00:00</option>
                <option value="12:00:00">12:00:00</option>
                <option value="13:00:00">13:00:00</option>
                <option value="14:00:00">14:00:00</option>
                <option value="15:00:00">15:00:00</option>
                <option value="16:00:00">16:00:00</option>
                <option value="17:00:00">17:00:00</option>
              </select>
 
              
 
            </td>

           
          </tr>
          <br>
          <tr>
            <td>
              <b>Dates   :</b>
            </td>
            <td>
              <input type="date" id="myDate" name="date" value="Date">
            </td>

           
          </tr>
          






    <div class="footer">
   <input type="submit" name="search" value="Search Buddies" style="width:70%; padding: 5px;">

    </div>

    </form>
    </div>

    </div>

<div class="fetch_data">
   

  <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
<table id="myTable">

  <tr class="header">
    <th style="width:50%; font-size: 20px;">Name</th>
    
    <th style="width:25%; font-size: 20px;">Request</th>
    <th style="width:25%; font-size: 20px;">Message</th>
    
  </tr>
<?php

if(isset($_POST['search']))
{
  $u_index = $_SESSION['login_user']; 
  $sport = $_POST['sports'];
  $time = $_POST['times'];
  $date = $_POST['date'];

  $query= "SELECT name,nsuid FROM user WHERE nsuid IN (SELECT user_id from selected_timeslot WHERE s_date='$date' AND s_time='$time' AND s_game='$sport')";
  $result = mysqli_query($connection,$query);
  


    while($row = mysqli_fetch_assoc($result)){ 
  ?>
  <form action="Home_code.php" method="POST">
  <tr>
    <td style="width:50%;"><?= $row['name']; ?></td>
    <td style="width:25%;"><input type="submit" name="request" value="Request" style="width:100%; padding: 5px;" ></td>
    <td style="width:25%;"><input type="submit" name="message" value="Message" style="width:100%; padding: 5px;"></td>
    <td>
      <input type="hidden" name="id" value="<?= $row['nsuid']; ?>">

    </td>
    
  </tr>
  </form>
  <?php

 // if(isset($_POST['request']))
 //  {
 //    $rq2= $_POST['id'];
 //    echo \n$rq2;
 //  }  


  }} ?>

 
  
</table>
<script>
function myFunction() {
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
</div>
</body>
</html>