<!DOCTYPE html>
<html>
<head>
<style>


</style>
</head>
<body>
 <center><h1>AIRLINE RESEVERATION SYSTEM</h2></center>
 <center><h3>Passenger Table data</h3></center>

 

<?php
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

$sql = "SELECT * FROM flight";

echo "<center>";
echo "<table border='1'>


<tr body style='background-color:orange'>

<th>AIRLINE_ID</th>

<th>DEPARTURE_CITY</th>

<th>DESTINATION_CITY</th>

<th>FLIGHT_DATE</th>

<th>FLIGHT_TIME</th>

<th>FLIGHT_NAME</th>


</tr>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{ 	
		
		echo "<tr>";
        echo "<td> ". $row["AirLine_ID"] ."</td>";
		echo "<td> ". $row["Departure_City"] ."</td>";
		echo "<td> ". $row["Destination_City"] ."</td>";
		echo "<td> ". $row["FLIGHT_DATE"] ."</td>";
		echo "<td> ". $row["FLIGHT_Time"] ."</td>";
		echo "<td> ". $row["Flight_Name"] ."</td>";
		echo "</tr>";

		
    }
	echo"</center>";
	echo"</table>";
	
}
 else
 {
    echo "0 results";
}




$conn->close();
?>

<form action="main.php">
  
  
  <button type="submit" class="Button">Back To Main Menu</button>
  
</form>
</body>
</html>

