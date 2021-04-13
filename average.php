<!DOCTYPE html>
<html>
<head>
<style>
html *{
	font-family: Arial;
}
body {
  background-image: url('background.jpg');
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
th {
	text-align: left;
}
#t1 tr:nth-child(even) {
  background-color: #eee;
}
#t1 tr:nth-child(odd) {
 background-color: #fff;
}
#t1 th {
  background-color: black;
  color: white;
}
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  
  background-color: white; 
  color: black; 
  border: 2px solid #828282;
}
.button:hover {
  background-color: #828282;
  color: white;
}
</style>
<meta charset="utf-8">
<title>Airline Database-Flights</title>
</head>
<body>
<?php
include 'connectdb.php';
?>



<?php
	$day = $_POST["day"];
	//echo $dTime; 
	$query = 'SELECT AVG(seats) FROM airplane_type, airplane, flight_day, flight WHERE flightDay = "'.$day.'" AND 
	flight_day.flightNumber = flight.flightNumber AND flight.planeID = airplane.planeID AND airplane.type = airplane_type.type';
	
	$result=$connection->query($query);
	$array = $result->fetch();
	echo '<h2>The average number of seats on ' .$day. ' is ' .$array[0]. '</h2>';
?>

	<form action="airline.php" id = home></form>
	<button class="button" type="submit" form="home" value="Return to home page">Return to home page</button>
	<br></br>

<?php
   $connection = NULL;
?>
</body>
</html>