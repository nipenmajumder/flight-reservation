<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.html'; ?>
<link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
<link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/bundles/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">
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
                                <h4>Flight List Route Wise</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Select Route</label>
                                            <select class="form-control select2" id="route">
                                                <?php
                                                $sql = "SELECT * FROM routes";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='".$row['id']."'>" . $row['airport'] . '-' . $row['destination'] . "</option>";
                                                }

                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" style="margin-top: 30px;" id="search">
                                                <i class="fa fa-search"></i>
                                                Search
                                            </button>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <table class="table table-striped table-hover d-none" style="width:100%;" id="flightListTable">
                                            <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Flight Type</th>
                                                <th>Flight Date</th>
                                                <th>Departure Date</th>
                                                <th>Arrival Date</th>
                                                <th>Fare Cost</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
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
<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

<script>
    $(document).on('click', '#search', function () {
        const routeId = $('#route').val();
        $.ajax({
            method: 'GET',
            url: 'backend/routeWiseFlightFilter.php',
            data: {routeId},
            success: function (res) {
                $("#flightListTable").removeClass('d-none');
                $("#flightListTable tbody").empty();
                const response = JSON.parse(res);
                const len = response.length;
                if (len) {
                    for (let i=0; i<len; i++) {
                        const tr_str = "<tr>" +
                            "<td>" + (i+1) + "</td>" +
                            "<td>" + response[i].type + "</td>" +
                            "<td>" + response[i].flight_date + "</td>" +
                            "<td>" + response[i].departure + "</td>" +
                            "<td>" + response[i].arrival + "</td>" +
                            "<td>" + response[i].fare + "</td>" +
                            "</tr>";

                        $("#flightListTable tbody").append(tr_str);
                    }
                }
            },
            error: function (error) {

            }
        })
    });
</script>
</body>
</html>