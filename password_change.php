<?php 
/*
* It gets the new password from account_settings.php and updates the current password with the new password
* It provides the user with a success or error message depending on the operation
*/
	include('resource/design.php');

	head("Account Settings");
?>
	<div id="content">
		<?php
			$upass=$_POST['p1'];
			$cupass=$_POST['cp1'];
			$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
			$que="UPDATE admin_info SET password=\"$upass\" WHERE adm_id=122333;";
			if($upass==$cupass) { //It updates the password if the password and confirm password fields match with each other
				$que_res=$mysqli->query($que);
				if($que_res) {
					echo '
						<p style="color: #00FF00;font-size:1.5vw;">Password Updated Successfully.</p>
						<br/>
						<a href="login.php"><input type="button" title="Goto Login Page" value="Go to Login Page" class="butto"/></a>';
				} else {
					echo '
						<p style="color: #FF0000;font-size:1.5vw;">Error Updating Password. Try again Later.</p>
						<br/>
						<a href="login.php"><input type="button" title="Goto Login Page" value="Go to Login Page" class="butto"/></a>';
				}		
			} else { //It echoes error if the password and confirm password fields do not match with each other
				echo '
				<p style="color: #FF0000;font-size:1.5vw;">Password Mismatch. Try Again.</p>
				<br/>
				<a href="acc_setting.php"><input type="button" title="Goto Account Settings Page" value="Account Settings" class="butto"/></a>';
			}
		?>				
	</div>
<?php foot(); ?>
