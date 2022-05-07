<?php
include('session.php');
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <title>update_information</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>

  .userimg {

    position: center;
    width: 100%;

    background: #9ACD32;

  }
.img{
  width: 100;
  height: 20px;
}

  </style>


</head>

<body>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="#">
    <img src="picture/logo.png" alt="logo" style="width:150px;height: 60px;">
  </a>
  <div class="collapse navbar-collapse" id="collapsibleNavbar" >

    <ul class="navbar-nav">

      <li class="nav-item">

        <a class="nav-link" href="Message.php">Messages</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="Home.php"><b>Home</b></a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="help.php">Help</a>

      </li>    

    </ul>

  </div>  

</nav>

​

<div class="container" style="margin-top:30px">

  <div class="row">

    <div class="col-sm-3">

      <h2><?php echo $login_session; ?></h2>

      <div class="userimg">
        <img src="picture/newuser.jpg" >
      </div>
       <a href="profilepage.php"><input type="button" class="btn btn-info" name="update" value="Edit Info" style="width: 100%"></a><br><br>
      <a href="scheduledate.php"><input type="button" class="btn btn-info" name="update" value="Timeslot" style="width: 100%"></a><br><br>
      <a href="logout.php"><input type="button" class="btn btn-info" name="logout" value="Log Out" style="width: 100%"></a>

      <hr class="d-sm-none">
    </div>
    <div class="col-sm-9">
      <h2><b>My Profile</b></h2>
      <br>
      <h3><i>Required Information</i></h3>
      <p>*Only these fields will be visible to other members.</p>
      <div class="container">
  <form action="profile_update_code.php" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="nsuid">NSU ID:</label>
      <input type="number" class="form-control" id="nsuid" placeholder="Enter NSU ID" name="nsuid">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

      <div class="form-group">
      <label for="gender">Gender:</label>
      <select class="form-control" id="dept" name="gender">
                <option selected hidden value=" ">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                
      </select>
      </div>

     <div class="form-group">
      <label for="dept">Department:</label>
      <select class="form-control" id="dept" name="Department">
                <option selected hidden value=" ">Select Department</option>
                <option value="Arch">ARCH</option>
                <option value="BBA">BBA</option>
                <option value="DBM">DBM</option>
                <option value="DMP">DMP</option>
                <option value="DPH">DPH</option>
                <option value="ECE">ECE</option>
                <option value="ENV">ENV</option>
                <option value="LAW">LAW</option>
                <option value="ENG">ENG</option>
                <option value="Pharma">Pharma</option>
      </select>
      </div>

      <div class="form-group">
      <label for="semester">Semester:</label>
      <select class="form-control" id="semester" name="Semester">
                <option selected hidden value=" ">Select Semester</option>
                <option value="161">161</option>
                <option value="162">162</option>
                <option value="163">163</option>
                <option value="171">171</option>
                <option value="172">172</option>
                <option value="173">173</option>
                <option value="181">181</option>
                <option value="182">182</option>
                <option value="183">183</option>
                <option value="191">191</option>
                <option value="192">192</option>
                <option value="193">193</option>
                <option value="201">201</option>
                <option value="202">202</option>
      </select>
      </div>
 
    <button type="submit" class="btn btn-primary" name="update_user_info">Update Information</button>
  </form>
</div>
<br><br>
<form action="profile_update_code.php" method="POST">
      <h3> Change Password :</h3>
      <div class="form-group"> 
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <button type="submit" class="btn btn-primary" name="update_password">Save Changes</button>
  </form>
    </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>All reserved by sports person founder @ NSU</p>
</div>

</body>
</html>

      

