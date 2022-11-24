<?php

include 'connection.php';

$departure = $_GET['departure'];
$destination = $_GET['destination'];

$sql = "SELECT * FROM aircrafts WHERE departure = '$departure' AND destination ='$destination';";

$result = mysqli_query($conn, $sql);
$return_arr = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "capacity" => $row['capacity'],
            "departure" => $row['departure'],
            "destination" => $row['destination'],
            "fare" => $row['fare'],
        );
    }
}

echo json_encode($return_arr);