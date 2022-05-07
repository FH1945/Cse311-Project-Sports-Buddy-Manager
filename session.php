<?php

$connection = new mysqli("localhost", "root", "", "tempproject");

session_start();

$user_check = $_SESSION['login_user'];

$query = "SELECT name FROM user WHERE nsuid = '$user_check' ";
$ses_sql = mysqli_query($connection,$query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['name'];

?>