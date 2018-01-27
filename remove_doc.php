<?php 
/*
* Gets the name and id of the doctor to be remooved from the system and passes it to remove.php for further action

*/
	include('resource/design.php');

	head("Remove Profile");
?>
		<div id="content">
		    <form action="remove.php" method="POST"><br/>
                <h2>Remove Doctor</h2><br/>
                    <table cellspacing="5">
						<tr>
							<td class="td"><label class="lab">Employee ID :</label></td>
							<td><input type="text" name="eid" id="eid" size="15" required class="addtext" /></td>
                        </tr>
						<tr>
                            <td class="td"><label class="lab">Name:</label></td>
                            <td><input type="text" size="15" name="name" id="name" required class="addtext"/></td>
                        </tr>   
                        
                    </table>
					
                          </br><input type="submit" value="Remove"  class="butto"/> 	
                        
			</form>
		</div>
<?php foot(); ?>