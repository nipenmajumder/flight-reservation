<!DOCTYPE html>
<html lang="en">

<?php include 'partials/head.html'; ?>
<link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">

        <?php require_once 'backend/connection.php'; ?>
        <?php include 'backend/loginCheck.php'; ?>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM aircrafts WHERE id=$id";

            $result = mysqli_query($conn, $sql);

            if ($result) {
                $n = mysqli_fetch_array($result);
                $name = $n['type'];
                $capacity = $n['capacity'];
                $mfg_date = $n['mfg_date'];
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                header("Location:flightList.php");
            }
        }
        ?>

        <?php include 'partials/navbar.html'; ?>


        <?php include 'partials/sidebar.php'; ?>

        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Edit Flight</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="type">Name</label>
                                            <input type="text" class="form-control" id="type" name="type" value="<?php echo $name; ?>">
                                            <input type="hidden" id="id" value="<?php echo $id; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="capacity">Capacity</label>
                                            <input type="number" class="form-control" id="capacity" name="capacity" value="<?php echo $capacity; ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="mfg_date">MFG Date</label>
                                            <input type="text" class="form-control datepicker" id="mfg_date" name="mfg_date" value="<?php echo $mfg_date; ?>">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button class="btn btn-primary" id="save">
                                                <i class="fa fa-save"></i>
                                                Update
                                            </button>
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
<script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>

<script>
    $(document).on('click', '#save', function () {
        const id = $('#id').val();
        const type = $('#type').val();
        const capacity = $('#capacity').val();
        const mfg_date = $('#mfg_date').val();
        if (!type || !capacity || !mfg_date) {
            alert('Please fill all fields.');
            return;
        }
        $.ajax({
            method: 'POST',
            url: 'backend/storeFlight.php',
            data: {id, type, capacity, mfg_date},
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