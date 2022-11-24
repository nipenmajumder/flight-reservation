<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.html'; ?>
<link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
<body>
<!--<div class="loader"></div>-->
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        <?php include 'backend/connection.php'; ?>
        <?php include 'backend/loginCheck.php'; ?>
        <?php include 'partials/navbar.html'; ?>
        <?php include 'partials/sidebar.php'; ?>

        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>New Flight</h4>
                            </div>
                            <div class="card-body">
                                <form class="row" action="backend/storeFlight.php" method="post">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="flight name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="capacity">Capacity</label>
                                            <input type="number" class="form-control" id="capacity" name="capacity" placeholder="capacity">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="departure">From</label>
                                            <select class="form-control select2" id="departure" name="departure">
                                                <option value="" selected disabled>Select</option>
                                                <?php
                                                $sql = "SELECT * FROM airports";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='".$row['id']."'>" . $row['name'] . "</option>";
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="destination">To</label>
                                            <select class="form-control select2" id="destination" name="destination">
                                                <option value="" selected disabled>Select</option>

                                                <?php
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
                                            <label for="fare">Fare</label>
                                            <input type="number" class="form-control" id="fare" name="fare" placeholder="fare">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="leave_time">Leave Time</label>
                                            <input type="time" class="form-control" id="leave_time" name="leave_time" placeholder="leave_time">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="save">
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
<!---->
<script>
    $(document).on('click', '#save', function () {
        const name = $('#name').val();
        const capacity = $('#capacity').val();
        const departure = $('#departure').val();
        const destination = $('#destination').val();
        const fare = $('#fare').val();
        const leave_time = $('#leave_time').val();
        if (!name || !capacity ||!departure||!destination||!fare||!leave_time)  {
            alert('Please fill all fields.');
            return;
        }
        $.ajax({
            method: 'POST',
            url: 'backend/storeFlight.php',
            data: {name, capacity, departure, destination, fare, leave_time},
            success: function (res) {
                location.href = 'flightList.php';
            },
            error: function (error) {
                alert('Something Went Wrong!');
            }
        })
    });
</script>
</body>
</html>