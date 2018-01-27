<?php

session_start();

if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}
?>
<!DOCTYPE html>
<!--
* This screen is the first screen to be displayed to the admin after correct authentication.
* This screen contains links to all other features.
* The admin can directly change the available status and remarks of doctor from this page directly
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

	<script language="Javascript" type="text/javascript">
		function tickBox() {
			document.getElementById("l"+document.getElementsByTagName('input').id).innerHTML="IN";
		}
	</script>
	<style type="text/css">
		td {
			color: #000;
		}
		th{
			font-size: 24px;
		}
	</style>
</head>
<body>
<!-- Header Design html code goes here... -->
	<div id="firstheader">
		<div class="adminmenu">
			<button class="dropbtn" style="margin-left:35vw;"><img src="resource/adm.png" style="width: 1.5vw; height:1.5vw; " />&ensp;Administrator</button>
				<div class="dropdown-content">
					<a href="acc_setting.php" style="vertical-align: middle"><img src="resource/settings.png" class="menu-image"/>&ensp; Account Settings</a>
					<a href="add_doc.php"><img src="resource/addoc.png" class="menu-image"/>&ensp; Add Doctor</a>
					<a href="remove_doc.php"><img src="resource/remove.png" class="menu-image"/>&ensp; Remove Doctor</a>
					<a href="edit_doc.php"><img src="resource/edit.png" class="menu-image"/>&ensp; Edit Doctor</a>
					<a href="logout.php?logout1"><img src="resource/logout.ico" class="menu-image"/>&ensp; Log Out</a>
				</div>
		</div>
	</div>
	<!-- End of Navigation Menu -->
	<!-- Push and Feedback Feature -->
	<div id="container">
		<div id="header">
			<img src="resource/logo3.png" id="logo3" style="margin-right:15vw;"/><br/><br/>
			<a href="notif.php"><input type="button" value="Push News" title="Push a News/Notification to App Users" class="buttonHead"/></a>&ensp;&ensp;<a href="feedback.php"><input type="button" value="View Feedback" title="View Feedback from App users" class="buttonHead"/></a><br/><br/>
			<h1 style="font-size:2vw;">Doctor Control Panel</h1><br/>
		</div>
		
		<div id="doctorlistview">
			<table border="0" cellspacing="0" cellpadding="10vw" class="tableview">
				<tr>
					<th>Sl No.</th><th>Employee ID</th><th>Name</th><th>Status</th><th>Till</th><th>Department</th><th>Designation</th><th>Remarks</th>
				</tr>
				<?php
				//Retrieving from Database and displaying to users...
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$doc_que=$mysqli->query("SELECT emp_id,name,status,till,department,designation,remarks FROM doc_info order by name");
					$sl_no=1;
					$sts="";
					while($docarr=$doc_que->fetch_row()) {
						if($sl_no%2==0)
							echo '<tr bgcolor="#C0C0C0">';
						else
							echo '<tr bgcolor="#FFFFFF">';
						
						if($docarr[2]==0) {
							$sts="OUT";
							echo '<td>'.$sl_no.'</td><td>'.$docarr[0].'</td><td>'.$docarr[1].'</td><td style="color:#F00"><input type="checkbox" class="statuscheck"/>&ensp;<span>'.$sts.'</td><td>'.$docarr[3].'</td><td>'.$docarr[4].'</td><td>'.$docarr[5].'</td><td>'.$docarr[6].'</td></tr>';					
						} else {
							$sts="IN";
							echo '<td>'.$sl_no.'</td><td>'.$docarr[0].'</td><td>'.$docarr[1].'</td><td style="color:#0F0"><input type="checkbox" class="statuscheck"/>&ensp;<span>'.$sts.'</td><td>'.$docarr[3].'</td><td>'.$docarr[4].'</td><td>'.$docarr[5].'</td><td>'.$docarr[6].'</td></tr>';					
						}		
						$sl_no++; //For Increment of serial number
					}
					$mysqli->close(); 
				?>
			</table>
			<br/><input type="submit" title="Update Database" value="Update" class="butto"/>
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