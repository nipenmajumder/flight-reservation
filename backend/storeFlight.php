<?php

include 'connection.php';

$id = $_POST['id'];
$type = $_POST['type'];
$capacity = $_POST['capacity'];
$mfg_date = $_POST['mfg_date'];

if ($id) {
    $sql = "UPDATE aircrafts SET type='$type', capacity='$capacity', capacity='$capacity' WHERE id=$id";
} else {
    $sql = "INSERT INTO aircrafts (type, capacity, mfg_date)
        VALUES ('$type', '$capacity', '$mfg_date')";
}

if ($conn->query($sql) === TRUE) {
    echo 'Stored Successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



