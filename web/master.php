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
	
	
	<h1 id="h1">&emsp;&emsp;Overview of Priority MNS Conditions
		</h1>
		<ol>
			<li>These common presentations indicate the need for assessment.</li>
			<li>Low energy, fatigue, sleep problems</li>
			<li>Persistent sadness or depressed mood, anxiety</li>
			<li>Loss of interest or pleasure in activities that are normally pleasurable</li>
		</ol>
		<h4>common presentation</h4>
		<hr color="#881D6C" size="3"/>
		<h3 style="color:#881D6C">Depression (DEP) </h3>
		<ul>
			<li>Multiple persistent physical symptoms with no clear cause</li>
			<li>Low energy, fatigue, sleep problems</li>
			<li>Persistent sadness or depressed mood, anxiety</li>
			<li>Loss of interest or pleasure in activities that are normally pleasurable</li>
		</ul>

		<hr color="#223C97" size="3">
		<h3 style="color:#223C97">PSYCHOSES (PSY)</h3>
		<ul>	
		<li>Marked behavioural changes; neglecting usual responsibilities related to work, school, domestic or social activities</li>
		<li>Agitated, aggressive behavior, decreased or increased activity</li>
		<li>Fixed false beliefs not shared by others in the person’s culture</li>
		<li>Hearing voices or seeing things that are not there</li>
		<li>Lack of realization that one is having mental health problems</li>
		</ul>
		
		<hr color="deepskyblue" size="3"/>
		<h3 style="color:deepskyblue">EPILEPSY (EPI)</h3>
		<ul>	
		<li>Convulsive movement or fits/seizures</li>
		<li>During the convulsion: loss of consciousness or impaired consciousness, stiffness, rigidity, tongue bite, injury, incontinence of urine or faeces</li>
		<li>After the convulsion: fatigue, drowsiness, sleepiness, confusion, abnormal behaviour,headache, muscle aches, or weakness on one side of the body</li>
		</ul>
		<hr color="#18B04B" size="3">
		<h3 style="color:#18B04B">CHILD & ADOLESCENT MENTAL & BEHAVIOURAL DISORDERS (CMH)</h3>
		<ul>	
		<li>Problem with development, emotions or behaviour(e.g. inattention, over-activity, or repeated defiant,disobedient and aggressive behaviour)</li>
		<li>Risk factors such as malnutrition, abuse and/or neglect, frequent illness, chronic diseases (e.g. HIV/AIDS or history of difficult birth)</li>
		<li>Difficulty keeping up with peers or carrying out daily activities considered normal for age</li>
		<li>Behaviour (e.g. too active, aggressive, having frequent and/or severe tantrums, wanting to be alone too much, refusing to do regular activities or go to school)</li>
		<li>easily distracted, disruptive in class, often getting into trouble, difficulty completing school work Community health or social services worker with</li>
		<li>e.g. rule- or law-breaking behaviour, physical aggression at home or in the community</li>
		</ul>
		
		<hr color="#92C139" size="3">
		<h3 style="color:#92C139">DEMENTIA (DEM)</h3>
		<ul>	
		<li>Decline or problems with memory (severe forgetfulness) and orientation (awareness of time, place and person)</li>
		<li>Mood or behavioural problems such as apathy (appearing uninterested) or irritability</li>
		<li>Loss of emotional control (easily upset, irritable or tearful)</li>
		<li>Difficulties in carrying out usual work, domestic or social activities</li>
		</ul>
		
		<hr color="#F68B1F" size="3">
		<h3 style="color:#F68B1F">DISORDERS DUE་TO SUBSTANCE་USE (SUB)</h3>
		<ul>	
		<li>Appearing affected by alcohol or other substance་(e.g. smell of alcohol, slurred speech, sedated, erratic་behaviour)</li>
		<li>Signs and symptoms of acute behavioural effects,་withdrawal features or effects of prolonged use</li>
		<li>Deterioration of social functioning (i.e. difficulties at་work or home, unkempt appearance)</li>
		<li>Incidental findings: macrocytic anaemia, low་platelet count, elevated mean corpuscular་volume (MCV)</li>
		</ul>
		
		<hr color="#E65521" size="3">
		<h3 style="color:#E65521">SELF-HARM/SUICIDE (SUI))</h3>
		<ul>	
		<li>Extreme hopelessness and despair</li>
		<li>Current thoughts, plan or act of self-harm/suicide, or history thereof</li>
		<li>Any of the other priority conditions, chronic་pain, or extreme emotional distress</li>
		
		</ul>
	
	 </div>
	 
	 
	 	 
	 	
		 <div id="footer" align="center">
					      <p><br>Copyright &copy; 2017 Jigme Dorji Wangchuk National Referal Hospital. All rights reserved.</p>
				    </div>
	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>