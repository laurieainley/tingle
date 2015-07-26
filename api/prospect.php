<?php 

	require("../../config.php");

	header('Content-Type: application/json');

	$user_id = $_GET["user_id"];

	$query3 = "SELECT * FROM `users` WHERE `user_id` = $user_id";
	$result3 = mysqli_query($con, $query3);
	while ($row3 =mysqli_fetch_array($result3)) {
		$interest = $row3['interest'];
	}

	//first query 

	$query = "SELECT * FROM `users` WHERE `$user_id` <> `user_id` AND `$interest` = `gender`";

	$result = mysqli_query($con, $query);
	//set main array and variable for lopp and array names
	$data = []; 
	$vari = 0;
	//loop one
	while ($row =mysqli_fetch_array($result)) {
		$user[$vari] = [];
		$recordings = [];
		$user[$vari] = array("user_id" => $row['user_id'], "name" => $row['name'], "dob" => $row['dob'], "gender" => $row['gender'], "interest" => $row['interest'], "postcode" => $row['postcode'], "photo_url" => $row['photo_url'], "range" => $row['range'], "min" => $row['min'], "max" => $row['max']);
		
		$cur_use = $row['user_id'];

		$query2 = "SELECT * FROM `recordings` WHERE `speaker_id` = $cur_use";

		$result2 = mysqli_query($con, $query2);
		//loop two 
		while ($row2 =mysqli_fetch_array($result2)) {
			$u_rec[$vari] = [];
			$u_rec[$vari] = array("recording_id" => $row2['recording_id'], "speaker_id" => $row2['speaker_id'], "position" => $row2['position'], "length" => $row2['length'], "asset_url" => $row2['asset_url'], "timestamp" => $row2['timestamp']);

			array_push($recordings, $u_rec[$vari]);
			
		}

		array_push($user[$vari], $recordings);


		array_push($data, $user[$vari]);
		
		$vari = $vari + 1; 
	}

	print_r($data);

?>
