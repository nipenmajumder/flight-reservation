<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.html'; ?>
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        <?php require_once 'backend/connection.php'; ?>
        <?php include 'backend/loginCheck.php'; ?>
        <?php include 'partials/navbar.html'; ?>

        <?php include 'partials/sidebar.php'; ?>

        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; width: 100%;">
                                    <h4>Tickets List</h4>
                                    <a href="newTicket.php" class="btn btn-primary" style="color: white">
                                        <i class="fa fa-plus"></i>
                                        New Ticket
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Ticket No</th>
                                            <th>Passenger Id</th>
                                            <th>Passenger Name</th>
                                            <th>Booking Date</th>
                                            <th>From</th>
                                            <th>Destination</th>
                                            <th>Route Code</th>
                                            <th>Flight</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT transactions.id as ticket_no, passenger_id, name, booking_date, airport, destination, route_code, type
                                                FROM transactions
                                                JOIN passengers ON transactions.passenger_id = passengers.id
                                                JOIN aircrafts ON transactions.aircraft_id = aircrafts.id
                                                JOIN routes ON transactions.route_id = routes.id
                                                ORDER BY transactions.id DESC";

                                        $result = mysqli_query($conn, $sql);

                                        $std_num = 1;
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $std_num . "</td>";
                                            echo "<td>" . str_pad($row['ticket_no'], 6, "0", STR_PAD_LEFT) . "</td>";
                                            echo "<td>" . $row['passenger_id'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                            echo "<td>" . $row['booking_date'] . "</td>";
                                            echo "<td>" . $row['airport'] . "</td>";
                                            echo "<td>" . $row['destination'] . "</td>";
                                            echo "<td>" . $row['route_code'] . "</td>";
                                            echo "<td>" . $row['type'] . "</td>";
                                            echo "</tr>";
                                            $std_num++;
                                        }

                                        $conn->close();
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'partials/footer.html'; ?>
    </div>
</div>

<?php include 'partials/jsAssets.html'; ?>
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/page/datatables.js"></script>
</body>
</html>