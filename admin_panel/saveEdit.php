<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Edit Doctor</title>
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
	$id=$_POST['empid'];
	$nm=$_POST['name'];
	$sp=$_POST['spec'];
	$pw=$_POST['pass'];
	$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
	$que="UPDATE doc_info SET emp_id=$id,name=\"$nm\",specialization=\"$sp\",password=\"$pw\" WHERE emp_id=$id;";
	$que_res=$mysqli->query($que);
	if($que_res) {
		echo '
			<p style="color: #00FF00;font-size:20px;">Information Updated Successfully.</p>
			<br/>
			<a href="edit_doc.php"><input type="button" title="Edit Another Profile" value="Edit More" class="button"/></a>
			&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
	} else {
		echo '
			<p style="color: #FF0000;font-size:20px;">Information could not be updated. Doctor Profile Not Found.</p>
			<br/>
			<a href="edit_doc.php"><input type="button" title="Edit Another Profile" value="Edit More" class="button"/></a>
			&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
		
	}
	
?>