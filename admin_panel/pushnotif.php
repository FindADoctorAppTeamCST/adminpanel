<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Notification</title>
	<link rel="stylesheet" type="text/css" href="menu_doc.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
	</head>
	<body>
		<div id="firstheader">
		</div>
		
		<div id="container">
			<div id="header">
					<img src="resource/jdwnrh_logo.png" height="175" width="175">
			</div>
			
		</div>
		<div id="header1">
		<h2>Jigme Dorji Wangchuck National Referral Hospital</h2>
		</div>
		<div id="content">
		<?php
				$sub=$_POST['subject'];
				$mes=$_POST['message'];
				$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
				$que="INSERT INTO notif VALUES(NULL,\"$sub\",\"$mes\");";
				$que_res=$mysqli->query($que);
				if($que_res) {
					echo '
						<h2 style="color: #00FF00;font-size:20px;">Successful. News has been Broadcasted.</h2>
						<br/>
						<a href="notif.php"><input type="button" title="Push another Notification" value="Push Again" class="button"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
				} else {
					echo '
						<h2 style="color: #FF0000;font-size:20px;">Failed to Push. Try Again Later.</h2>
						<br/>
						<a href="notif.php"><input type="button" title="Push another Notification" value="Push Again" class="button"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';				}
			?>
		
		</div>
		<br/><br/>
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>