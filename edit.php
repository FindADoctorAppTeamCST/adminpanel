<?php 
/*
* This file receives the id of the doctor whose profile needs to be Updated, from edit_doc.php
* It gets the required information from the database using the id 
* Upon changes by the admin, the file sends the new Updataed values to saveEdit.php
*/

	include('resource/design.php');

	head("Edit Profile");
?>
		<div>
			<br/><p style="font-size:1.5vw;"><strong>Edit Profile Below:</strong></p><br/>
			<form action="saveEdit.php" method="POST">
			<table border="0" cellspacing="0" cellpadding="10" class="tableview">
				<tr>
					<th style="font-size: 1.5vw">Employee ID</th><th style="font-size: 1.5vw">Name</th><th style="font-size: 1.5vw">Department</th><th style="font-size: 1.5vw">Designation</th><th style="font-size: 1.5vw">Password</th>
				</tr>
				<?php
					$id=$_POST['eid'];
					$mysqli=new mysqli("localhost","root","","jdwnrh_findadoc");
					$doc_que=$mysqli->query("SELECT emp_id,name,department,designation,password FROM doc_info WHERE emp_id=$id;");
					while($docarr=$doc_que->fetch_row()) {
						echo '<tr bgcolor="#E0E0E0">';
						echo "<td><input type='text' name='empid' value=\"$docarr[0]\" class='addtext'/></td>
							<td><input type='text' name='name' class='addtext' value=\"$docarr[1]\"/></td>
							<td><input type='text' class='addtext' name='dep' value=\"$docarr[2]\"/></td>
							<td><input type='text' class='addtext' name='des' value=\"$docarr[3]\"/></td>
							<td><input type='text' class='addtext' name='pass' value=\"$docarr[4]\"/></td>
							</tr>";
					}
					$mysqli->close();
				?>
			</table>
			<br/><input type="submit" value="Save" class="butto"/>
			</form>
		</div>
		<br/>
<?php foot(); ?>