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
        <?php include 'backend/frontLoginCheck.php'; ?>
        <?php include 'partials/navbar.html'; ?>
        <?php include 'partials/sidebar.php'; ?>

        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <div style="display: flex; justify-content: space-between; width: 100%;">
                                    <h4>Reserved Ticket History</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Booking Date</th>
                                            <th>Aircraft</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM ticket where passenger_id = " . $_SESSION['id'] . " ORDER BY id DESC";
                                        $result = mysqli_query($conn, $sql);

                                        $std_num = 1;
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            echo "<tr>";
                                            echo "<td>" . $std_num . "</td>";
                                            echo "<td>" . $row['booking_date'] . "</td>";
                                            echo "<td>" . $row['aircraft_id'] . "</td>";
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