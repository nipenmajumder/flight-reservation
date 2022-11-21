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
                                <h4>State Wise Tickets</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">Select State</label>
                                            <select class="form-control select2" id="state">
                                                <?php
                                                $sql = "SELECT * FROM states";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='".$row['id']."'>" . $row['name'] . "</option>";
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
                                        <h5 id="totalPassengerMsg" class="d-none"></h5>
                                        <table class="table table-striped table-hover d-none" style="width:100%;" id="stateWiseTicketsTable">
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
        const stateId = $('#state').val();
        $.ajax({
            method: 'GET',
            url: 'backend/stateWiseTicketsFilter.php',
            data: {stateId},
            success: function (res) {
                $("#stateWiseTicketsTable").removeClass('d-none');
                $("#stateWiseTicketsTable tbody").empty();
                const response = JSON.parse(res);
                const len = response.length;
                $("#totalPassengerMsg").removeClass('d-none').text('Total Tickets: '+len);
                if (len) {
                    for (let i=0; i<len; i++) {
                        const tr_str = "<tr>" +
                            "<td>" + (i+1) + "</td>" +
                            "<td>" + response[i].ticket_no + "</td>" +
                            "<td>" + response[i].passenger_id + "</td>" +
                            "<td>" + response[i].name + "</td>" +
                            "<td>" + response[i].booking_date + "</td>" +
                            "<td>" + response[i].airport + "</td>" +
                            "<td>" + response[i].destination + "</td>" +
                            "<td>" + response[i].route_code + "</td>" +
                            "<td>" + response[i].type + "</td>" +
                            "</tr>";

                        $("#stateWiseTicketsTable tbody").append(tr_str);
                    }
                }
            },
            error: function (error) {
                alert('Something Went Wrong!');
            }
        })
    });
</script>
</body>
</html>