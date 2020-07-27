<?php
	$conn=mysqli_connect("localhost", "root", "", "projectdb");
 
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>