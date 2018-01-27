<?php
session_start();
?>
<!DOCTYPE html>
<!-- 
* The main login screen.
* Fields cannot be left empty.
* Upon Wrong credentials entry, the admin would be notified and given the option to change the password.
* The admin would be asked two questions (Hardcoded for now), and upon correct answer for both the questions, the admin would be redirected to change password screen.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Find A Doctor | Admin Login</title>
    
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
</head>
 <body>
		<div id="firstheader"></div>
		<div id="container">
		
			<div>
					<img src="resource/logo1.png" id="logo1" >
					<img src="resource/logo2.png" id="logo2" >
					<img src="resource/logo3.png" id="logo3" >
			</div>

			<div id="content">
			
				<form action="verifyadmin.php" method="POST" name="loginform">
				<!--Links to script to verify user -->
					<br/>
					
					<h2>Administrator</h2>
					<br/><br/>
						<input type="text" size="15" name="username" id="username" class="textfield" placeholder="Username" title="Enter your Employee ID"
						required/><br/><br/>
						
						<input type="password" size="15" name="password" id="password"  class="textfield" placeholder="Password" title="Enter your Password"
						required /><br/><br/>

						<input type="checkbox" id="check"/> <span id="remusr">Remember Username</span> <br/><br/> 
						<input type="submit" value="Log In" class="butto" title="Login to Control Panel"/><br/><br/> 	
				</form>
			</div>
		</div>
	
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>