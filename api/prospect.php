<?php 

	require("../../config.php");

	header('Content-Type: application/json');

	$user_id = $_GET["user_id"];
	//first query 
	$query = "SELECT * FROM `users` WHERE `user_id` <> $user_id";

	$result = mysqli_query($con, $query);
	//set main array and variable for lopp and array names
	$data = []; 
	$vari = 0;
	//loop one
	while ($row =mysqli_fetch_array($result)) {
		$user[$vari] = [];
		$recordings = [];
		array_push($user[$vari], "user_id" => $row['user_id'], "name" => $row['name'], "dob" => $row['dob'], "gender" => $row['gender'], "interest" => $row['interest'], "postcode" => $row['postcode'], "photo_url" => $row['photo_url'], "range" => $row['range'], "min" => $row['min'], "max" => $row['max']);
		
		$cur_use = $row['user_id'];

		$query2 = "SELECT * FROM `recordings` WHERE `speaker_id` = $cur_use";

		$result2 = mysqli_query($con, $query2);
		//loop two 
		while ($row2 =mysqli_fetch_array($result2)) {
			$u_rec[$vari] = [];
			array_push($u_rec[$vari], $row2['recording_id'], $row2['speaker_id'], $row2['position'], $row2['length'], $row2['asset_url'], $row2['timestamp']);

			array_push($recordings, $u_rec[$vari]);
			
		}

		array_push($user[$vari], $recordings);


		array_push($data, $user[$vari]);
		
		$vari = $vari + 1; 
	}

	print_r($data);

?>
