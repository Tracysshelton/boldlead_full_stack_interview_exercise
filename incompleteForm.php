<?php

	//database connection
	include 'db_connection.php';
	
	//Connection established
	$conn = DB_Connection();
	
	//Retrive all data from the form
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
	$query = "INSERT into newleads(fname, lname, email, phone_number, address, city, state, zip, home_sqft) VALUES('".$fname."','".$lname."','".$email."','".$phone_number."','".$address."', '".$city."', '".$state."', '".$zip."','".$home_sqft."')";
	
	//Close the connection
	$conn->close();

	
?>