<?php
$servername = "localhost";
$username = "benax_iot_root";
$password = "Td(FAdeZ9xp3";
$dbname = "benax_iot";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else {

$sql = "SELECT * from leila_sensordata";
$result = $conn -> query($sql);
// $temp = $result -> fetch_assoc();
}

?>