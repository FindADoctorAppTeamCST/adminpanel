<?php 
/*
* It gets the doctor name and id from remove _doc .php and deletes the doctor profile from the database.
* Displays error and success message according to the scenario of the execution of the query

*/
	include('resource/design.php');

	head("Remove Profile");
?>
		<div id="content">
		    <?php
			$id=$_POST['eid'];
			$nm=$_POST['name'];
			$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
			$que="DELETE FROM doc_info WHERE emp_id=$id;";
			$que_res=$mysqli->query($que);
			if($que_res) {
				echo '
					<p style="color: #00FF00;font-size:1.5vw;">Doctor Deleted Successfully...</p>
					<br/>
					<a href="remove_doc.php"><input type="button" title="Delete Another Profile" value="Delete More" class="butto"/></a>
					&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="button"/></a>';
				} else {
					echo '
						<p style="color: #FF0000;font-size:1.5vw;">Failed to Delete. Doctor Profile does not Exists.</p>
						<br/>
						<a href="remove_doc.php"><input type="button" title="Delete Another Profile" value="Delete More" class="butto"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';				}
			?>			
		</div>
<?php foot(); ?>