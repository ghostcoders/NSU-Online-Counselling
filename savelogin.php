<?php
	
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	

	$query = "INSERT INTO LoginForm (username,password,email) 
		VALUES ('".$username."','".$password."', '".$email."')";
    

	if ($conn->query($query) === TRUE) {
		echo "New record created successfully-----";
	} else {
		echo "-----Error: ";
	}

	$conn->close();
	
?>

