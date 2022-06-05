<?php  session_start();
	include 'config.php';

	// Retrieve username and password from database according to user's input
	$stateno=mysqli_real_escape_string($db,$_POST['stateno']);
	$price=mysqli_real_escape_string($db,$_POST['price']);
	$fullname=mysqli_real_escape_string($db,$_POST['fullname']);
	$emailid=mysqli_real_escape_string($db,$_POST['emailid']);
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$rolecode='U';
	$encrypted_mypassword=md5($password);

	$sql = "INSERT into system_users(plan_id,price,u_name,u_email,u_username,u_password,u_rolecode) VALUES('$stateno','$price','$fullname','$emailid','$username','$encrypted_mypassword', '$rolecode')";
	$login = mysqli_query($db,$sql);

	if ($login != "") {
		$str = '../login/login.php?s=success';
		redirect($str);
	}
	else {
		$str = '../login.php?s=lf' . $sql;
		redirect($str); 
	}
?>