<?php

include('connect.php');

$temp_array = array();
$device_array = array();
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    array_push($temp_array, $row['temperature']);
    array_push($device_array, $row['device']);

  }
   return $result;
} else {
  echo "0 results";
}
 ?>