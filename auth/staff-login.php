<?php
session_start();
error_reporting(0);

// require_once "controllerUserData.php";
include_once "../conn.php";

if (isset($_POST['staff-login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $acct_type = $_POST['acct-type'];
    switch ($acct_type) {
        case '1':
            $validate_admin = mysqli_query($conn, "SELECT * FORM admin WHERE admin_id = '$email' and admin_pass = '$password' ");

            $arr = mysqli_fetch_array($validate_admin);
            if ($arr > 0) {
                //echo "Login Success",mysqli_error($conn);
                $redirect = "/admin2/index.php";
                $_SESSION['login'] = $email;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                //echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/auth/staff-login.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '2':
            $validate_pateint = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_patient);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/pat-dashboard/patient-dash.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '3':
            $validate_doctor = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_doctor);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/doc-dashboard/doctors-dash.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '4':
            $validate_nurse = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_nurse);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/nurse-dashboard/nurse-dash.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '5':
            $validate_admin = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_admin);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/admin2/index.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '6':
            $validate_admin = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_admin);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/admin2/index.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        case '7':
            $validate_admin = mysqli_query($conn, "SELECT * FORM users WHERE email = '$email' and password = '$password' ");

            $arr = mysqli_fetch_array($validate_admin);
            if ($arr > 0) {
                // echo "Login Success",mysqli_error($conn);
                $redirect = "/admin2/index.php";
                $_SESSION['login'] = $email;
                $_SESSION['id'] = $arr;
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            } else {
                // echo "not sucessful";
                $_SESSION['errmsg'] = "Wrong Username or Password!!";
                $redirect = "/admin2/index.php";
                $host = $_SERVER['HTTP_HOST'];
                $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
                header("location:http://$host$uri/$redirect");
            }
            break;
        default:
            $_SESSION['errmsg'] = "ERROR: " . $add_user . "" . mysqli_error($conn);
            $_SESSION['succsmsg'] = "Account added Successfully";
    }
} else {
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Staff Login Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include_once "header.php";
    ?>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form method="POST">
                    <h2 class="text-center">Login Form</h2>
                    <span style=" color: red; padding: 1rem;">
                        <?php echo htmlentities($_SESSION['errmsg']); ?>
                        <?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
                    </span>
                    <span style=" color: green; padding: 1rem;">
                        <?php echo htmlentities($_SESSION['succsmsg']); ?>
                        <?php echo htmlentities($_SESSION['succsmsg'] = ""); ?>
                    </span>
                    <p class="text-center">Login with your email and password.</p>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Select Account Type</label> &nbsp; &nbsp; &nbsp; <br>
                        <select class="custom-select custom-select-lg " name="acct-type" id="">
                            <option value="1">Admin</option>
                            <option value="2">Patient</option>
                            <option value="3">Doctor</option>
                            <option value="4">Nurse</option>
                            <option value="5">Receptionist</option>
                            <option value="6">Accountant</option>
                            <option value="7">Lab-Technician</option>
                        </select>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="statff-login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>