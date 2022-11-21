<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.html'; ?>
<?php include 'backend/loginCheck.php'; ?>

<body>
<div class="loader"></div>
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

                    $sql = "SELECT COUNT(id) as total_aircraft FROM aircrafts";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_aircrafts = $row['total_aircraft'];

                    $passengersSql = "SELECT COUNT(id) as total_passengers FROM passengers";
                    $result = mysqli_query($conn, $passengersSql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_passengers = $row['total_passengers'];

                    $sqlTransactions = "SELECT COUNT(id) as total_transactions FROM transactions";
                    $result = mysqli_query($conn, $sqlTransactions);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_transactions = $row['total_transactions'];

                    $sqlAirfares = "SELECT SUM(fare) as total_airfares FROM airfares";
                    $result = mysqli_query($conn, $sqlAirfares);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $total_airfares = $row['total_airfares'];

                    $conn->close();
                    ?>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="card">
                            <div class="card-statistic-4">
                                <div class="align-items-center justify-content-between">
                                    <div class="row ">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                            <div class="card-content">
                                                <h5 class="font-15">Total Passengers</h5>
                                                <h2 class="mb-3 font-18"><?php echo $total_passengers; ?></h2>
                                                <p class="mb-0"><span class="col-green">10%</span> Increase</p>
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
                                                <h5 class="font-15"> Total Flights</h5>
                                                <h2 class="mb-3 font-18"><?php echo $total_aircrafts; ?></h2>
                                                <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/2.png" alt="">
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
                                                <h5 class="font-15">Total Tickets</h5>
                                                <h2 class="mb-3 font-18"><?php echo $total_transactions; ?></h2>
                                                <p class="mb-0"><span class="col-green">18%</span>
                                                    Increase</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                            <div class="banner-img">
                                                <img src="assets/img/banner/3.png" alt="">
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
                                                <h2 class="mb-3 font-18">Tk.<?php echo $total_airfares; ?></h2>
                                                <p class="mb-0"><span class="col-green">42%</span> Increase</p>
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
                                <h4>Revenue chart</h4>
                                <div class="card-header-action">
                                    <div class="dropdown">
                                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i>
                                                View</a>
                                            <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="#" class="dropdown-item has-icon text-danger"><i
                                                        class="far fa-trash-alt"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div id="chart1"></div>
                                        <div class="row mb-0">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-up-circle"
                                                                class="col-green"></i>
                                                        <h5 class="m-b-0">$675</h5>
                                                        <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-down-circle"
                                                                class="col-orange"></i>
                                                        <h5 class="m-b-0">$1,587</h5>
                                                        <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="list-inline text-center">
                                                    <div class="list-inline-item p-r-30"><i
                                                                data-feather="arrow-up-circle"
                                                                class="col-green"></i>
                                                        <h5 class="mb-0 m-b-0">$45,965</h5>
                                                        <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row mt-5">
                                            <div class="col-7 col-xl-7 mb-3">Total customers</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">8,257</span>
                                                <sup class="col-green">+09%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Total Income</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$9,857</span>
                                                <sup class="text-danger">-18%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Project completed</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">28</span>
                                                <sup class="col-green">+16%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">Total expense</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">$6,287</span>
                                                <sup class="col-green">+09%</sup>
                                            </div>
                                            <div class="col-7 col-xl-7 mb-3">New Customers</div>
                                            <div class="col-5 col-xl-5 mb-3">
                                                <span class="text-big">684</span>
                                                <sup class="col-green">+22%</sup>
                                            </div>
                                        </div>
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

</body>
</html>