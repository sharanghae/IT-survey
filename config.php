<?php

	$conn = new mysqli('localhost', 'root', '', 'surveystat');

	if ($conn->connect_errno) {
		echo "could not connect to db";
		exit();
	}

	$stored_data = array();
	$stored_header = array();

	$genres['kpop'] = Array();
	$genres['rnb'] = Array();
	$genres['opm'] = Array();
	$genres['lovesong'] = Array();
	$genres['rock'] = Array();


	$sql = "SELECT * 
			FROM `surveytable` 
			ORDER BY `survey_id` ASC
			";
			
	if ( ! $result = $conn->query($sql)) {
		echo $conn->error;
	}

	while ($row = $result->fetch_assoc()) {
		$stored_header = array_keys($row);

		foreach ($row as $key => $value) {
			if (in_array($key, Array('kpop', 'rnb', 'opm', 'rock', 'lovesong'))) {
				array_push($genres[$key], $value);
			}	
		}


		array_push($stored_data, $row);
	}

?>