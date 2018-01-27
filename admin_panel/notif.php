<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Notification</title>
	<link rel="stylesheet" type="text/css" href="menu_doc.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
	</head>
	<body>
		<div id="firstheader">
		</div>
		
		<div id="container">
			<div id="header">
					<img src="resource/jdwnrh_logo.png" height="175" width="175">
			</div>
			
		</div>
		<div id="header1">
		<h2>Jigme Dorji Wangchuck National Referral Hospital</h2>
		</div>
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
						<tr>
                            <td colspan="2" ><input type="submit" value="Push" class="button" title="Broadcast this Message to App Users"> </td>
							
                        </tr>
					</table>
				</form>	
		</div>
		<br/><br/>
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>