<?php
	error_reporting(E_ALL ^ E_NOTICE);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

        function test_input($data){
		$data=trim($data);
		$data=stripcslashes($data);
		$data=htmlspecialchars($data);
		return $data;	
	}
	if(isset($_POST['save'])){
		$NAME=test_input($_POST['NAME']);	
		$EMAIL=test_input($_POST['EMAIL']);
		$AGE=test_input($_POST['AGE']);	
		$GENDER=test_input($_POST['GENDER']);
		$SEAT_NO=test_input($_POST['SEAT_NO']);
		$PASSENGER_ID=test_input($_POST['PASSENGER_ID']);
			$query="INSERT INTO passenger(NAME,EMAIL,AGE,GENDER,SEAT_NO,PASSENGER_ID) VALUES('$NAME','$EMAIL','$AGE','$GENDER','$SEAT_NO','$PASSENGER_ID')";
		$run_query=mysqli_query($conn,$query);
		if($run_query){	
				header('Location:passenger.php');
				@$msg="Record has been added successfully";	
			}
			/*else{
				@$msg="Error ".$query." ".mysqli_error();	
			}*/
	}
		
			
			
				
			
?>
<!doctype html>

	<html>
	
		<head>
		
			<title>Admin Panel</title>
			
			
		</head>
		
		<body>
		
						<center>
					<form  method="post" enctype="multipart/form-data" >
					<div class="content">
						
			
						<div class="form_content">
								<label>ID:</label>
								<input type="text" name="ID" class="input_content">
								
						</div>
						
						
							<div class="form_content">
								<label>NAME : </label>
								<input type="text" name="NAME" class="input_content">
								
						</div>
												<div class="form_content">
								<label>EMAIL : </label>
								<input type="text" name="EMAIL" class="input_content">
								
						</div>
												<div class="form_content">
								<label>AGE : </label>
								<input type="text" name="AGE" class="input_content">
								
						</div>
						
						
												<div class="form_content">
								<label>GENDER : </label>
								<input type="text" name="GENDER" class="input_content">
								
						</div>
						
						
						
												<div class="form_content">
								<label>SEAT_NO : </label>
								<input type="text" name="SEAT_NO" class="input_content">
								
						</div>
						
						
						
						
												<div class="form_content">
								<label>PASSENGER_ID : </label>
								<input type="text" name="PASSENGER_ID" class="input_content">
								
						</div>
						
                    <div class="clear"></div><br>
                    <input type="submit"  value="SUBMIT" name="save"  >
					
					
					
					<br>
                </form>
				</div>
				
                    <div class="clear"></div>	
		
			</div>
						
			</div>
				</center>
			</section>
			<!-- Section End -->
			
		</body>
	
	</html>