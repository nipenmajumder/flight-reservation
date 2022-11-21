<?php

include 'connection.php';

$stateId = $_GET['stateId'];

$sql = "SELECT transactions.id as ticket_no, passenger_id, name, booking_date, airport, destination, route_code, type
        FROM transactions 
        JOIN passengers ON transactions.passenger_id = passengers.id
        JOIN aircrafts ON transactions.aircraft_id = aircrafts.id
        JOIN routes ON transactions.route_id = routes.id
        JOIN contacts ON passengers.contact_id = contacts.id
        WHERE contacts.state_id = '$stateId';";


$result = mysqli_query($conn, $sql);

$return_arr = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "ticket_no" => str_pad($row['ticket_no'], 6, "0", STR_PAD_LEFT),
            "passenger_id" => $row['passenger_id'],
            "name" => $row['name'],
            "booking_date" => $row['booking_date'],
            "airport" => $row['airport'],
            "destination" => $row['destination'],
            "route_code" => $row['route_code'],
            "type" => $row['type'],
        );
    }
}

echo json_encode($return_arr);