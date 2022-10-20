<?php
$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "iot_project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {

$sql = "SELECT * from temperature_analysis";
$result = $conn -> query($sql);
// $temp = $result -> fetch_assoc();
}

?>