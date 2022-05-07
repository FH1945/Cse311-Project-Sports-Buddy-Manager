<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<style>
*{
  margin: 0;
  padding: 0;
  font-family: cursive;
}
body{background-color: DarkSlateGrey;}
ul{
  float: right;
  list-style-type: none;
  margin-top: 25px;
}
ul li{
  display: inline-block;
}
ul li a{
  text-decoration: none;
  color: #fff;
  padding: 5px 20px;
  border: 1px solid transparent;
}
ul li a:hover{
  background-color: yellow;
  color:#000;
}
ul li.active a{
  background-color: yellow;
  color:#000;
}
.logo img{
  position: sticky;
  margin-left: 50px;
  margin-top: 10px;
  float: left;
  width: 200px;
  height: auto;
}
.main{
  float: top;
  max-width: 1200px;
  margin: auto;
}


	</style>
</head>
<body>

	<div class="main">
      <div class="logo">
        <img src="logo.png">
      </div>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Friends</a></li>
        <li><a href="timeslot.php">Slots</a></li>
        <li><a href="DBMSProject.php">Sign Up</a></li>
        <li><a href="#">Requests</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>
</body>
</html>
