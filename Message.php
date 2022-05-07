<?php
include('database_connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
  <link rel="stylesheet" type="text/css" href="CSS/Message.css"> 
	<link rel="icon" href="picture/logo.png">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
	<div class="topnav">
  <a href="home.php">
    <img src="picture/logo.png"  style="width:92px;height: 25px;">
  </a>
  <a  href="Home.php">Home</a>
  <a class="active" href="Message.php">Messages</a>
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
      				 <a href="profilepage.php"><input type="button" class="btn" name="update" value="Edit Info"></a>
      <a href="scheduledate.php"><input type="button" class="btn" name="update" value="Timeslot"></a>
      <a href="logout.php"><input type="button" class="btn" name="logout" value="Log Out"></a>     
    	</div>	
	</div>

	<div class="column2" style="background-color: red;">
    <div class="container">
      <h2>message</h2>
      <div class="table-responsive">
        <h4>Online user</h4>
        <p> <?php echo $login_session; ?></p>
        <div id="user_details"></div>
        <div id="user_model_details"></div>
        
      </div>
      


    </div>
   
  
  </div> 
</body>
</html>

<script>
$(document).ready(function(){

 fetch_user();

 setInterval(function(){
  update_last_activity();
  fetch_user();
  update_chat_history_data();
 }, 5000);

 function fetch_user()
 {
  $.ajax({
   url:"fetch_user.php",
   method:"POST",
   success:function(data){
    $('#user_details').html(data);
   }
  })
 }

 function make_chat_dialog_box(to_user_id, to_user_name)
 {
  var modal_content = '<div id="user_dialog_'+to_user_id+'" class="user_dialog" title="You have chat with '+to_user_name+'">';
  modal_content += '<div style="height:400px; border:1px solid #ccc; overflow-y: scroll; margin-bottom:24px; padding:16px;" class="chat_history" data-touserid="'+to_user_id+'" id="chat_history_'+to_user_id+'">';
  modal_content += fetch_user_chat_history(to_user_id);
  modal_content += '</div>';
  modal_content += '<div class="form-group">';
  modal_content += '<textarea style="resize:none;"name="chat_message_'+to_user_id+'" id="chat_message_'+to_user_id+'" class="form-control"></textarea>';
  modal_content += '</div><div class="form-group" align="right">';
  modal_content+= '<button type="button" name="send_chat" id="'+to_user_id+'" class="btn btn-info send_chat">Send</button></div></div>';
  $('#user_model_details').html(modal_content);
 }

 $(document).on('click', '.start_chat', function(){
  var to_user_id = $(this).data('touserid');
  var to_user_name = $(this).data('tousername');
  make_chat_dialog_box(to_user_id, to_user_name);
  $("#user_dialog_"+to_user_id).dialog({
   autoOpen:false,
   width:400
  });
  $('#user_dialog_'+to_user_id).dialog('open');
 });

 $(document).on('click', '.send_chat', function(){
  var to_user_id = $(this).attr('id');
  var chat_message = $('#chat_message_'+to_user_id).val();
  $.ajax({
   url:"insert_chat.php",
   method:"POST",
   data:{to_user_id:to_user_id, chat_message:chat_message},
   success:function(data)
   {
    $('#chat_message_'+to_user_id).val('');
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 });

 function fetch_user_chat_history(to_user_id)
 {
  $.ajax({
   url:"fetch_user_chat_history.php",
   method:"POST",
   data:{to_user_id:to_user_id},
   success:function(data){
    $('#chat_history_'+to_user_id).html(data);
   }
  })
 }

 function update_chat_history_data()
 {
  $('.chat_history').each(function(){
   var to_user_id = $(this).data('touserid');
   fetch_user_chat_history(to_user_id);
  });
 }

 $(document).on('click', '.ui-button-icon', function(){
  $('.user_dialog').dialog('destroy').remove();
 });

});
</script>