<!-- Registration form view -->
<?php
if (isset($_GET["register"]) && $_GET["register"] == "fail") $msg = "Registration Failed! Try Again";
else $msg = "Register!";
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/registration.css">
    <title>User Registration</title>
    </head>
    <body>
    <div class="container">
        <div class="row">
        <div class="col-lg-10 col-xl-9 mx-auto">
            <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
            <div class="card-img-left d-none d-md-flex">
                <!-- Background image for card set in CSS! -->
            </div>
            <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 fw-light fs-5"><?=$msg?></h5>
                <form action="../index.php" method="POST">
                <input type="hidden" name="action" value="register">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" required autofocus>
                    <label for="first_name">First Name</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                    <label for="last_name">Last Name</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    <label for="email">Email address</label>
                </div>
                
                <div class="form-floating mb-3">
                    <input type="mobile" class="form-control" name="mobile" id="mobile" placeholder="mobile" required>
                    <label for="mobile">Mobile Phone</label>
                </div>
                
                <hr>

                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>

                <div class="d-grid mb-2">
                    <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Register</button>
                </div>

                <a class="d-block text-center mt-2 small" href="login_form.php">Have an account? Sign In</a>

                <hr class="my-4">

                </form>
            </div>
            </div>
        </div>
        </div>
    </div>

<!-- <div class="container">
    <h2>Registration Form</h2>
    <form method="POST">
        <input type="hidden" name="action" value="register">
        <div class="form-group">
            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="mobile" placeholder="Mobile Phone" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div> -->
    </body>
</html>