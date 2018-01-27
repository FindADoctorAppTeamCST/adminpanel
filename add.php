<?php 
/*
* This file gets the new doctor information from add_doc.php text fields entered by the admin
* It adds the values to the database 
* It prints out Success Message if the doctor information could be added to the database
* It prints out Error message is there was any error quering the database

*/	
	include('resource/design.php'); //including the header and footer source

	head("Add Doctor"); //getting the page header
?>
		<div id="content">
			<?php
				$id=$_POST['eid'];
				$nm=$_POST['name'];
				$d=$_POST['dep'];
				$de=$_POST['des'];
				$pa=$_POST['pass'];
				
				$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");

				$que="INSERT INTO doc_info VALUES(\"$id\",\"$nm\",1,\"NULL\",\"NULL\",\"$pa\",\"$d\",\"$de\");";
				
				$que_res=$mysqli->query($que);
				if($que_res) {
					echo '
						<p style="color: #00FF00;font-size:20px;">Doctor Added Successfully...</p>
						<br/>
						<a href="add_doc.php"><input type="button" title="Add Another Profile" value="Add More" class="butto"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';
				} else {
					echo '
						<p style="color: #FF0000;font-size:20px;">Failed to Add. Doctor Already Exists.</p>
						<br/>
						<a href="add_doc.php"><input type="button" title="Add Another Profile" value="Add More" class="butto"/></a>
						&ensp;&ensp;<a href="login_success.php"><input type="button" title="Go Back to Main Page" value="Go Back" class="butto"/></a>';
				}
			?>
		</div>
<?php foot(); ?>


