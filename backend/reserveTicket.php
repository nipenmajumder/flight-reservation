<?php
include 'connection.php';


$date = $_POST['date'];
$passenger_id = $_POST['passenger_id'];
$aircraft_id = $_POST['aircraft_id'];

$sql = "INSERT INTO ticket (booking_date, passenger_id, aircraft_id) VALUES ('$date', '$passenger_id', '$aircraft_id')";

if ($conn->query($sql) === TRUE) {
    echo 'success';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();