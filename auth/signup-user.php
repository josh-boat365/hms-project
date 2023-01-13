<?php require_once "controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../home/images/title-logo.png" type="image/x-icon">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include_once "header.php";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if (count($errors) == 1) {
                    ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach ($errors as $showerror) {
                                echo $showerror;
                            }
                            ?>
                        </div>
                    <?php
                    } elseif (count($errors) > 1) {
                    ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach ($errors as $showerror) {
                            ?>
                                <li><?php echo $showerror; ?></li>
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="Ryan Taylor ">
                    </div>

                    <div class="age_gender d-flex">
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control" type="number" name="age" placeholder="Age" required value="<?php echo $email ?>">
                        </div>
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control" type="text" name="gender" placeholder="Gender" required value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="d-flex">
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control" type="text" name="contact" placeholder="Contact" required value="">
                        </div>
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control" type="text" name="address" placeholder="Address" required value="">
                        </div>
                    </div>
                    <div class="password d-flex">
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group col-12 col-sm-6 px-0 py-0">
                            <input class="form-control py-1" type="password" name="confirmpassword" placeholder="Confirm password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input class="" type="checkbox" name="terms" placeholder="Confirm password" required>

                        &nbsp;Accept &nbsp;<a href="#">Terms & Conditions</a>

                    </div>

                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="patient-login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>