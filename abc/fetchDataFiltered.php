<?php
	require_once("config.php");

	$sql = "SELECT * FROM professionals where " . $_GET["query"];
	$result = mysqli_query($db, $sql);
	$geojson = array(
		'type'      => 'FeatureCollection',
		'features'  => array()
	);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$feature = array
			(
				'type' => 'Feature',
				'properties' => array
				(
					'id' => $row['id'],
					'fullname' => $row['fullname'],
					'emailid' => $row['emailid'],
					'specialisations' => $row['specialisations'],
					'telephone' => $row['telephone'],
					'website' => $row['website'],
					'agenda' => $row['agenda'],
					'address' => $row['address'],
					'home_therapy' => $row['home_therapy'],
					'online_therapy' => $row['online_therapy'],
					'conventional_therapy' => $row['conventional_therapy'],
					'description' => $row['description'],
					'image' => $row['image']
					// 'latitude' => $row['latitude'],
					// 'longitude' => $row['longitude']
				),
        "geometry" => array(
          'type' => 'Point',
          'coordinates' => array(
            (float)$row['longitude'],
          	(float)$row['latitude']
	       	)
        )
			);
			array_push($geojson['features'], $feature);
		}
	}
	header('Content-type: application/json',true);
	echo json_encode($geojson);
?>
