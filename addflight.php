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
.column {
	float:left;
	width: 33.33%;
	padding: 10px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}

</style>
<meta charset="utf-8">
<title>Airline Database-adding new flight</title>

</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Adding new flight</h1>
<form action = "getflights.php" method = "post">
<div class = "row">
	<div class = "column" id = "airline">
	<h2>Choose an airline</h2>

	<!--
	<script>
	function myFunction() {
	   alert("button was clicked");
	   document.getElementById("airline").innerHTML = "AC was selected";
	}​
	document.getElementById("b11").addEventListener("click", myFunction);
	</script>
	<script>
	document.getElementById('b12').onclick = function() {
	   alert("button was clicked");
	   document.getElementById("airline").innerHTML = "My First JavaScript";
	}​;​
	</script>
	-->

		<input type="radio" id="AC" value="AC" name="Airline">
		<label for="AC">AC (Air Canada)</label><br>
		<img src="AC.png" alt="Air Canada" width="200" height="200"><br>
		<input type="radio" id="AF" value="AF" name="Airline">
		<label for="AF">AF (Air France)</label><br>
		<img src="AF.png" alt="Air France" width="200" height="200"><br>
		<input type="radio" id="CA" value="CA" name="Airline">
		<label for="CA">CA (Air China)</label><br>
		<img src="CA.png" alt="Air China" width="200" height="200"><br>

	<!--
	<input class = "button" type = "submit" id = "b12" value="AF (Air France)"/>
	<button class = "button" type = "submit" id = "b13">CA (Air China)</button>
	-->

	<h2>Choose an airplane type</h2>
		<input type="radio" id="f22" value="01" name="plane">
		<label for="f22">F-22 Raptor</label><br>
		<img src="f22.jpg" alt="F22" width="300" height="200"><br>
		
		<input type="radio" id="su34" value="02" name="plane">
		<label for="su34">Su-34 Fullback</label><br>
		<img src="su34.jpg" alt="su34" width="300" height="200"><br>
		
		<input type="radio" id="787" value="05" name="plane">
		<label for="787">787 Dreamliner</label><br>
		<img src="787.jpg" alt="787" width="300" height="200"><br>
		
		<input type="radio" id="a10" value="03" name="plane">
		<label for="a10">A-10 Warthog</label><br>
		<img src="a10.jpg" alt="a10" width="300" height="200"><br>
		
		<input type="radio" id="ac130" value="04" name="plane">
		<label for="ac130">AC-130 Gunship</label><br>
		<img src="ac130.jpg" alt="ac130" width="300" height="200"><br>
		
	</div>

	<div class="column">
		<h2>Choose a departure airport</h2>
			<input type="radio" id="ABC" value="ABC" name="depart">
			<label for="ABC">ABC</label><br>
			<input type="radio" id="XYZ" value="XYZ" name="depart">
			<label for="XYZ">XYZ</label><br>
			<input type="radio" id="YVR" value="YVR" name="depart">
			<label for="YVR">YVR</label><br>
			<input type="radio" id="YYZ" value="YYZ" name="depart">
			<label for="YYZ">YYZ</label><br>
			
		<h2>Choose an arrival airport</h2>
			<input type="radio" id="ABC" value="ABC" name="arrive">
			<label for="ABC">ABC</label><br>
			<input type="radio" id="XYZ" value="XYZ" name="arrive">
			<label for="XYZ">XYZ</label><br>
			<input type="radio" id="YVR" value="YVR" name="arrive">
			<label for="YVR">YVR</label><br>
			<input type="radio" id="YYZ" value="YYZ" name="arrive">
			<label for="YYZ">YYZ</label><br>
			
		<h2>Choose a flight day</h2>
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
			
		<h2>Enter the flight number</h2>
			<label for="flightNumber">Flight Number: </label>
			<input type="text" id="flightNumber" name="flightNumber"><br>
			
		<h2>Enter the arrival time</h2>
			<label for="arrivalTime">Arrival Time: </label>
			<input type="text" id="arrivalTime" name="arrivalTime"><br>
			
			<input class="button" type="submit" value="Submit">
	</div>
</div>
</form>
<?php
   $connection = NULL;
?>
</body>
</html>