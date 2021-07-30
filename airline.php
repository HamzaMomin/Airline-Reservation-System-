
<!DOCTYPE html>
<html>
<body>
 <center><h1>AIRLINE RESEVERATION SYSTEM</h2></center>
 <center><h3>AirLine Table data</h3></center>


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

$sql = "SELECT * FROM airline";

echo "<center>";
echo "<table border='1'>


<tr body style='background-color:lightgray'>

<th>ID</th>

<th>AIRLINE_NAME</th>

<th>DEPARTURE_CITY</th>

<th>DESTINATION_CITY</th>

<th>FLIGHT_DATE</th>

<th>TICKET_PRICE</th>

<th>PAYMENT_STATUS</th>

<th>TICKET_NO</th>

<th>PASSENGER_NAME</th>

<th>GENDER</th>

<th>AGE</th>

<th>EMAIL</th>

</tr>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{ 	
		
		echo "<tr>";
        echo "<td> ". $row["ID"] ."</td>";
		echo "<td> ". $row["AirLine_Name"] ."</td>";
		echo "<td> ". $row["Departure_City"] ."</td>";
		echo "<td> ". $row["Destination_City"] ."</td>";
		echo "<td> ". $row["FLIGHT_DATE"] ."</td>";
		echo "<td> ". $row["Ticket_Price"] ."</td>";
		echo "<td> ". $row["Payment_Status"] ."</td>";
		echo "<td> ". $row["Ticket_No"] ."</td>";
		echo "<td> ". $row["Passenger_Name"] ."</td>";
		echo "<td> ". $row["Gender"] ."</td>";
		echo "<td> ". $row["AGE"] ."</td>";
		echo "<td> ". $row["Email"] ."</td>";
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

