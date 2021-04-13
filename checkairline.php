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
<title>Airline Database-Check Airline</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Here are all the available flights from the airline you chose:</h1>

	<form action="airline.php" id = home></form>
	<button class="button" type="submit" form="home" value="Return to home page">Return to home page</button>
	<br></br>
   
<table style = "width:100%" id = "t1">
<?php
    $airline = $_POST["Airline"];
    //echo $airline;
    $day = $_POST["Day"];
    //echo $day;
    $query = 'SELECT airlineCode, departs.flightNumber, A.city, B.city FROM flight, departs JOIN arrives ON departs.flightNumber = arrives.flightNumber 
    LEFT JOIN airport A on A.airportCode = departs.airportCode LEFT JOIN airport B on B.airportCode = arrives.airportCode
    JOIN flight_day WHERE departs.flightNumber = flight_day.flightNumber AND flightDay = "'.$day.'" AND flight.airlineCode = "'.$airline.'"';
    $result = $connection->query($query);
	
	// if ($day = "Sunday")
	// {
		// echo "<h2>There are no available flights 1</h2>";
	// }
	//$day = "";
	
    if (!$result || $result->rowCount() < 1) {
	    echo "<h2>There are no available flights</h2>";
    }
   
	else
	{
		echo "<tr> <th>Flight Number</th> <th>Departing city</th> <th>Arriving city</th> </tr>";
		while ($row=$result->fetch()) {
	    echo "<tr><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
		}
    }
	
?>

<!--

   //$airline= $_POST["Airline"];
   $query = 'SELECT * FROM flight, arrives WHERE flight.flightNumber=arrives.flightNumber';
   $result=$connection->query($query);
    
	echo "<tr> <th>Flight Number</th> <th>Scheduled Arrival Time</th> <th>Actual Arrival Time</th> </tr>";
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["flightNumber"]."</td><td>".$row["scheduleArrive"]."</td><td>".$row["actualArrive"]."</td></tr>";
    }

-->

</table>
<?php
   $connection = NULL;
?>
</body>
</html>