<!DOCTYPE html>
<html>
	<head>
	<title>New Password Setting</title>
        <link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
	</head>
	<body>
		<div id="firstheader">
		</div>
		
		<div id="container">
			<div id="header">
					<img src="resource/jdwnrh_logo.png" height="175" width="175">
			</div>

			<div id="content">
			
				<?php
					$upass=$_POST['p1'];
					$cupass=$_POST['cp1'];
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$que="UPDATE admin_info SET password=\"$upass\" WHERE adm_id=122333;";
					if($upass==$cupass) {
						$que_res=$mysqli->query($que);
						if($que_res) {
							echo '
								<p style="color: #00FF00;font-size:20px;">Password Updated Successfully.</p>
								<br/>
								<a href="../login.php"><input type="button" title="Goto Login Page" value="Go to Login Page" class="button"/></a>';
						} else {
							echo '
								<p style="color: #FF0000;font-size:20px;">Error Updating Password. Try again Later.</p>
								<br/>
								<a href="../login.php"><input type="button" title="Goto Login Page" value="Go to Login Page" class="button"/></a>';
						}		
					} else {
						echo '
						<p style="color: #FF0000;font-size:20px;">Password Mismatch. Try Again.</p>
						<br/>
						<a href="acc_setting.php"><input type="button" title="Goto Account Settings Page" value="Account Settings" class="button"/></a>';
					}
				?>				
				
			</div>
		</div>
	
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>


