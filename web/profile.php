<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>mhGAP</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="rule.css">
		<link rel="stylesheet" type="text/css" href="mycss.css">
	
		<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
	
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
	

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
      <a class="navbar-brand" href="profile.php">Profile</a>
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
        <li id="myBtn"><a>Logout</a></li>
		
					<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div id="fmain" class="myform">
	
		<h1>Are you sure you want to Logout?</h1>&emsp;&emsp;&emsp;&emsp;
		<a class="btn btn-primary btn-lg" href="home.php" role="button">yes</a>&emsp;&emsp;&emsp;
		<a class="btn btn-primary btn-lg" href="profile.php" role="button">No</a>
		
	</div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
		
		
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="menu">
<div id="assesment" align="center">
Assessment
</div>&emsp;&emsp;

<div id="management" align="center">
Management
</div>&emsp;&emsp;

<div id="followup" align="center">
Follow Up
</div>

</div>	<br>	
	
	 
	 
	 	 
	 	
		 <div id="footer" align="center">
					      <p><br>Copyright &copy; 2017 Jigme Dorji Wangchuk National Referal Hospital. All rights reserved.</p>
				    </div>
	


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>