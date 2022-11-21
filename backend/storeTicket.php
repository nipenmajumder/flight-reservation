<?php

include 'connection.php';


$route_id = $_POST['route_id'];
$passenger_id = $_POST['passenger_id'];
$aircraft_id = $_POST['aircraft_id'];
$booking_date = $_POST['booking_date'];

$sql = "INSERT INTO transactions (booking_date, passenger_id, aircraft_id, route_id)
        VALUES ('$booking_date', '$passenger_id', '$aircraft_id', '$route_id')";
if ($conn->query($sql) === TRUE) {
    echo 'Stored Successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



