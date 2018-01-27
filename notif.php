<?php 
/*
* This page lets the admin push a subject and notification message to the database
* The database is accessed by the users of the app to get the latest news related to the hospital
* It receives the message and sends to pushnotif.php for insertion in the database notif table
*/
	include('resource/design.php');

	head("Push News");
?>
		<div id="content">
		    <form action="pushnotif.php" method="POST"><br/>
                <h2>Push a Notification or News</h2><br/><br>
                    <table>
						<tr>
							<td class="td"><label class="lab">Subject :</label></td>
							<td><input type="text" name="subject" id="subject" size="15" required class="addtext" /></td>
                        </tr>
						<tr>
                            <td class="td"><label class="lab">Message:</label></td>
                            <td><textarea size="15" name="message" style="height: 100px" id="message" required class="addtext"></textarea></td>
                        </tr>   
						
					</table>
					
                       <br/><input type="submit" value="Push" class="butto" title="Broadcast this Message to App Users"> 
				</form>	
		</div>
<?php foot(); ?>