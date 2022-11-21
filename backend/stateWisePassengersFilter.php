<?php

include 'connection.php';

$stateId = $_GET['stateId'];

$sql = "SELECT passengers.id as passenger_id, name, address, age, nationality, email, mobile
        FROM passengers 
        JOIN contacts ON passengers.contact_id = contacts.id 
        WHERE contacts.state_id = '$stateId';";

$result = mysqli_query($conn, $sql);

$return_arr = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "passenger_id" => $row['passenger_id'],
            "name" => $row['name'],
            "address" => $row['address'],
            "age" => $row['age'],
            "nationality" => $row['nationality'],
            "email" => $row['email'],
            "mobile" => $row['mobile'],
        );
    }
}

echo json_encode($return_arr);