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
		<h2 align="center">Epilepsy (management)</h2>
		
	
			<div class="panel panel-primary" style="width:48%;display:inline-block;">
  <div class="panel-heading">
    <h3 class="panel-title">Protocol 1</h3>
  </div>
  <div class="panel-body">
    <ul>
	<li>Provide psychoeducation to the person and carers (2.1)</li>
	<li>Initiate antiepileptic medications.</li>
	<li>Promote functioning in daily activities</li>
	
	
	</ul>
  </div>
  
		
</div>&emsp;
<h3 style="color:red">Special populations</h3>
		<p>Note that interventions are different for EPILEPSY in these populations</p>
			<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">WOMAN OF CHILDBEARING AGE</h3>
	<p>Concern: Risk of antiepileptic medication to fetus/child</p>
  </div>
  <div class="panel-body">
    <ul>
	<li>Advise folate (5 mg/day) to prevent neural tube
defects, in ALL women of childbearing age.</li>
	<li>AVOID VALPROATE.</li>
	<li><span style="color:red">CAUTION If Pregnant:</span>
– Avoid polytherapy. Multiple medications in combination
increase the risk of teratogenic effects during pregnancy.
– If medications are stopped during pregnancy,
they should always be tapered.
– Advise delivery in hospital.
– At delivery, give 1 mg vitamin K i.m. to the newborn
to prevent haemorrhagic disease.</li>
	<li>If breastfeeding, carbamazepine preferred to other
medication.</li>

	
	
	</ul>
  </div>
</div>




			<div class="panel panel-primary" style="width:48%;display:inline-block;float:left">
  <div class="panel-heading">
    <h3 class="panel-title">CHILD/ADOLESCENTS</h3>
	<p>Concern: Effect of antiepileptic medication
on development and/or behavior</p>
  </div>
  <div class="panel-body">
    <ul>
	<li>For those with a developmental disorder,
manage the condition. Go to CMH.</li>
<li>For children with behavioural disorder, avoid
phenobarbital if possible. Manage the condition.
Go to CMH.</li>



	
	</ul>
  </div>
</div>



			<div class="panel panel-primary" style="width:48%;display:inline-block;float:right">
  <div class="panel-heading">
    <h3 class="panel-title">PERSON LIVING WITH HIV
</h3>
<p>Concern: Drug interactions between antiepileptic
medications and antiretrovirals</p>
  </div>
  <div class="panel-body">
    <ul>
	<li>When available, refer to specific drug interactions
for person’s antiretroviral regimen and antiepileptic
medication.</li>
	<li>Valproate is preferred due to fewer drug-drug
interactions.</li>
<li>AVOID PHENYTOIN AND CARBAMAZEPINE
WHEN POSSIBLE.</li>

	
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