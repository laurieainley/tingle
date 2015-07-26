<?php 
	require("../../config.php");

	header('Content-Type: application/json');

	$data = [];
	$vari = 0;

	$user_id = $_GET["user_id"];
	//first query 
	$query = "SELECT * FROM `matches` WHERE `target_id` = $user_id AND `mutual` = 1";

	$result = mysqli_query($con, $query);

	while ($row =mysqli_fetch_array($result)){
		$user[$vari] = [];

		array_push($user[$vari], $row['match_id'], $row['target_id'], $row['suitor_id'], $row['mutual'], $row['rejector_id'], $row['timestamp'], $row['reject_timestamp']);

		array_push($data, $user[$vari]);

		$vari = $vari + 1; 
	}
	print_r($data);
?>