<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>mhGAP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="mycss.css">
	<link rel="stylesheet" type="text/css" href="Rule.css">

  </head>
  <body>
  <div>
  <img src="homepage/mh2.jpg" id="logo"></img>
	<img src="homepage/title.jpg" id="title"></img>
	<img src="homepage/jdw.png" id="jdwnrh"></img>
	</div></br>
   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Guide<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="symbols.php">Symbols</a></li>
            <li><a href="elements.php">Visual Elements</a></li>
         
          </ul>
        </li>
		<li><a href="section.php">Section</a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Essentials<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="general.php">General Principles</a></li>
            <li><a href="clinical.php">Clinical Practice</a></li>
				
         
          </ul>
        </li>
		<li><a href="master.php">Master Chart</a></li>
					<li><a href="glossary.php">Glossary</a></li>
						<li><a href="about.php">About mhGAP</a></li>
						<li><a href="feedback.php">Feedback</a></li>
						 <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li id="myBtn"><a>Signup</a></li>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Sign Up</h2>
    </div>
    <div class="modal-body">
      		<div id="fmain" class="myform">
		<h1>Fill Your Details</h1>
		<form method="POST" action="#">
			<input type="text" id="in" placeholder="Full name"><br>
			<input type="text" id="in" placeholder="Doctor ID"><br>
			<input type="text" id="in" placeholder="best friend name"><br>
			<input type="text" id="in" placeholder="pet name"><br>
			<input type="PassWord" id="in" placeholder="Password">
			<input type="submit" id="inbt" value="Submit">

		</form>
		
	</div>
    </div>
    <div class="modal-footer">
      <h3>Thanks</h3>
    </div>
  </div>

</div>
	<script src="js/flyin.js"></script>

	<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
			<form class="navbar-form navbar-left" role="search">
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Doctor ID" style="margin:5px">
	<input type="password" class="form-control" placeholder="Password" style="margin:5px">
  </div><br>&nbsp;
   <button type="submit" class="btn btn-default" style="background:#43D1AF">Submit</button>
</form>
			
			</li>
           
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

		<div id="lsidemenu">
	 
		<div id="mental">
		      <h2 align="center">
			    MNS Conditions
			
			  </h2>
		
					<a href="depression.php" id="link"><div id="Depression" align="center"><table><tr><td id="l">Depression</td></tr></table>
					</div></a><br>
					
					<a href="psychoses.php" id="link"><div id="Psychoses" align="center"><table><tr><td id="l">Psychoses</td></tr></table>
					</div></a>
					<br>
					
					<a href="epilipsy.php" id="link"><div id="Epilipsy" align="center"><table><tr><td id="l">Epilipsy</td></tr></table>
					</div></a>
					<br>
					
					<a href="cmh.php" id="link"><div id="cmh" align="center"><table><tr><td id="l">CMH Behavioural Disorder</td></tr></table>
					</div></a>
					<br>
					
						
					<a href="dementia.php" id="link"><div id="Dementia" align="center"><table><tr><td id="l">Dementia</td></tr></table>
					</div></a>
					<br>
					
							
					<a href="substance.php" id="link"><div id="Substance" align="center"><table><tr><td id="l">Substance Use</td></tr></table>
					</div></a>
					<br>
					
					<a href="suicide.php" id="link"><div id="Suicide" align="center"><table><tr><td id="l">Self Harm/Suicide</td></tr></table>
					</div></a>
					<br>
				</div>
				 <hr align="left" width="100%" color="grey" size="1">
				 <h3 style="color:#691455;font-size:18px;" align="center">Other significant mental health complaints</h3>
				&emsp;&nbsp;	
				<a href="Complaint.php" id="complaint"><img src="homepage/comm.jpg" width="80%" height="80%" id="complaint"></img></a>
	 </div> 
		<div id="centerdiv">
	
	
	<!--h1 id="h1">&emsp;&emsp;Clinical Practice
		</h1-->
		&emsp;&emsp;&emsp;&emsp;&emsp;
		<img src="clinical/clinical.jpg" width="75%" height="60%"></img>
		<a href="assess.php" id="clinical"><h3 id="h2">I. Assess Physical Health</h3></a>
		<p>
		Persons with MNS disorders are at higher risk of premature
			mortality from preventable disease and therefore must always
			receive a physical health assessment as part of a comprehensive
			evaluation. Be sure to take a proper history, including both
			physical health and MNS history, followed by a physical health
			assessment to identify concurrent conditions and educate the
			person about preventive measures. These actions must always
			be undertaken with the person’s informed consent.
		</p>
		<a href="conduct.php" id="clinical"><h3 id="h2">II. Conduct a MNS Assessment</h3></a>
		<p>
		Conducting an assessment for MNS conditions involves the following steps. First, the presenting complaint is explored, then a history is obtained including
			asking about past MNS issues, general health problems, family MNS history, and psychosocial history. Observe the person (Mental Status Exam), establish
			a differential diagnosis, and identify the MNS condition. As part of the assessment, conduct a physical examination and obtain basic laboratory tests as
			needed. The assessment is conducted with informed consent of the person.
		</p>
		<a href="manage.php" id="clinical"><h3 id="h2">III. Manage MNS Conditions</h3></a>
		<p>
			Once the assessment is conducted, follow the management algorithm in mhGAP-IG to manage the MNS disorder.
Key steps in management are found in the box below.
		</p>
	 </div>
	 
	 
	 	 
	 	
		 <div id="footer" align="center">
					      <p><br>Copyright &copy; 2017 Jigme Dorji Wangchuk National Referal Hospital. All rights reserved.</p>
				    </div>
	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


