<!DOCTYPE html>
<!--
* This screen is the first screen to be displayed to the admin after correct authentication.
* This screen contains links to all other features.
-->
<html>
<head>
	<title>Control Panel | JDWNRH</title>
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png"/>
	<link rel="stylesheet" type="text/css" href="controlpanel_style.css"/>
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
			<button class="dropbtn"><img src="resource/adm.png" style="width: 23px; height: 23px;"/>&ensp;Administrator</button>
				<div class="dropdown-content">
					<a href="acc_setting.php" style="vertical-align: middle"><img src="resource/settings.png" class="menu-image"/>&ensp; Account Settings</a>
					<a href="add_doc.php"><img src="resource/addoc.png" class="menu-image"/>&ensp; Add Doctor</a>
					<a href="remove_doc.php"><img src="resource/remove.png" class="menu-image"/>&ensp; Remove Doctor</a>
					<a href="edit_doc.php"><img src="resource/edit.png" class="menu-image"/>&ensp; Edit Doctor</a>
					<a href="../login.php"><img src="resource/logout.ico" class="menu-image"/>&ensp; Log Out</a>
				</div>
		</div>
	</div>
	<!-- End of Navigation Menu -->
	<!-- Push and Feedback Feature -->
	<div id="container">
		<div id="header">
			<img src="resource/jdwnrh_logo.png" id="logocss"/><br/><br/>
			<a href="notif.php"><input type="button" value="Push News" title="Push a News/Notification to App Users" class="buttonHead"/></a>&ensp;&ensp;<a href="feedback.php"><input type="button" value="View Feedback" title="View Feedback from App users" class="buttonHead"/></a><br/><br/>
			<h1><u>Doctor Control Panel</u></h1><br/>
		</div>
		
		<div id="doctorlistview">
			<table border="0" cellspacing="0" cellpadding="10" class="tableview">
				<tr>
					<th>Sl No.</th><th>Employee ID</th><th>Name</th><th>Specialization</th><th>Status</th><th>Till</th><th>Remarks</th>
				</tr>
				<?php
				//Retrieving from Database and displaying to users...
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$doc_que=$mysqli->query("SELECT emp_id,name,specialization,status,till,remarks FROM doc_info order by name");
					$sl_no=1;
					$sts="";
					while($docarr=$doc_que->fetch_row()) {
						if($sl_no%2==0)
							echo '<tr bgcolor="#C0C0C0">';
						else
							echo '<tr bgcolor="#FFFFFF">';
						
						if($docarr[3]==0) {
							$sts="OUT";
							echo '<td>'.$sl_no.'</td><td>'.$docarr[0].'</td><td>'.$docarr[1].'</td><td>'.$docarr[2].'</td><td style="color:#F00"><input type="checkbox" class="statuscheck"/>&ensp;'.$sts.'</td><td>'.$docarr[4].'</td><td>'.$docarr[5].'</td></tr>';					
						} else {
							$sts="IN";
							echo '<td>'.$sl_no.'</td><td>'.$docarr[0].'</td><td>'.$docarr[1].'</td><td>'.$docarr[2].'</td><td style="color:#0F0"><input type="checkbox" class="statuscheck" checked/>&ensp;'.$sts.'</td><td>'.$docarr[4].'</td><td>'.$docarr[5].'</td></tr>';					
						}		
						$sl_no++; //For Increment of serial number
					}
					$mysqli->close();
				?>
			</table>
			<br/><br/><input type="submit" title="Update Database" value="Update" class="buttonHead"/><br/><br/>
		</div>
	</div>			
	<address id="footer">
		<br/><br/><p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
	</address>
</body>
</html>