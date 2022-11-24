<?php

include 'connection.php';


$id = $_POST['id'];
$name = $_POST['name'];
$capacity = $_POST['capacity'];
$departure = $_POST['departure'];
$destination = $_POST['destination'];
$fare = $_POST['fare'];
$departure_time = $_POST['departure_time'];

if ($id) {
    $sql = "UPDATE aircrafts
    SET name='$name', capacity='$capacity', departure='$departure',
        destination='$destination', fare='$fare',departure_time='$leave_time',WHERE id=$id";
} else {
    $sql = "INSERT INTO aircrafts (name, capacity, departure, destination, fare, departure_time)
    VALUES ('$name', '$capacity', '$departure','$destination','$fare','$leave_time')";
}
var_dump($sql);
if ($conn->query($sql) === TRUE) {
    echo 'Stored Successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



