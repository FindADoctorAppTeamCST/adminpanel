<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Account Settings</title>
	
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
</head>
 <body>
		<?php 
/*
* This file lets the admin reset the account password
* Sends the new password to password_change.php
*/
	include('resource/design.php');  //including the page header and footer source

	head("Account Settings");
?>			
	<div id="content">
		<form action="password_change.php" method="POST">
			<br/><h2>Reset your Password</h2><br/>
			<table cellspacing="5">
				<tr>
					<td class="td"><label class="lab">New Password:</label></td>
					<td><input type="password" size="15" name="p1" required class="addtext" value="" id="myInput"> </td>
					
				</tr>
				<tr>
					<td class="td"><label class="lab">Confirmed Password:</label></td>
					<td><input type="password" size="15" name="cp1" required class="addtext" value="" id="myInput"></td>
					
				</tr>
			</table>	
			
			<br/><input type="checkbox" onclick="myFunction()" id="check"><span id="showpass"> Show Password </span></br>
			<br/><input type="submit" value="Submit" class="butto"/><br/><br/>
			<!-- uses POST method to send the data  to the server for verification -->
		</form>
		<script>
				function myFunction() {
					var x = document.getElementById("myInput");
				if (x.type === "password") {
				x.type = "text";
				} else {
				x.type = "password";
				}
				}
			</script>
	</div>
<?php foot(); ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>