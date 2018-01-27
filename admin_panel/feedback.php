<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Feedback</title>
	<link rel="stylesheet" type="text/css" href="menu_doc.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
	<link rel="stylesheet" type="text/css" href="controlpanel_style.css"/>
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
		<br/>
		<h2>Feedback from App Users</h2><br/>
		</div>
		<div id="doctorlistview" style="text-align:center">
		<center>
			<table border="0" cellspacing="0" cellpadding="10" class="tableview" style="margin-left: 100px">
				<tr>
					<th>Sl No.</th><th>Feedback ID</th><th>Feedback Message</th>
				</tr>
				<?php
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$doc_que=$mysqli->query("SELECT fid,feed_mess FROM feedback;");
					$sl_no=1;
					$sts="";
					while($docarr=$doc_que->fetch_row()) {
						if($sl_no%2==0)
							echo '<tr bgcolor="#E0E0E0">';
						else
							echo '<tr bgcolor="#FFFFFF">';
						
							echo '<td>'.$sl_no.'</td><td>'.$docarr[0].'</td><td>'.$docarr[1].'</td></tr>';					
						$sl_no++;
					}
					$mysqli->close();
				?>
			</table>
			</center>
		</div>
		<br/><br/>
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>