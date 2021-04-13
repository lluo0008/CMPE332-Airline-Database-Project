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
	$flight = $_POST["departTime1"];
	$dTime = $_POST["departTime2"];
	//echo $dTime; 
	$query = 'UPDATE departs SET scheduleDepart = "'.$dTime.'", actualDepart = "'.$dTime.'" WHERE flightNumber = "'.$flight.'"';
	
	$statement = $connection->prepare($query);
	$success = $statement->execute();
	
	if (!$success)
	{
		echo '<h2>update was not successful</h2>';
	}
	else echo '<h2>Successfully updated departure time</h2>';
?>

<form action="airline.php" id = home></form>
	<button class="button" type="submit" form="home" value="Return to home page">Return to home page</button>
	<br></br>

<?php
   $connection = NULL;
?>
</body>
</html>