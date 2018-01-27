<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Edit_Doc</title>
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
		<div>
			<br/><p style="font-size:20px;"><strong>Edit Profile Below:</strong></p><br/>
			<form action="saveEdit.php" method="POST">
			<table border="0" cellspacing="0" cellpadding="10" class="tableview">
				<tr>
					<th style="font-size: 16px">Employee ID</th><th style="font-size: 16px">Name</th><th style="font-size: 16px">Specialization</th><th style="font-size: 16px">Password</th>
				</tr>
				<?php
					$id=$_POST['eid'];
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$doc_que=$mysqli->query("SELECT emp_id,name,specialization,password FROM doc_info WHERE emp_id=$id;");
					while($docarr=$doc_que->fetch_row()) {
						echo '<tr bgcolor="#E0E0E0">';
						echo "<td><input type='text' name='empid' value=\"$docarr[0]\" class='addtext'/></td><td><input type='text' name='name' class='addtext' value=\"$docarr[1]\"/></td><td><input type='text' class='addtext' name='spec' value=\"$docarr[2]\"/></td><td><input type='text' class='addtext' name='pass' value=\"$docarr[3]\"/></td></tr>";
					}
					$mysqli->close();
				?>
			</table>
			<br/><input type="submit" value="Save" class="button"/>
			</form>
		</div>
		<br/>
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>