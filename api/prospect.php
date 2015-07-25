<?php 

	require("../../config.php");

	header('Content-Type: application/json');

	$user_id = $_GET["user_id"];

	$query = "SELECT * FROM `users` WHERE `user_id` <> $user_id";

	$result = mysqli_query($con, $query);

	$data = []; 
	$vari = 0;
	
	while ($row =mysqli_fetch_array($result)) {
		$user[$vari] = [];
		$recordings = [];
		array_push($user[$vari], $row['user_id'], $row['name'], $row['dob'], $row['gender'], $row['interest'], $row['postcode'], $row['photo_url'], $row['range'], $row['min'], $row['max'], $recordings);
		
		$cur_use = $row['user_id'];

		$query2 = "SELECT * FROM `recordings` WHERE `user_id` = $cur_use";

		$result2 = mysqli_query($con, $query2);

		while ($row2 =mysqli_fetch_array($result2)) {
		$u_rec[$vari] = [];
		array_push($u_rec[$vari], 'some stuff');

		array_push($recordings, $u_rec);
		}

		array_push($data, $$user[$vari]);
		print_r($data); 
		$vari = $vari + 1; 
	}
?>
