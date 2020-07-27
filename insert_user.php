<?php

include "db.php";

$data = json_decode(file_get_contents('php://input'));

$request = strtolower($conn->real_escape_string($data->btnName));
$username = $conn->real_escape_string($data->username);
$email = $conn->real_escape_string($data->email);
$pass1 = $conn->real_escape_string($data->pass1);
$pass2 = $conn->real_escape_string($data->pass2);

		$pass1=md5($pass1);

		switch ($request)
		{
			case 'register':
			$query = "INSERT INTO students(username,email,password) VALUES ('".$username"','".$email."','".$pass1."')";
			break;
			default:
				null;
		}
	=
$execute = $conn->query($query);