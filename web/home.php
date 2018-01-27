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
<a href="adminlog.php">Login as admin</a>
			
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
	
	
	<h2 id="h2">&emsp;&emsp;WHO Mental Health Gap Action Programme (mhGAP)
		</h2>
		<p id="content">Mental, neurological, and substance use disorders are common in all regions of the world, affecting every community and age group across all income countries. 
		While 14% of the global burden of disease is attributed to these disorders, most of the people affected - 75% in many low-income countries - do not have access 
		to the treatment they need.
		<br><br><br>
        The WHO Mental Health Gap Action Programme (mhGAP) aims at scaling up services for mental, neurological and substance use disorders for countries especially with 
		low- and middle-income. The programme asserts that with proper care, psychosocial assistance and medication, tens of millions could be treated for depression, 
		schizophrenia, and epilepsy, prevented from suicide and begin to lead normal lives– even where resources are scarce.</p>
		 &emsp;&emsp;&emsp;<img src="homepage/banner.jpg" width="69%" height="69%"></img>
		<h3 id="h3">mhGAP Forum, 9 – 10 October 2017, WHO, Geneva
		</h3>
		<p id="content">The two days of activities in the Forum will provide an opportunity for a diverse group of stakeholders to discuss a variety of themes, 
		all related to the implementation of WHO’s Mental Health Action Plan 2013-2020. The Forum will also discuss specific commitments 
		from partners towards implementing the Action Plan. There will also be time available for informal networking.</p>
	 </div>
	 
	 
	 	 
	 	
		 <div id="footer" align="center">
					      <p><br>Copyright &copy; 2017 Jigme Dorji Wangchuk National Referal Hospital. All rights reserved.</p>
				    </div>
	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>