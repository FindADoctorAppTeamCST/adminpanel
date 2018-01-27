<!DOCTYPE html>
<!-- 
This page gets the feedbacks from the feedback table.
The feedback table is updated by the app users using a feature in the app
The admin gets all the feedbacks in one place, and decide to take action on the feedback received.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Find A Doctor | Feedback</title>
    
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
</head>
 <body>
		<div id="firstheader"><a href='login_success.php'><img src='resource/home-button.png' style='width: 3.25vw; height:3vw; margin-left:90vw;'/></a></div></div>
		
		<div id="container">
			<div id="header">
					<img src='resource/logo3.png' height='10%' width='10%'>
			</div>
			
		</div>
		<div id="header1">
		<h2>Jigme Dorji Wangchuck National Referral Hospital</h2>
		<br/>
		<h2>Feedback from App Users</h2><br/>
		</div>
		<div id="doctorlistview" style="text-align:center">
		<center>
			<table border="0" cellspacing="0" cellpadding="10" class="tableview" style="margin-left: 5%">
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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	</body>
</html>