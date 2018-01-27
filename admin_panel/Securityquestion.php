<!DOCTYPE html>
<html>
    <head><title>Find A Doctor | Admin Password Reset</title>
    <link rel="stylesheet" type="text/css" href="main_f.css">
	<link rel="shortcut icon" type="image/x-icon" href="resource/jdwnrh_logo.png">
    </head>
    <body>
       
        <div id="firstheader">
		</div>
		
	<div id="container">
			<div id="header" >
					<img src="resource/jdwnrh_logo.png" width="175" height="175">
			</div>
			<div id="header1">
                <h2>Jigme Dorji Wangchuck National Referral Hospital</h2><br/>
			</div>

			<div id="content">
			<h2 class="pass">Password Reset Page</h2><br/>
                <p><b><i style="color:red;">OOPS!</i></b> It seem like you forgot the password.</p>
			</div>
            
             <form action="question_answer.php" method="post"
                   class="form1">
              <fieldset>
                <legend>Security Questions and Answers:</legend>
                  <h2 class="question">Answer the two questions that follows.</h2><br/><br/>
                  Q1:<p>What is your <bold><i>Pet name?</i></bold></p><br/>
                Your Ans:<input type="text" name="Answer1" placeholder="Answer" class="answerbox"><br/>
                <br/>Q2:<p>What is your favourite color?</p><br/>
                Your Ans:<input type="text" name="Answer2" placeholder="Answer" class="answerbox"><br/><br/>
                    <input type="submit" value="Submit" class="buttonHead">&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                  <input type="reset" value="Clear" class="buttonHead"><br/><br/>
              </fieldset>
            </form> 
        </div>
		<br/><br/>
        <address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p><br/>
		</address>
    </body>
</html>