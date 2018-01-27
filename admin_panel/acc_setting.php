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
			
		<form action="password_change.php" method="POST">
				<br/><h2>Reset your Password</h2><br/><br/><br/>
				<input type="password" size="15" name="p1" id="p1" class="textfield" placeholder="New Password" 
					required/><br/><br/><br/>
					
                <input type="password" size="15" name="cp1" id="cp1"  class="textfield" placeholder="Confirmed Password"
					required /><br/><br/><br/>
					
					<input type="submit" value="submit" class="button"/><br/><br/> 
					
				</form>
			</div>
		</div>
	
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>