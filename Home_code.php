<?php
include('session.php');
$u_index = $_SESSION['login_user']; 
 if(isset($_POST['request']))
  {
    $rq2= $_POST['id'];
    mysqli_query($connection,"INSERT INTO `request`(`req_from`, `req_to`, `status`) VALUES ($u_index,$rq2,'pending')");
    header ("location: Home.php");
  }  

?>
