<!DOCTYPE html>
<html>
<body>
 <center><h1>AIRLINE RESEVERATION SYSTEM</h2></center>
 <center><h3>Departure Table data</h3></center>


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

$sql = "SELECT * FROM departure";

echo "<center>";
echo "<table border='1'>


<tr body style='background-color:skyblue'>

<th>TICKET_NO </th>

<th>PASSENGER_ID </th>

<th>SEAT_NO </th>

<th>FLIGHT_DATE </th>

<th>DEPARTURE_CITY </th>

</tr>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{ 	
		
		echo "<tr>";
        echo "<td> ". $row["TICKET_NO"] ."</td>";
		echo "<td> ". $row["PASSENGER_ID"] ."</td>";
		echo "<td> ". $row["SEAT_NO"] ."</td>";
		echo "<td> ". $row["FLIGHT_DATE"] ."</td>";
		echo "<td> ". $row["Departure_City"]."</td>";
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

