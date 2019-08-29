<?php
	include_once "connection.php";

	$sql = "select *
	from google_sign_in , slide , sign_in
	where google_sign_in.id=slide.id and sign_in.email=google_sign_in.email;

	
	$result = $conn->query($sql);

	if ($result->num_rows> 0) {
		while ($row=$result->fetch_assoc()) {
			echo "Your form : <br> " . $row['first_name']. " - " . $row["last_name"] ."<br>";
		}
	}
	 else {
		echo "0 results";
	}
	$conn->close();
?>