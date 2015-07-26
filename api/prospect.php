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
		array_push($user[$vari], $row['user_id'], $row['name'], $row['dob'], $row['gender'], $row['interest'], $row['postcode'], $row['photo_url'], $row['range'], $row['min'], $row['max'], $recordings);
		print_r($user[$vari]);
		$cur_use = $row['user_id'];

		$query2 = "SELECT * FROM `recordings` WHERE `speaker_id` = $cur_use";

		$result2 = mysqli_query($con, $query2);
		//loop two 
		while ($row2 =mysqli_fetch_array($result2)) {
			$u_rec[$vari] = [];
			array_push($u_rec[$vari], 'some stuff');

			array_push($recordings, $u_rec);
			
			print_r($user[$vari]);
			
		}

		array_push($data, $$user[$vari]);
		
		$vari = $vari + 1; 
	}
?>
