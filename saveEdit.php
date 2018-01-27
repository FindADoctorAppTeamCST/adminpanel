<?php /*
* It saves the updated value by the admin to the database.
* gets the values from edit.php where the admin has edited the values
*/
	
	include('resource/design.php');

	head("Edit Profile");
?>
	<div id="content">
		<?php
			$id=$_POST['empid'];
			$nm=$_POST['name'];
			$d=$_POST['dep'];
			$de=$_POST['des'];
			$pw=$_POST['pass'];
			$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
			$que="UPDATE doc_info SET emp_id=$id,name=\"$nm\",department=\"$d\",designation=\"$de\",password=\"$pw\" WHERE emp_id=$id;";
			$que_res=$mysqli->query($que);
			if($que_res) {
				echo '
					<p style="color: #00FF00;font-size:1.2vw;">Information Updated Successfully.</p>
					<br/>
					<a href="edit_doc.php"><input type="button" title="Edit Another Profile" value="Edit More" class="butto"/></a>
					&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';
			} else {
				echo '
					<p style="color: #FF0000;font-size:1.2vw;">Information could not be updated. Doctor Profile Not Found.</p>
					<br/>
					<a href="edit_doc.php"><input type="button" title="Edit Another Profile" value="Edit More" class="butto"/></a>
					&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';
			}
?>