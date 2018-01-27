<!DOCTYPE html>
<html>
	<head>
	<title>Find A Doctor | Add_Doc</title>
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
		    <form action="add.php" method="POST"><br/>
                <h2>Add Doctor</h2><br/><br>
                    <table>
						<tr>
						<td class="td"><label class="lab">Employee ID :</label></td>
                            <td><input type="text" size="15" name="eid" id="eid" required class="addtext"/></td>
                        </tr>
						
					   <tr>
                            <td class="td"><label class="lab">Name:</label></td>
                            <td><input type="text" size="15" required class="addtext" name="name" id="name" /></td>
                        </tr>   
                        <tr>
                            <td>                              
                            </td>
                        </tr>
                        <tr>
                            <td class="td"><label class="lab">Specialization:</label></td>
                            <td><input type="text" size="15" required class="addtext" name="spe" id="spe" /></td>
                        </tr><br/>

						<tr>
                            <td class="td"><label class="lab">Password:</label></td>
                            <td><input type="password" class="addtext" size="15" required name="pass" id="pass" /></td>
                        </tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
					   <tr></tr>
                        <tr>
                            <td colspan="2" ><input type="submit" value="Add"  class="button"> </td>
							
                        </tr>
                    </table>
			</form>
			<p id="res_target"></p>
		</div>
	
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
	
	</body>
</html>


