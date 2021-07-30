<!DOCTYPE html>
<html lang="en" >
<head>
<style>
.button {
  border: 2px solid darkblue;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 2px;
  cursor: pointer;
   
    width:100%;
    text-align: center;
	display: inline-block;
}

.button1 {background-color: blue;} 

  .body {
  background-image: url('ARL.PNG');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  }
  
.BOX{
	
	content: "";
  clear: both;
  display: table;
  padding: 10px 24px; 
 
  
	
}

</style>
  
   <Center> 
   
   <u><h1>AirLine Reservation System Database</h1></u>  
   <h4>Group Members : </h4>
    <p><b>Hamza-Momin 70070802</p>
	<p>Younas-Shami 70071076</b></p>
	
   </Center>
</head>
<body class="body">

	 <center>
	
	<div class="BOX">
	
	
<form action="passanger.php">
  
  <button class="button button1"  type="submit">Passanger Table</button>
  
</form>

  
<form action="ticket.php">
  
  <button  class="button button1"  type="submit">Ticket Table</button>
  
</form>


<form action="departure.php">
  
  <button  class="button button1"   type="submit">Departure Table</button>
  
</form>


<form action="destination.php">
  
  <button  class="button button1"    type="submit">Destination Table</button>
  
</form>


<form action="airline.php">
  
  <button   class="button button1"   type="submit">AirLine Table</button>
  
</form>


<form action="flight.php">
  
  <button class="button button1"    type="submit">Flight Table</button>
  
</form>
</div>

 </center>
</body>
</html>