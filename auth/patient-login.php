<?php 

    require_once "controllerUserData.php";
    include_once "../conn.php";

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

     $validate_pateint = mysqli_query($conn, "SELECT * FORM admin WHERE email = '$email' and password = '$password' ");

                $arr = mysqli_fetch_array($validate_patient);
                if($arr>0){
                    // echo "Login Success",mysqli_error($conn);
                    $redirect = "projects/hms-project/pat-dashboard/patient-dash.php";
                    $_SESSION['login'] = $email;
                    $_SESSION['id'] = $arr;
                    $host = $_SERVER['HTTP_HOST'];
                    $uri = rtrim(dirname($_SERVER['PHP_SELFT']),'/\\');
                    header("location:http://$host$uri/$redirect");
                    exit();
                }else{
                    // echo "not sucessful";
                    $_SESSION['errmsg'] = "Wrong Username or Password!!";
                    $redirect = "projects/hms-project/index.php";
                    $host = $_SERVER['HTTP_HOST'];
                    $uri = rtrim(dirname($_SERVER['PHP_SELFT']),'/\\');
                    header("location:http://$host$uri/$redirect");
                    exit();
                }
    }
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
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
                <form  method="POST">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                    <div class="link login-link text-center">Only for Staff? <a href="staff-login.php">Login Here!</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>