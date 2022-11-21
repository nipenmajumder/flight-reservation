<?php

include 'connection.php';

$flightId = $_GET['flightId'];

$sql = "SELECT * FROM transactions
        JOIN passengers on transactions.passenger_id = passengers.id
        WHERE transactions.aircraft_id = '$flightId'";

$result = mysqli_query($conn, $sql);

$return_arr = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "name" => $row['name'],
            "age" => $row['age'],
            "mobile" => $row['mobile'],
            "address" => $row['address'],
            "country" => $row['country'],
        );
    }
}

echo json_encode($return_arr);



