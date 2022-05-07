<?php

//insert_chat.php

include('session.php');

session_start();

$data = array(
 ':to_user_id'  => $_POST['To_user'],
 ':from_user_id'  => $_SESSION['From_user'],
 ':chat_message'  => $_POST['message'],
 ':status'   => '1'
);

$query = "
INSERT INTO message
(To_user, From_user,message, status_of)
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo fetch_user_chat_history($_SESSION['login_user'], $_POST['To_user'], $connect);
}

?>
