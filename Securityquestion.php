<!DOCTYPE html>
<!--
Upon clicking the forgot password option that appears after the admin has typed an invalid credential, this page is redirected to the user.
Here, the admin is asked two questions for the verifiation. The admin response is the sent to question_answer.php where the admin answer is matched with hardcoded string.
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	
	<title>Find A Doctor | Admin Login</title>
    
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
</head>
 <body>
		<div id="firstheader"></div>
		
			<div id="header" >
					<img src='resource/logo3.png' height='10%' width='10%'>
			</div>
			<div id="header1">
                <h2>Jigme Dorji Wangchuck National Referral Hospital</h2><br/>
			</div>
			
			<h2 class="pass">Password Reset Page</h2><br/>
                <p><b><i style="color:red;">OOPS!</i></b> It seem like you forgot the password.</p>
			
            <div id="container">
			<div id="content1">
             <form action="question_answer.php" method="post" class="form1">
              <fieldset style="width:100%">
                <legend>Security Questions and Answers:</legend>
                  <h2 class="question">Answer the questions</h2><br/><br/>
                  Q1:<p>What is your <bold><i>Pet name?</i></bold></p><br/>
                Your Ans:<input type="text" name="Answer1" placeholder="Answer" class="answerbox"><br/>
                <br/>Q2:<p>What is your favourite color?</p><br/>
                Your Ans:<input type="text" name="Answer2" placeholder="Answer" class="answerbox"><br/><br/>
                    <input type="submit" value="Submit" class="butto"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  <input type="reset" value="Clear" class="butto"><br/><br/>
              </fieldset>
            </form> 
        </div>
		</div>
		<br/>
        <address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p><br/>
		</address>
    </body>
</html>