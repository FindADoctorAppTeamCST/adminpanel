<?php 
/*
* This page lets the admin to add new doctor profile  to the database
* It gets the data from the text fields and sends to add.php using POST Method
*/
	include('resource/design.php');

	head("Add Doctor");
	?>
	<div id="content">
	    <form action="add.php" method="POST"><br/>
            <h2>Add Doctor</h2>
            <table cellspacing="5">
				<tr>
					<td class="td"><label class="lab">Employee ID :</label></td>
                    <td><input type="text" size="15" name="eid" id="eid" required class="addtext"/></td>
                </tr>
						
				<tr>
                    <td class="td"><label class="lab">Name:</label></td>
                    <td><input type="text" size="15" required class="addtext" name="name" id="name" /></td>
                </tr>  
				<tr>
					<td class="td"><label class="lab">Department:</label></td>
					<td><input type="text" size="15" required class="addtext" name="dep" id="dep" /></td>
                </tr><br/>
                <tr>
					<td class="td"><label class="lab">Designation:</label></td>
					<td><input type="text" size="15" required class="addtext" name="des" id="des" /></td>
                </tr><br/>
				<tr>
                    <td class="td"><label class="lab">Password:</label></td>
                    <td><input type="password" class="addtext" size="15" required name="pass" id="pass" /></td>
                </tr>
				
            </table>
			
                   </br><input type="button" value="Add"  class="butto">
		</form>
		<p id="res_target"></p>
	</div>
	
<?php foot(); ?>

	 
