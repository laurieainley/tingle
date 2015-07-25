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
		array_push($user, $row['user_id'], $row['name'], $row['dob'], $row['gender'], $row['interest'], $row['postcode'], $row['photo_url'], $row['range'], $row['min'], $row['max']);
		
		print_r($user[$vari]); 
		$vari = $vari + 1; 
	}
?>
