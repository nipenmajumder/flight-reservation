<?php

include 'connection.php';

$countryId = $_GET['countryId'];

$sql = "SELECT * FROM `states` WHERE country_id = '$countryId'";

$result = mysqli_query($conn, $sql);

$return_arr = array();

if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_array($result)) {
        $return_arr[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
        );
    }
}

echo json_encode($return_arr);