<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.html'; ?>
<link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
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
                                <h4>New Ticket</h4>
                            </div>
                            <div class="card-body">
                                <form class="row" id="newTicketForm">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="route">Select Route</label>
                                            <select class="form-control select2" id="route" name="route_id" required>
                                                <?php
                                                $sql = "SELECT * FROM routes";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='".$row['id']."'>" . $row['airport'] . '-' . $row['destination'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="passenger_id">Select Passenger</label>
                                            <select class="form-control select2" id="passenger_id" name="passenger_id" required>
                                                <?php
                                                $sql = "SELECT * FROM passengers";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='".$row['id']."'>" . $row['name'] . '-' . $row['id'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="aircraft">Select Aircraft</label>
                                            <select class="form-control select2" id="aircraft" name="aircraft_id" required>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="booking_date">Booking Date</label>
                                            <input type="text" class="form-control datepicker" name="booking_date" id="booking_date" required>
                                        </div>
                                    </div

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit" style="margin-left: 15px;">
                                                <i class="fa fa-save"></i>
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
<script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/bundles/select2/dist/js/select2.full.min.js"></script>
<script src="assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>

<script>
    $(document).ready(function () {
        fetchFlights();
    });

    $(document).on('change', '#route', function () {
        fetchFlights();
    });

    function fetchFlights() {
        const routeId = $('#route').val();
        $.ajax({
            method: 'GET',
            url: 'backend/routeWiseFlightFilter.php',
            data: {routeId},
            success: function (res) {
                const response = JSON.parse(res);
                const len = response.length;
                $('#aircraft').empty();
                if (len) {
                    for (let i=0; i<len; i++) {
                        const op_str = "<option value='"+response[i].aircraft_id+"'>" + response[i].type + "</option>"
                        $("#aircraft").append(op_str);
                    }
                }
            },
            error: function (error) {
                alert('Something Went Wrong!');
            }
        })
    }

    $(document).on('submit', '#newTicketForm', function (e) {
        e.preventDefault();
        const data = new FormData(e.target);
        $.ajax({
            method: 'POST',
            url: 'backend/storeTicket.php',
            data: data,
            processData: false,
            contentType: false,
            success: function (res) {
                location.href = 'ticketsList.php';
            },
            error: function (error) {
                alert('Something Went Wrong!');
            }
        })
    });
</script>
</body>
</html>