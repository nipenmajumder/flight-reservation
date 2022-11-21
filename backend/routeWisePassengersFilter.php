<?php

include 'connection.php';

$routeId = $_POST['routeId'];
$fromDate = $_POST['fromDate'];
$toDate = $_POST['toDate'];

$sql = "SELECT * FROM transactions
        JOIN passengers on transactions.passenger_id = passengers.id
        JOIN contacts on passengers.contact_id = contacts.id
        WHERE route_id = '$routeId'
        AND booking_date BETWEEN '$fromDate' AND '$toDate'";

$result = mysqli_query($conn, $sql);

$return_arr = array();

if ($result && $result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "passenger_id" => $row['passenger_id'],
            "name" => $row['name'],
            "age" => $row['age'],
            "mobile" => $row['mobile'],
            "address" => $row['address'],
            "nationality" => $row['nationality'],
        );
    }
    echo json_encode($return_arr);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}