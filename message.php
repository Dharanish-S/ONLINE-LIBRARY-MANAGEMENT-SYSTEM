<?php
  include "connection.php";
  include "navbar.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	body
	{
		background-color: red;
		background-image:url("images/msg.png");

	}
.wrapper
{
	height: 600px;
	width:500px;
	background-color: black;
	opacity: .9;
    margin: -20px auto;
    padding: 10px;
}

.form-control
{
	height:47px; 
	width: 76%;
}
.msg
{
	height: 450px;
	overflow-y: scroll;
}
.btn-info
{
	background-color: #02c5b6;
}
.chat
{
	display: flex;
	flex-flow:row wrap;
}
.user .chatbox
{
	height: 50px;
	width: : 400px;
	padding: 13px 10px;
	background-color: red;
	border-radius: 10px;
	order: -1;
}
.admin .chatbox
{
	height: 50px;
	width: 400px;
	padding: 13px 10px;
	background-color: #423471;
	border-radius: 10px;
	
}
</style>
<body>
  
<div class="wrapper">
	<div style="height: 70px;width: 100%;background-color: #2eac8b;text-align: center;color: white;">
	<h3 style="margin-top: -5px; padding-top: 10px;">Admin</h3>

    </div>
  <div class="msg">
	<br>
    <div class="chat user">
 	    <div style="float: left;padding-top:5px; ">
 	    	&nbsp
 	    	 <?php
                        echo "<img class='img-circle profile_img' height=40 width=40 src='images/4881.jpg".$_SESSION['pic']."'>";
                        
              ?>&nbsp

 	    </div>
 	    <div style="float: left;"class="chatbox">
          <p>Hello!This is Student.</p>
 	    </div>
    </div>
    <br>
     <div class="chat admin">
 	    <div style="float: left;padding-top:5px; ">
 	    	&nbsp
 	    	 <img style="height: 40px; width: 40px; border-radius: 50%;" src="images/p.jpg">
 	    	 &nbsp

 	    </div>
 	    <div style="float: left;"class="chatbox">
          <p>Hello!This is Admin.</p>
 	    </div>
</div>
 	
 <div style="height: 100px;padding-top: 10px;">
 	   <form action="" method="post">
 		  <input type="text" name="msg" class="form-control" required="" placeholder="write message.." style="float:left">&nbsp
 		  <button class="btn btn-info btn-lg"><span class="glyphicon glyphicon-send"></span>&nbsp Send</button>
 	   </form>

   </div>
</div>
</body>
</html>














