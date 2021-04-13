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
<h1>Here are all the current flights:</h1>
	<form action="addflight.php" id = newflight></form>
	<button class="button" type="submit" form="newflight" value="Click to add a new flight">Click to add a new flight</button>
	
	<form action="airline.php" id = home></form>
	<button class="button" type="submit" form="home" value="Return to home page">Return to home page</button>
	<br></br>
	
<table style = "width:100%" id = "t1">


<?php
	error_reporting(E_ERROR | E_PARSE);
    $airline_in = $_POST["Airline"];
    $plane_in = $_POST["plane"];
    $depart_in = $_POST["depart"];
    $arrive_in = $_POST["arrive"];
    $day_in = $_POST["Day"];
    $flightNumber_in = $_POST["flightNumber"];
	$time_in = $_POST["arrivalTime"];
   
    /* echo $airline_in;
    echo $plane_in;
    echo $depart_in;
    echo $arrive_in;
    echo $day_in;
    echo $flightNumber_in; */
   
    if ($airline_in && $plane_in && $depart_in && $arrive_in && $day_in && $flightNumber_in) 
    {
	    $insert_flight = 'INSERT INTO flight(flightNumber, airlineCode, planeID) VALUES ("'.$flightNumber_in.'", "'.$airline_in.'", "'.$plane_in.'")';
		$insert_arrive = 'INSERT INTO arrives VALUES ("'.$flightNumber_in.'", "'.$arrive_in.'", "'.$time_in.'", "'.$time_in.'")';
		$insert_depart = 'INSERT INTO departs VALUES ("'.$flightNumber_in.'", "'.$depart_in.'", 0, 0)';
		$insert_day = 'INSERT INTO flight_day VALUES ("'.$flightNumber_in.'", "'.$day_in.'")';
		
		$statement1 = $connection->prepare($insert_flight);
		$statement2 = $connection->prepare($insert_arrive);
		$statement3 = $connection->prepare($insert_depart);
		$statement4 = $connection->prepare($insert_day);
		
		$statement1->execute();
		$statement2->execute();
		$statement3->execute();
		$statement4->execute();
    }
   
    $query = 'SELECT * FROM flight, arrives WHERE flight.flightNumber=arrives.flightNumber';
    $result=$connection->query($query);
    
	echo "<tr> <th>Flight Number</th> <th>Scheduled Arrival Time</th> <th>Actual Arrival Time</th> </tr>";
    while ($row=$result->fetch()) {
	echo "<tr><td>".$row["flightNumber"]."</td><td>".$row["scheduleArrive"]."</td><td>".$row["actualArrive"]."</td></tr>";
    }
?>
</table>
<?php
    $connection = NULL;
?>
</body>
</html>