<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "practice";
$con = mysqli_connect($dbhost,$dbuser,$dbpas,$db);
 
 return $conn;
 }

 

 
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
