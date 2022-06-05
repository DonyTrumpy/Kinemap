<?php
	include 'config.php';
	check();
echo $_SESSION['profID'];
	// If upload button is clicked ...
	if (isset($_POST['fullname'])) {
		$profID = mysqli_real_escape_string($db, ucwords($_SESSION['profID']));
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$stateno = mysqli_real_escape_string($db, $_POST['stateno']);
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

		$sql = "Update professionals set fullname = '$fullname', stateno = '$stateno', emailid = '$emailid', specialisations = '$specialisations', telephone = '$telephone', website = '$website', agenda = '$agenda', address = '$address', home_therapy = '$home_therapy', online_therapy = '$online_therapy', conventional_therapy = '$conventional_therapy', description = '$description', latitude = '$latitude', longitude = '$longitude', image='$image' where id=' $profID'";

		mysqli_query($db, $sql);
	}
?>
