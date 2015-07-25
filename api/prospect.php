<?php 

	require("../../config.php");

	$user_id = $_GET["user_id"];

	$query = "SELECT * FROM 'users' WHERE $user_id != 'user_id'";

	$result = mysqli_query($con, $query); 
	
	while ($row =mysqli_fetch_array($result)) {
		echo array($row['name']);
	}
?>
