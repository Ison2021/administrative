<?php
	$conn = mysqli_connect("localhost", "root", "", "administrative-management-system");
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>