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
  <li role="presentation"><a href="emer.php" id="leftpanel" ><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>  Emergency Presentations</a></li>
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
		
		<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Emergency Table</div>

  <!-- Table -->
  <table class="table">
    <tr><th style="color:red">EMERGENCY PRESENTATION</th><th>CONDITION TO CONSIDER</th><th>GO TO</th></tr>
	<tr><td>-Act of self-harm with signs of poisoning or intoxication,
bleeding from self-inflicted wound, loss of consciousness
and/or extreme lethargy<br>-Current thoughts, plan, or act of self-harm or suicide, or
history of thoughts, plan, or act of self-harm or suicide in a
person who is now extremely agitated, violent, distressed
or lacks communication</td><td>-MEDICALLY SERIOUS ACT OF SELF-HARM<br>-IMMINENT RISK OF SELF-HARM/SUICIDE</td><td>SUI</td></tr>
<tr><td>-A cute convulsion with loss of consciousness or impaired
consciousness<br>-Continuous convulsions</td><td>-EPILEPSY<br>-STATUS EPILEPTICUS<br>-ALCOHOL OR OTHER SEDATIVE WITHDRAWAL</td><td>-EPI, SUB</td><tr>
<tr><td>-Agitated and/or aggressive behaviour</td><td></td><td>-DEM, PSY, SUB</td><tr>
<tr><td>-S mell of alcohol on the breath, slurred speech, uninhibited
behaviour; disturbance in the level of consciousness, cognition,
perception, affect or behaviour<br>-Tremor in hands, sweating, vomiting, increased pulse and
blood pressure, agitation, headache, nausea, anxiety; seizure
and confusion in severe cases<br>-U nresponsive or minimally responsive, slow respiratory rate,
pinpoint pupils<br>-D ilated pupils, excited, racing thoughts, disordered thinking,
strange behaviour, recent use of cocaine or other stimulants,
increased pulse and blood pressure, aggressive, erratic or
violent behaviour</td><td>-ACUTE ALCOHOL INTOXICATION<br>-ALCOHOL WITHDRAWAL
ALCOHOL WITHDRAWAL DELIRIUM<br>-SEDATIVE OVERDOSE OR INTOXICATION<br>-ACUTE STIMULANT INTOXICATION OR OVERDOSE</td><td>-SUB</td><tr>

  </table>
</div>
		
		
		
		
		
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