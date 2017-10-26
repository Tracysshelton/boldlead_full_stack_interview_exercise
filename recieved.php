<?php

	//database connection
	include 'db_connection.php';
	
	//Connection established and to the table
	$conn = DB_Connection();
	
	//escape variables for security
	$fname = $conn->real_escape_string($_POST['fname']);
	$lname = $conn->real_escape_string($_POST['lname']);
	$email = $conn->real_escape_string($_POST['email']);
	$phone_number = $conn->real_escape_string($_POST['phone_number']);
	$address = $conn->real_escape_string($_POST['address']);
	$city = $conn->real_escape_string($_POST['city']);
	$state = $conn->real_escape_string($_POST['state']);
	$zip = $conn->real_escape_string($_POST['zip']);
	$home_sqft = $conn->real_escape_string($_POST['home_sqft']);
	
	//insert the form entries into the database
	$query = "INSERT into newleads(fname, lname, email, phone_number, address, city, state, zip, home_sqft) VALUES('".$fname."','".$lname."','".$email."','".$phone_number."','".$address."','".$city."','".$state."','".$zip."','".$home_sqft."')";
	
	//If Successful
	$success = $conn->query($query);
	
	//check to see if the inserted into the database
	if(!$success){
		die("There was an error, please try again." . $conn->error);
	}
	
	//if inserted into the database then reutnr a message to the user of :
	echo "<p style=\"text-align:center; width: 300px;margin:35px auto 0 auto;font-size:20px;\">We have received your request,<br />and will send you your free Comparative Marketing Analysis.</p>";
	
	//Close the connection to the database
	$conn->close();
	
?>