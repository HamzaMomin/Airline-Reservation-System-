<?php 

include "passenger.php";

	$t = $_POST['NAME'];
	$d = $_POST['EMAIL'];
	$l = $_POST['AGE'];
	$a = $_POST['GENDER'];
	$b = $_POST['SEAT_NO'];
	$c = $_POST['PASSENGER_ID'];	
	
	if (isset($_POST['submit'])) {
		$insert = mysql_query("INSERT INTO passenger (NAME,EMAIL,AGE,GENDER,SEAT_NO,PASSENGER_ID) VALUES ('".$t."','".$d."','".$l."','".$a."','".$b."','".$c."')");
		if ($insert) {
			echo "<h3>Insert is Done</h3>";
		}	
		else 
			echo "no";
	}

	echo "
		<form action='".$_SERVER['PHP_SELF']."' method='post'>
		title : <input type='text' name='name' /><br>
		desc  : <textarea rows='5' cols='55' name='desc'></textarea><br>
		link  : <input type='text' name='link' />
		<input type='submit' name='submit' value='Add link' />
		</form>
	";


?>