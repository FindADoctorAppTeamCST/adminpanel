<?php 
/*
* gets the id of the doctor profile to be edited and sends it to edit.php  

*/
	include('resource/design.php');

	head("Edit  Profile");
?>
		<div id="content">
		    <form action="edit.php" method="POST"><br/>
                <h2>Edit Profile</h2><br/>
                      <table cellspacing="5">
						<tr>
							<td class="td"><label class="lab">Employee ID :</label></td>
							<td><input type="text" size="15" name="eid" id="eid" required class="addtext"/></td>
                        </tr>
                        
                    </table>
					
                            </br><input type="submit" value="Edit"  class="butto"/> 						
                      
			</form>
		</div>
<?php foot(); ?>