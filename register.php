<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>AirLines Register</title>
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico'/>
</head>
<body>
<?php require_once 'backend/connection.php'; ?>
<div class="loader"></div>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-2 col-xl-8 ">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Register</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" id="newPassengerForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input id="name" type="text" class="form-control" name="name" tabindex="1"
                                                   required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email"
                                                   tabindex="1"
                                                   required autofocus>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mobile">Mobile</label>
                                            <input id="mobile" type="text" class="form-control" name="mobile"
                                                   tabindex="1"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Age</label>
                                            <input id="age" type="text" class="form-control" name="age" tabindex="1"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input id="address" type="text" class="form-control" name="address"
                                                   tabindex="1"
                                                   required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select name="country" id="country" class="form-control">
                                                <option value="" selected disabled>Select Country</option>
                                                <?php
                                                $sql = "SELECT * FROM countries";
                                                $result = mysqli_query($conn, $sql);
                                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                                    echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                                                }
                                                $conn->close();
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password" class="control-label">Password</label>
                                            <input id="password" type="password" class="form-control" name="password"
                                                   tabindex="2" required>
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password_confirmation" class="control-label">Confirm Password</label>
                                            <input id="password_confirmation" type="password" class="form-control"
                                                   name="password_confirmation"
                                                   tabindex="2" required>
                                            <div class="invalid-feedback">
                                                please fill in your password
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg " tabindex="4">
                                            Register
                                        </button>
                                        <a href="front-login.php">
                                            <button type="button" class="btn btn-lg btn-success" tabindex="4">
                                                Login
                                            </button>
                                        </a>
                                        <a href="index.php">
                                            <button type="button" class="btn btn-lg btn-secondary" tabindex="4">
                                                Home
                                            </button>
                                        </a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'partials/jsAssets.html'; ?>
<script>
    $(document).on('submit', '#newPassengerForm', function (e) {
        e.preventDefault();
        const data = new FormData(e.target);
        $.ajax({
            method: 'POST',
            url: 'backend/storePassenger.php',
            data: data,
            processData: false,
            contentType: false,
            success: function (res) {
                location.href = 'front-login.php';
            },
            error: function (error) {
                alert('Something Went Wrong!');
            }
        })
    });
</script>
<script src="assets/js/app.min.js"></script>
<script src="assets/js/scripts.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>