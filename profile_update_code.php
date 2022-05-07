<?php
include('session.php');
$u_index = $_SESSION['login_user']; 
$name = $_POST['name'];
$id = $_POST['nsuid'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dept = $_POST['Department'];
$smstr = $_POST['Semester'];



$connection = new mysqli("localhost", "root", "", "tempproject");

if(isset($_POST['update_user_info']))
{
	mysqli_query($connection,"UPDATE `user` SET `name`='$name',`nsuid`=$id,`email`='$email',`gender`='$gender',`Department`='$dept',`Semester`='$smstr' WHERE nsuid=$u_index;");
	header("location: profilepage.php");
}
?>
<?php
include('session.php');
$u_index = $_SESSION['login_user'];
$pass = $_POST['pswd']; 
if(isset($_POST['update_password']))
{ 
	mysqli_query($connection, "UPDATE `login` SET `password`='$pass' WHERE user_id=$u_index;");
	header("location: profilepage.php");
}
?>