<!-- Login form view -->
<?php
if (isset($_GET["login"]) && $_GET["login"] == "success") $msg = "Login Successfuly!";
elseif (isset($_GET["login"]) && $_GET["login"] == "fail") $msg = "Login Failed! Try Again";
elseif (isset($_GET["register"]) && $_GET["register"] == "success") $msg = "Try to Login!";
else $msg = "Welcome Back!";
?>

<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/login.css">
    <title>User Login</title>
    </head>
    <body>
        <div class="container-fluid ps-md-0">
            <div class="row g-0">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4"><?=$msg?></h3>

                        <!-- Sign In Form -->
                        <form action="../index.php" method="POST">
                        <input type="hidden" name="action" value="login">
                            <div class="form-floating mb-3">
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            <label for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <label for="password">Password</label>
                            </div>

                            <div class="d-grid">
                            <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">Sign in</button>
                            <div class="text-center">
                                <a class="small" href="registration_form.php">Register here!</a>
                            </div>
                            </div>

                        </form>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- <div class="container">
            <h2>Login Form</h2>
            <form action="../index.php" method="POST">
                <input type="hidden" name="action" value="login">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div> -->
    </body>
</html>