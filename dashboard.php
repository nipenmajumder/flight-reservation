<!DOCTYPE html>
<html lang="en">
<?php include 'partials/head.html'; ?>
<?php include 'backend/loginCheck.php'; ?>
<body>
<!--<div class="loader"></div>-->
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <?php require_once 'backend/connection.php'; ?>
        <?php include 'partials/navbar.html'; ?>
        <?php include 'partials/sidebar.php'; ?>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <?php
                    $passengerID = (int)$_SESSION['id'];
                    $sql = "SELECT SUM(fare) as total_fare from ticket,aircrafts WHERE ticket.passenger_id = '$passengerID' AND ticket.aircraft_id=aircrafts.id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_fare = $row['total_fare'];

                    $reservedSql = "SELECT COUNT(id) as total_tickets FROM ticket where passenger_id = '$passengerID' ";
                    $result = mysqli_query($conn, $reservedSql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_reserved_tickets = $row['total_tickets'];

                    $passenger = "SELECT * FROM passengers WHERE id = '$passengerID'";
                    $result = mysqli_query($conn, $passenger);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $passengerDetails = $row;
                    //                    var_dump($passengerDetails);
                    $conn->close();
                    ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Total Reserved Tickets</h5>
                                                <h2 class="mb-3 font-18"><?php echo $total_reserved_tickets; ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Total Fares</h5>
                                                <h2 class="mb-3 font-18">Tk.<?php echo $total_fare; ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/4.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-lg-12">
                        <div class="card ">
                            <div class="card-header">
                                <h4>Passenger Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="py-4">
                                    <p class="clearfix">
                                        <span class="float-left">Name</span>
                                        <span class="float-right ">
                                                <?php echo $passengerDetails['name']; ?>
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">Email</span>
                                        <span class="float-right ">
                                                <?php echo $passengerDetails['email']; ?>
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                       <span class="float-left">Age </span>
                                        <span class="float-right ">
                                            <?php echo $passengerDetails['age']; ?>
                                        </span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-left">
                                            Country
                                        </span>
                                        <span class="float-right ">
                                            <?php echo $passengerDetails['country']; ?>
                                        </span>
                                    </p>
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
</body>
</html>