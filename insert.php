<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM passenger";
echo "<center>";
echo "<table border='1'>


<tr body style='background-color:pink'>

<th >NAME</th>

<th>EMAIL</th>

<th>AGE</th>

<th>GENDER</th>

<th>SEAT_NO</th>

<th>PASSENGER_ID</th>

<th>Insert</th>
</tr>";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) 
	{ 	
		$PASSENGER_ID=$row['PASSENGER_ID'];
		
		echo "<tr>";
        echo "<td> ". $row["NAME"] ."</td>";
		echo "<td> ". $row["EMAIL"] ."</td>";
		echo "<td> ". $row["AGE"] ."</td>";
		echo "<td> ". $row["GENDER"] ."</td>";
		echo "<td> ". $row["SEAT_NO"] ."</td>";
		echo "<td> ". $row["PASSENGER_ID"] ."</td>";
		?>
		<td><a href="form.php">add</a></td>
		<?php
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


