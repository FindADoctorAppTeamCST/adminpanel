<?php 
/*
* Gets the subject and message form notif.php and stores it in the database
*/
	include('resource/design.php');

	head("Push News");
?>
		<div id="content">
		<?php
				$sub=$_POST['subject'];
				$mes=$_POST['message'];
				$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
				$que="INSERT INTO notif VALUES(NULL,\"$sub\",\"$mes\");";
				$que_res=$mysqli->query($que);
				if($que_res) { //Displays success message if the news could be pushed
					echo '
						<h2 style="color: #00FF00;font-size:20px;">Successful. News has been Broadcasted.</h2>
						<br/>
						<a href="notif.php"><input type="button" title="Push another Notification" value="Push Again" class="butto"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';
				} else { //Displays error message if the news could not be pushed
					echo '
						<h2 style="color: #FF0000;font-size:20px;">Failed to Push. Try Again Later.</h2>
						<br/>
						<a href="notif.php"><input type="button" title="Push another Notification" value="Push Again" class="butto"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';				}
			?>
		
		</div>
<?php foot(); ?>