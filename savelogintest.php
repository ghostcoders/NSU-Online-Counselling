<?php

session_start();
header('location:savelogintest.php');
include_once "connection.php";

mysqli_select_db( $conn, 'nsu online counselling');

    $username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];

	$s = "select * from sign_in where username = '$username'";

	$result = mysqli_query($conn, $s);

    $num = mysqli_num_rows($result);

    if($num == 1) {
	echo " This username already taken";
     }
     else {
     	$reg = "INSERT INTO sign_in (username,password,email) 
		VALUES ('".$username."','".$password."', '".$email."')";
	   mysqli_query($conn , $reg);
}

?>