<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard</title>
		
		<!--Dashboard styling-->
		<style>
			h1{
				text-align:center;
				font-size:20px;
			}
			#wrapper{
				width:250px;
				margin: 25px auto 0 auto;
			}
		</style>
	</head>
	<body>
	
		<!--Wrapper for the dashboard contain-->
		<div id="wrapper">
			<h1>Leads from the CMA Form</h1>
			<?php
			
				//database connection
				include 'db_connection.php';
	
				//Connection established
				$conn = DB_Connection();
				
				//Select the table
				$sql = "SELECT * FROM newleads ORDER BY lname ASC";
				
				//Reading the Query Data
				$query = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_array($query)){
					?>
					
					<!-- Displaying Data Read From Database -->
					<div style="width:250px;border:black 1px solid;margin:25px auto 0 auto;padding:10px;">
					<span>Name:</span> <?php echo $row['fname']; 
					echo "&nbsp;&nbsp;";
					echo $row['lname'];?>
					<br />
					<span>E-mail:</span> <?php echo $row['email']; ?>
					<br />
					<span>Date Submitted:</span> <?php echo $row['created_at']; ?>
					<br />
					<a href="lead_details.php?id=<?php echo $row['id']; ?>">See Details</a>
					</div>
					<?php
				}
				
				//Close connection
				mysqli_close($conn);
			?>
		</div>
	</body>
</html>
