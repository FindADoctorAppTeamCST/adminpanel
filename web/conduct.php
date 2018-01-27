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
	
			<h1 id="h1">&emsp;&emsp;Conduct a MNS Assessment
		</h1>
		<div id="conduct">
		<h3 align="center">HISTORY TAKING</h3>
		<ol>
			<li><b>Presenting Complaint</b></br>
			Main symptom or reason that the person is seeking care.
				<ul>
				  <li>Ask when, why, and how it started.</li>
				  <li>It is important at this stage to gather as much information as
					possible about the person’s symptoms and their situation.</li>
				</ul>
			
			</li></br>
			<li><b>Past MNS History</b>
				<ul>
				  <li>Ask about similar problems in the past, any psychiatric hospitalizations or
					medications prescribed for MNS conditions, and any past suicide attempts.</li>
				  <li>Explore tobacco, alcohol and substance use.</li>
				</ul>
			</li></br>
			<li><b>General Health History</b>
				<ul>
				  <li>Ask about physical health problems and medications.</li>
				  <li>Obtain a list of current medications.</li>
				  <li>Ask about allergies to medications.</li>
				</ul>
			</li></br>
			<li><b>Family History of MNS Conditions</b>
				<ul>
				  <li>Explore possible family history of MNS conditions and ask if anyone
						had similar symptoms or has received treatment for a MNS condition.</li>
				  
				</ul>
			</li></br>
			<li><b>Psychosocial History</b>
				<ul>
				  <li>Ask about current stressors, coping methods and social support.</li>
				  <li>Ask about current socio-occupational functioning (how the person is
							functioning at home, work and in relationships).</li>
				  <li>Obtain basic information including where the person lives, level of
						education, work/employment history, marital status and number/ages
						of children, income, and household structure/living conditions.</li>
				</ul>
			</li>
		</ol>
		<p align="center">For children and adolescents, ask about whether they have a carer,
and the nature and quality of the relationship between them.</p>
		
		</div><br>
		<div id="box"><p align="center">
		Suspect a priority MNS condition
			and go to the relevant module(s) for
			assessment</p>
		</div>
	
		</br>
			<div id="conduct">
		<h3 align="center">ASSESSMENT FOR MNS CONDITIONS</h3>
		<ol>
			<li><b>Physical Examination</b></br>
				<ul>
				  <li>Conduct a targeted physical examination guided by the information
						found during the MNS assessment.</li>
				 
				</ul>
			
			</li></br>
			<li><b>Mental Status Examination (MSE)*</b>
				<ul>
				  <li>Ask about and observe the person’s Appearance and Behaviour,
					Mood and Affect, Content of Thought, any Perceptual disturbances and
					Cognition. See symptom based Master Chart (MC) for details.</li>
	
				</ul>
			</li></br>
			<li><b>Differential Diagnosis</b>
				<ul>
				  <li>Consider the differential diagnosis and rule out conditions that have
						similar presenting symptoms.</li>
				 
				</ul>
			</li></br>
			<li><b>Basic Laboratory Tests</b>
				<ul>
				  <li>Request laboratory tests when indicated and possible, especially
						to rule out physical causes.</li>
				  
				</ul>
			</li></br>
			<li><b>Identify the MNS Condition</b>
				<ul>
				  <li>Identify the MNS condition using the appropriate module(s)..</li>
				  <li>Assess for other MNS symptoms and priority conditions
							(see Master Chart).</li>
				  <li>Follow the appropriate management algorithm and treatment
						protocols.</li>
				</ul>
			</li>
		</ol>
			</br>
			&emsp;&emsp;&emsp;
		<img src="clinical/tipp.jpg" id="t" width="5%" height="5%"></img>
		<div id="cli">
			<h5 align="center">CLINICAL TIP</h5>
			<p align="center">Once a MNS disorder is suspected,
				always assess for self harm/suicide ( SUI )
			</p>
		</div>
		</div><br>
		<p><a class="btn btn-primary btn-lg" href="clinical.php" role="button">Back</a></p>
	 </div>
	 
	 
	 	 
	 	
		 <div id="footer" align="center">
					      <p><br>Copyright &copy; 2017 Jigme Dorji Wangchuk National Referal Hospital. All rights reserved.</p>
				    </div>
	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


