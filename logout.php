<?php
session_start();
//
if(!isset($_SESSION['admin'])){
	header('Location: login.php');
}else if($_SESSION['admin']!=""){
	header('Location: login_success.php');
}

//
if (isset($_GET['logout1'])){
	unset($_SESSION['admin']);
	session_unset();
	session_destroy();
	header("Location: login.php");
	exit;
}
?>