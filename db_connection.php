<?php

	/* This file the connection information for the leads database */

	function DB_Connection(){

		//Connecting to the leads database var
		$servername = "localhost";
		$username = "root"; //enter in username
		$password = ""; //enter in password
		$database = "leads";
	
		//Create the connection
		$conn = new mysqli($servername, $username, $password, $database) or die($conn->connect_error);
	
		//Returns the connection
		return $conn;
	
	}
?>