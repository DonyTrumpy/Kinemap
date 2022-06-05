<?php
	include '../abc/config.php';
	check();

	// If upload button is clicked ...
	if (isset($_POST['fullname'])) {
		$userid = mysqli_real_escape_string($db, ucwords($_SESSION['u_userid']));
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$specialisations = mysqli_real_escape_string($db, $_POST['specialisations']);
		$emailid = mysqli_real_escape_string($db, $_POST['emailid']);
		$telephone = mysqli_real_escape_string($db, $_POST['telephone']);
		$website = mysqli_real_escape_string($db, $_POST['website']);
		$agenda = mysqli_real_escape_string($db, $_POST['agenda']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$home_therapy = mysqli_real_escape_string($db, $_POST['home_therapy']);
		$online_therapy = mysqli_real_escape_string($db, $_POST['online_therapy']);
		$conventional_therapy = mysqli_real_escape_string($db, $_POST['conventional_therapy']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$latitude = mysqli_real_escape_string($db, $_POST['latitude']);
		$longitude = mysqli_real_escape_string($db, $_POST['longitude']);
		$image = mysqli_real_escape_string($db, $_POST['image']);
		$rolecode='U';
		$price='0';
		$plan_id='2';
		$encrypted_mypassword=md5($password);

		$sql = "INSERT INTO professionals (userid, fullname, stateno, emailid, specialisations, telephone, website, agenda, address, home_therapy, online_therapy, conventional_therapy, description, latitude, longitude, image) VALUES ('$userid', '$fullname', '$stateno', '$emailid', '$specialisations', '$telephone', '$website', '$agenda', '$address', '$home_therapy', '$online_therapy', '$conventional_therapy', '$description', '$latitude', '$longitude', '$image')";
		mysqli_query($db, $sql);

		$sqlInsert = "INSERT into system_users(u_name,u_email,u_username,u_password,u_rolecode,price,plan_id)
		VALUES('$fullname','$emailid','$emailid','$encrypted_mypassword', '$rolecode', '$price', '$plan')";
		// echo $sqlInsert;
		$login = mysqli_query($db,$sqlInsert);
	}
?>
