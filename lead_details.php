<!DOCTYPE html>
<html>
	<head>
		<title>Lead Details</title>
		
		<!--Style for the detail list-->
		<style>
			h1{
				text-align:center;
				font-size:20px;
			}
			#wrapper{
				width:300Px;
				border:black 2px solid;
				padding: 10px;
				margin:25px auto 0 auto;
			}
		</style>	
	</head>
	<body>
		<div id="wrapper">
			<h1>Leads from the CMA Form</h1>
			<?php
			
				//database connection
				include 'db_connection.php';
	
				//Connection established
				$conn = DB_Connection();
				
				//The id of the selected user
				if(isset($_GET['id'])){
					$id = $_GET['id'];
					
					//Selected User	
					$sql = "SELECT * FROM newleads where id=$id";
					
					//Reading the Query Data
					$query = mysqli_query($conn, $sql);
					
					//echo out the detail from the chosen id
					while ($row = mysqli_fetch_array($query)){
						?>				
						<!-- Displaying Data Read From Database -->
						<span>Name:</span> <?php echo $row['fname']; 
						echo "&nbsp;&nbsp;";
						echo $row['lname'];?>
						<br />
						<span>E-mail:</span> <?php echo $row['email']; ?>
						<br />
						<span>Phone Number:</span> <?php echo $row['phone_number']; ?>
						<br />
						<span>Address:</span> <?php echo $row['address']; ?>
						<br />
						<span>City:</span> <?php echo $row['city']; ?>
						<br />
						<span>state:</span> <?php echo $row['state']; ?>
						<br />
						<span>Zip Code:</span> <?php echo $row['zip']; ?>
						<br />
						<span>Home SQFT:</span> <?php echo $row['home_sqft']; ?>
						<?php
					}
				}

				//Close Connection	
				mysqli_close($conn);
			?>
		</div>
	</body>
</html>