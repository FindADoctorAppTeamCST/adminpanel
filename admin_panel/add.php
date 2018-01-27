<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Add_Doc</title>
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
				$id=$_POST['eid'];
				$nm=$_POST['name'];
				$sp=$_POST['spe'];
				$pa=$_POST['pass'];
				$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
				$que="INSERT INTO doc_info VALUES(\"$id\",\"$nm\",1,\"NULL\",\"NULL\",\"$pa\",\"$sp\");";
				$que_res=$mysqli->query($que);
				if($que_res) {
					echo '
						<p style="color: #00FF00;font-size:20px;">Doctor Added Successfully...</p>
						<br/>
						<a href="add_doc.php"><input type="button" title="Add Another Profile" value="Add More" class="button"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
				} else {
					echo '
						<p style="color: #FF0000;font-size:20px;">Failed to Add. Doctor Already Exists.</p>
						<br/>
						<a href="add_doc.php"><input type="button" title="Add Another Profile" value="Add More" class="button"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
				}
			?>
		</div>
	
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>




