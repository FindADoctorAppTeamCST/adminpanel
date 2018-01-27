
<?php
//gets the two security answers from the forgot password section and matches with hardcoded answers, and authenticates accordingly.
//If correct the account settings page is displayed where the admin can change the password and if incorrect, it goes back to the login page
	$ans1=$_POST['Answer1'];
	$ans2=$_POST['Answer2'];
	if($ans1=="Jerry" && $ans2=="Red") {
		header('Location: acc_setting.php');
	} else {
		header('Location: login_incorrect.php');
	}
	


?>