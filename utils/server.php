<?php

include('connect.php');

$method = $_SERVER['REQUEST_METHOD'];


if($method === 'GET') {
$devices = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
     $devices[] = $row;
  }
    print_r(json_encode($devices)); // return the data
} else {
  echo "0 results";
}
}
 ?>