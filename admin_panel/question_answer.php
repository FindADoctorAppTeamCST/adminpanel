
<?php
	$ans1=$_POST['Answer1'];
	$ans2=$_POST['Answer2'];
	if($ans1=="Jerry" && $ans2=="Red") {
		header('Location: acc_setting.php');
	} else {
		header('Location: ../login_incorrect.php');
	}
	


?>