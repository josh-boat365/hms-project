<?php
session_start();
error_reporting(0);
include "../conn.php";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_user = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' and password = '$password' ");
    $arr = mysqli_fetch_array($check_user);

    if ($arr > 0) {
        // echo "Login Success",mysqli_error($conn);
        $redirect = "projects/hms-project/admin2/";
        $_SESSION['login'] = $email;
        $_SESSION['id'] = $arr;
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
        header("location:http://$host$uri/$redirect");
        exit();
    } else {
        // echo "not sucessful";
        $_SESSION['errmsg'] = "Wrong Username or Password!!";
        $redirect = "/hms-project/admin/admin-form.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri = rtrim(dirname($_SERVER['PHP_SELFT']), '/\\');
        header("location:http://$host$uri/$redirect");
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin/assets/sass/admin.css">
    <title>Admin|Login</title>
</head>

<body>
    <div class="admin-form">
        <section class="register-form">
            <form action="" method="POST">
                <header>Admin Register Form</header>
                <hr>
                <span style="color:red; padding: 1rem">
                    <?php echo htmlentities($_SESSION['errmsg']); ?>
                    <?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
                </span>

                <!-- <div class="name-field">
                    <div class="first-name">
                        <label for="">First Name</label>
                        <input type="text" name="first-name" placeholder="John" required>
                    </div>

                    <div class="last-name">
                        <label for="">Last Name</label>
                        <input type="text" name="last-name" placeholder="Doe" required>
                    </div>
                </div> -->

                <div class="email-field">
                    <label for="">Email Address</label>
                    <input type="email" id="" name="email" placeholder="<?php echo $email ?>" required>
                </div><br><br>

                <div class="password-field">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" placeholder="Enter Password" required>
                </div><br><br>
                <!-- <div class="contact-field">
                    <label for="">Contact</label>
                    <input type="text" name="contact" placeholder="+233550746180" required>
                </div> -->
                <input id="btn" name="login" type="submit" value="Register">
            </form>
        </section>
    </div>
</body>

</html>