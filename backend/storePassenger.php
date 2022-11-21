<?php

include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$age = $_POST['age'];
$address = $_POST['address'];
$country = $_POST['country'];
$password = $_POST['password'];
$password_confirmation = $_POST['password_confirmation'];

$sql = "INSERT INTO passengers (name, email, mobile, age, address,country,password,password_confirmation) 
    VALUES ('$name', '$email', '$mobile', '$age', '$address', '$country', '$password', '$password_confirmation')";

if ($conn->query($sql) === TRUE) {
    echo 'Stored Successfully.';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();