<?php

/*
* design.php
* This file contains the layout of add admin menu web pages that have the common header and logo
* head() function contains the header and logo
* head() requires a parameter, that is the title of the page
* foot() function contains the address tag for all pages
*/

function head($title) { //echos the html head section and banner
	echo "
	<!DOCTYPE html>
		<html>
			<head>
				<title>Find A Doctor | $title</title>
				<link rel='stylesheet' type='text/css' href='main.css'>
				<link rel='shortcut icon' type='image/x-icon' href='resource/jdwnrh_logo.png'>
			</head>
	

			<body>
				<div id='firstheader'> <a href='login_success.php'><img src='resource/home-button.png' style='width: 3.25vw; height:3vw; margin-left:90vw;'/></a></div>
				<div id='container'>
					<div id='header'>
						<img src='resource/logo3.png' height='10%' width='10%'>
					</div>	
				</div>
				<div id='header1'>
					<h2>Jigme Dorji Wangchuck National Referral Hospital</h2>
				</div>
	";
}

function foot() { //echoes the footer
	echo '
		<address id="footer">
			<p>Copyright &copy; 2017 | Jigme Dorji Wangchuk National Referral Hospital. All rights reserved.</p>
		</address>
		<br/>
		
		</body>
		</html>
	';
	
}
?>