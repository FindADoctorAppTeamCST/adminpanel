<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Doctor  Dashboard</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="Mycss.css">
	

  </head>
  <body>
    <div class="container-fluid">
        <div class="col-md-3">
              <h1 align="center"  style="color:white" >mhGAP</h1>
		&emsp;&emsp;&emsp;&emsp;&emsp;<img src="homepage/admin-icon3.png" style="height:20%">
     <p style="color:white" align="center">Jamyang Thinley<br>
	 Doctor ID:0215509
	 </p>
	 <ul class="nav nav-pills nav-stacked">
  <li role="presentation" class="active"><a href="loginhome.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> DashBoard</a></li>
  <li role="presentation"><a href="emer.php" id="leftpanel"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Emergency Presentations</a></li>
  <li role="presentation"><a href="mas.php"  id="leftpanel"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>  Master Chart</a></li>
  <li role="presentation"><a href="add.php"  id="leftpanel"><span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span> Add Patient</a></li>
  <li role="presentation"><a href="edit.php"  id="leftpanel"><span class="glyphicon glyphicon-wrench " aria-hidden="true"></span> Edit Patient Details</a></li>
  <li role="presentation"><a href="check.php"  id="leftpanel"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span> Checkout Patient</a></li>
</ul>
	 
    <div id="logg">
		
	<div class="btn-group dropup">
	<img src="homepage/admin-icon3.png" style="width:10.5%;">	
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
  
			<li><a href="Dlogout.php">log out</a></li>
          
	
       </ul>
</div>
</div>	
	
	
	 
	
	  
	  </div>
  
      <div class="col-md-7">
		<h1 align="center" id="heading">mhGAP Intervention Guide</h1>
        <h2>DashBoard</h2>
		
		
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

      
	  
	  <div class="col-md-2">
	 <h2>Check patient</h2>
	 
	   <div class="thumbnail" style="background:ghostwhite">
      <img src="homepage/hospital-corridor.jpg" alt="...">
      <div class="caption">
        <h3>Management</h3>
       
			<div class="btn-group dropdown">
  <button type="button" class="btn btn-default">Mental Issues</button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
  
		<li><a href="dep.php">Depression</a></li>
            <li><a href="psy.php">Psychoses</a></li>
			<li><a href="epi.php">Epilipsy</a></li>
			<li><a href="beh.php">Behavioural Disorders</a></li>
			<li><a href="dem.php">Dementia</a></li>
			<li><a href="sub.php">Substance use</a></li>
			<li><a href="sel.php">Slef-harm/Suicide</a></li>
	
       </ul>
</div>
	   
	
      </div>
    </div>
	
	
	   <hr/>
 <div class="thumbnail" style="background:ghostwhite">
      <img src="homepage/admin.jpg" alt="...">
      <div class="caption">
        <h3>Follow Up</h3>
		
						<div class="btn-group dropup">
  <button type="button" class="btn btn-default">Mental Issues</button>
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
  
			<li><a href="depr.php">Depression</a></li>
            <li><a href="psyc.php">Psychoses</a></li>
			<li><a href="epil.php">Epilipsy</a></li>
			<li><a href="beha.php">Behavioural Disorders</a></li>
			<li><a href="deme.php">Dementia</a></li>
			<li><a href="subs.php">Substance use</a></li>
			<li><a href="self.php">Slef-harm/Suicide</a></li>
	
       </ul>
</div>
        
      </div>
    </div>



   </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>