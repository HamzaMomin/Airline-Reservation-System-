
<!DOCTYPE html>
<html>
<body>
 <center><h1>AIRLINE RESEVERATION SYSTEM</h2></center>
 <center><h3>Destination Table data</h3></center>


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

$sql = "SELECT * FROM destination";

echo "<center>";
echo "<table border='1'>


<tr body style='background-color:lightgreen'>

<th>DESTINATION_CITY</th>

<th>PASSENGER_ID</th>

<th>SEAT_NO</th>

<th>FLIGHT_DATE</th>




</tr>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{ 	
		
		echo "<tr>";
        echo "<td> ". $row["Destination_City"] ."</td>";
		echo "<td> ". $row["Passenger_ID"] ."</td>";
		echo "<td> ". $row["Seat_NO"] ."</td>";
		echo "<td> ". $row["Flight_Date"] ."</td>";
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
  
  <button type="submit">Back To Main Menu</button>
  
</form>
</body>
</html>

