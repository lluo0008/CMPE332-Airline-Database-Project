<!DOCTYPE html>
<html>
<head>
<style>
html *{
	font-family: Arial;
}
body {
  background-image: url('background.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
}
.header {
  padding: 40px;
  text-align: center;
  background: #6697ba;
  color: white;
  font-size: 30px;
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
.column {
	float:left;
	width: 50%;
	padding: 10px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
    <meta charset="utf-8">
    <title>airline</title>
</head>
<body>
<?php
include 'connectdb.php';
?>

<div class = "header">
    <h1>Welcome to Lawrence's Airline Database</h1>
</div>

<div>
	
    <h2>All flights</h2>
	<form action="getflights.php">
		<input class = "button" type="submit" value="Click to check all flights">
	</form>
	<br></br>
	
	<h2>Check flights from an airline</h2>
	<form action="checkairline.php" method = "post">
		<h3>Airline</h3>
		<input type="radio" id="AC" value="AC" name="Airline">
		<label for="AC">AC (Air Canada)</label><br>
		<input type="radio" id="AF" value="AF" name="Airline">
		<label for="AF">AF (Air France)</label><br>
		<input type="radio" id="CA" value="CA" name="Airline">
		<label for="CA">CA (Air China)</label><br>
		<h3>Day</h3>
		<input type="radio" id="Monday" value="Monday" name="Day">
		<label for="Monday">Monday</label><br>
		<input type="radio" id="Tuesday" value="Tuesday" name="Day">
		<label for="Tuesday">Tuesday</label><br>
		<input type="radio" id="Wednesday" value="Wednesday" name="Day">
		<label for="Wednesday">Wednesday</label><br>
		<input type="radio" id="Thursday" value="Thursday" name="Day">
		<label for="Thursday">Thursday</label><br>
		<input type="radio" id="Friday" value="Friday" name="Day">
		<label for="Friday">Friday</label><br>
		<input type="radio" id="Saturday" value="Saturday" name="Day">
		<label for="Saturday">Saturday</label><br>
		<input type="radio" id="Sunday" value="Sunday" name="Day">
		<label for="Sunday">Sunday</label><br>
		<br></br>
		<input class="button" type="submit" value="Check available flights!">
	</form>
	
	
	
	<form action = "update.php" method = "post">
	<h2>Update the departure time of a flight</h2>
		<label for="departTime1">Enter the flight number that you wish to update: </label>
		<input type="text" id="departTime1" name="departTime1"><br>
		
		<label for="departTime2">Enter the new departure time: </label>
		<input type="text" id="departTime2" name="departTime2"><br>
		
		<input class="button" type="submit" value="Submit">
	</form>
	
	
	
	
	
	<form action = "average.php" method = "post">
	<h2>Check the average number of seats available on all flights on a day</h2>
		<input type="radio" id="Monday" value="Monday" name="day">
		<label for="Monday">Monday</label><br>
		<input type="radio" id="Tuesday" value="Tuesday" name="day">
		<label for="Tuesday">Tuesday</label><br>
		<input type="radio" id="Wednesday" value="Wednesday" name="day">
		<label for="Wednesday">Wednesday</label><br>
		<input type="radio" id="Thursday" value="Thursday" name="day">
		<label for="Thursday">Thursday</label><br>
		<input type="radio" id="Friday" value="Friday" name="day">
		<label for="Friday">Friday</label><br>
		<input type="radio" id="Saturday" value="Saturday" name="day">
		<label for="Saturday">Saturday</label><br>
		<input type="radio" id="Sunday" value="Sunday" name="day">
		<label for="Sunday">Sunday</label><br>
		
		
		<input class="button" type="submit" value="Submit">
	</form>
	
	
	
</div>
	<!--
	<?php
	include 'getdata.php';
	?>
	-->
	
	
	<?php
	$connection = NULL;
	?>
    <!-- <ol>
        <li>F-22 Raptor</li>
        <li>Su-34 Fullback</li>
        <li>A-10 Warthog</li>
        <li>AC-130 Gunship</li>
		<li>787 Dreamliner</li>
    </ol> -->
</body>
</html>