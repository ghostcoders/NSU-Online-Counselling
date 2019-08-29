<?php
session_start();
include_once "connection.php";
mysqli_select_db( $conn, 'nsu online counselling');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from sign_in where username = '$username' && password = '$password'";

$result = mysqli_query($conn, $s);

$num = mysqli_num_rows($result);

if($num == 1) {
	
	$_SESSION['username'] = $username;
	header('location:home.php');

	//$result = $conn->query("SELECT * FROM sign_in WHERE username = '$username' AND password = '$password'");
	//while($row = $result->fetch_assoc()){
	//	$page =  $row['page'];
	//}
	//header('location:'.$page);
}
else {
	//echo "Invalid username and/or password";
	header('location:savelogintest.php');
	//header('location:savelogintest.<!DOCTYPE html>
	//<html>
	//<head>
	//	<title></title>
	//</head>
	//<body>
	
	//</body>
	//</html>');
}