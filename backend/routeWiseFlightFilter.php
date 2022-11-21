<?php

include 'connection.php';

$routeId = $_GET['routeId'];

$sql = "SELECT DISTINCT flight_schedules.aircraft_id as aircraft_id, flight_date, departure, arrival, fare, airfare_id, type, route_id 
        FROM flight_schedules, airfares, aircrafts
        WHERE flight_schedules.aircraft_id = aircrafts.id
        AND flight_schedules.airfare_id = airfares.id
        AND airfares.route_id = '$routeId'";

$result = mysqli_query($conn, $sql);



$return_arr = array();

if ($result->num_rows > 0) {

    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "aircraft_id" => $row['aircraft_id'],
            "type" => $row['type'],
            "flight_date" => $row['flight_date'],
            "departure" => $row['departure'],
            "arrival" => $row['arrival'],
            "fare" => $row['fare'],
        );
    }
}

echo json_encode($return_arr);