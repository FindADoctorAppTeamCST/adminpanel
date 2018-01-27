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
		<h2 align="center">Depression (management)</h2>
		
		
		<div style="display:inline-block">
			<div class="panel panel-primary" style="width:48%;display:inline-block;float:left">
  <div class="panel-heading">
    <h3 class="panel-title">Depression (Protocol 1)</h3>
  </div>
  <div class="panel-body">
    <ul>
	<li>Provide psychoeducation to the person and their
carers.</li>
	<li>Reduce stress and strengthen social supports.</li>
	<li>Promote functioning in daily activities and
community life.</li>
	<li>Consider antidepressants.</li>
	<li>If available, consider referral for one of the
following brief psychological treatments:
interpersonal therapy (IPT), cognitive behavioural
therapy (CBT), behaviour activation and problemsolving
counselling.</li>
	<li>DO NOT manage the symptoms with ineffective
treatments, e.g. vitamin injections.</li>
	<li>Offer regular follow-up.</li>
	
	</ul>
  </div>
</div>&emsp;
			<div class="panel panel-primary" style="width:48%;display:inline-block;float:right">
  <div class="panel-heading">
    <h3 class="panel-title">Depression in Bipolar Disorder (Protocol 2)</h3>
  </div>
  <div class="panel-body">
    <ul>
	<li>Consult a specialist.</li>
	<li>If a specialist is not immediately available,
follow treatment for depression (PROTOCOL 1).
However, NEVER prescribe antidepressants
alone without a mood stabilizer such as lithium,
carbamazepine or valproate because antidepressants
can lead to mania in people with
bipolar disorder (Go to PSY).</li>
	<li>If symptoms of mania develop, tell the person
and the carers to stop the antidepressant
immediately and return for help.</li>
	
	
	</ul>
  </div>
</div>
	</div>

		<h3>Special populations</h3>
		<p>Note that interventions may differ
for these populations</p>


			<div class="panel panel-primary" style="width:48%;display:inline-block;float:left">
  <div class="panel-heading">
    <h3 class="panel-title">WOMEN WHO ARE PREGNANT OR
BREASTFEEDING</h3>
  </div>
  <div class="panel-body">
    <ul>
	<li>Follow treatment for depression
(PROTOCOL 1) but AVOID antidepressants
if possible, especially during
the first trimester.</li>
<li>If no response to psychological treatment,
consider using with caution the
lowest effective dose of antidepressants.</li>
<li>If breastfeeding, avoid long acting
medication such as fluoxetine.</li>
<li>CONSULT A SPECIALIST, if available.</li>

	
	</ul>
  </div>
</div>



			<div class="panel panel-primary" style="width:48%;display:inline-block;float:right">
  <div class="panel-heading">
    <h3 class="panel-title">CHILD / ADOLESCENT</h3>
  </div>
  <div class="panel-body">
    <ul>
	<li>For management of depression in
children/adolescents, go to CMH.</li>

	
	</ul>
  </div>
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