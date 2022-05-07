<?php
$name = $_POST['name'];
$id = $_POST['nsuid'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dept = $_POST['Department'];
$smstr = $_POST['Semester'];
$pass = $_POST['password'];

$connection = new mysqli("localhost", "root", "", "tempproject");
if(isset($_POST['submit']))
{
 $select = "SELECT nsuid FROM user WHERE nsuid = ? limit 1";
 $insert = "INSERT INTO user(name, nsuid, email, gender, Department, Semester) VALUES(?, ?, ?, ?, ?, ?)";
 $login = "INSERT INTO login(user_id, password) VALUES(?, ?)";
 
 $stmt = $connection->prepare($select);
 $stmt->bind_param("i", $id);
 $stmt->execute();
 $stmt->bind_result($id);
 $stmt->store_result();
 $rnum = $stmt->num_rows;

  if($rnum==0)
  {
    $stmt->close();

    $stmt = $connection->prepare($insert);
    $stmt->bind_param("sissss", $name, $id, $email, $gender, $dept, $smstr);
   //$stmt = $connection->prepare($login);
    //mysqli_query($connection,"INSERT INTO `login`(`user_id`, `password`) VALUES ('$id','$pass')");
    echo "\n$id\n $pass";
    //$stmt->bind_param("is", $id, $pass);
  $stmt->execute();
  mysqli_query($connection,"INSERT INTO `login`(`user_id`, `password`) VALUES ($id,'$pass')");
  header("location: DBMSProject.php");
  }

  else
  {
    header("location: Registration_denied.php");
    
  }
}  
  $stmt->close();
  $connection->close();


?>