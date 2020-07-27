<?php

include "db.php";

$data = json_decode(file_get_contents('php://input'));

$request = strtolower($conn->real_escape_string($data->btnName));
$username = $conn->real_escape_string($data->username);
$email = $conn->real_escape_string($data->email);
$pass1 = $conn->real_escape_string($data->pass1);
$pass2 = $conn->real_escape_string($data->pass2);

    $check = "SELECT * FROM tbluser WHERE username = '$username'";

    $result=mysqli_query(data->$check);

    if($result){

        if( mysqli_num_rows($result) > 0)
        {
               
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
    }else{

        if($pass1==$pass2)
            {           //Create User
                $pass1=md5($password); //hash password before storing for security purposes
                $query="INSERT INTO tbluser(username, email, password ) VALUES('$username','$email','$password')";
                mysqli_query($data->$query); 
                $_SESSION['message']="You are now logged in";
                $_SESSION['username']=$username;
                header("location:index.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";  
            }
    }
$execute = $conn->query($query);