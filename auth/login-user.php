<?php 
    // require_once "controllerUserData.php";
    include_once "../conn.php";
    
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

            $get_data = mysqli_query($conn, "SELECT * FROM users WHERE email = {$email} AND pasword = {$password}");
            //    $test = print_r($get_data);

            //    echo $test;
            // if(mysqli_num_rows($get_data) > 0){
                    $row = mysqli_fetch_assoc($get_data);
                    
                    header("location: ../index.php");
                // }
                // else{
                    // echo "invalid login";
                // }

    }else{
        echo "not getting data";
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
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>