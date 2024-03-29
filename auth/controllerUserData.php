<?php
session_start();
// require "connection.php";
include_once "../conn.php";
require "../credentials.php";
$email = "";
$name = "";
$errors = array();

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';
// create a new object
$mail = new PHPMailer();
// configure an SMTP
$mail->isSMTP();
$mail->Host = $mail_server;
$mail->SMTPAuth = true;
$mail->Username = $mail_username;
$mail->Password = $mail_password;
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

//if user click signup button
if (isset($_POST['signup'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($conn, $_POST['confirmpassword']);
    $account_id = rand(999, 111);


    // If password does not match
    if ($password !== $confirmpassword) {
        $errors['password'] = "Confirm password not matched!";
    }


    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $email_check);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email that you have entered already exist!";
    }
    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $status = "notverified";
        // $insert_data = "INSERT INTO users (full_name, email, password, code, status)
        //                 values('$name', '$email', '$encpass', '$code', '$status')";


        // $insert_data = "INSERT INTO users (full_name, age, gender, email, account_id, contact, address, password, code, userType_id, regDate, updation_date, status)

        //                 values('$name', '$age', '$gender','$email', '$account_id', '$contact', '$address','$password','$code', '1', NOW(), NOW(), $status)";

        $insert_data = "INSERT INTO users (`full_name`, `age`, `gender`, `email`, `account_id`, `password`, `code`, `contact`, `address`, `userType_id`, `regDate`, `updation_date`, `status`) 
            VALUES ('$name', '$age', '$gender', '$email', '$account_id', '$encpass', '$code', '$contact', '$address', '1', NOW(), NOW(), '$status')";

        $data_check = mysqli_query($conn, $insert_data);
        if ($data_check) {
            // $message = "Your verification code is $code";

            $mail->setFrom('casvalabs@gmail.com', 'St. Moses Memorial Hospital');
            $mail->addAddress($email);
            $mail->Subject = 'Email verification Code';
            $mail->Body = "Your verification code is $code";


            if ($mail->send()) {
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!" . $mail->ErrorInfo;
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}
//if user click verification code submit button
if (isset($_POST['check'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $fetch_code = $fetch_data['code'];
        $email = $fetch_data['email'];
        $code = 0;
        $status = 'verified';
        $update_otp = "UPDATE users SET code = $code, status = '$status' WHERE code = $fetch_code";
        $update_res = mysqli_query($conn, $update_otp);
        if ($update_res) {
            $_SESSION['name'] = $name;
            $_SESSION['email'] = $email;
            header('location: home.php');
            exit();
        } else {
            $errors['otp-error'] = "Failed while updating code!";
        }
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click login button
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if (password_verify($password, $fetch_pass)) {
            $_SESSION['email'] = $email;
            $status = $fetch['status'];
            if ($status == 'verified') {
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: ../pat-dashboard/patient-dash.php');
            } else {
                $info = "It's look like you haven't still verify your email - $email";
                $_SESSION['info'] = $info;
                header('location: user-otp.php');
            }
        } else {
            $errors['email'] = "Incorrect email or password!";
        }
    } else {
        $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
    }
}

//if user click continue button in forgot password form
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM users WHERE email='$email'";
    $run_sql = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(999999, 111111);
        $insert_code = "UPDATE users SET code = $code WHERE email = '$email'";
        $run_query =  mysqli_query($conn, $insert_code);
        if ($run_query) {
            // $message = "Your verification code is $code";

            $mail->setFrom('casvalabs@gmail.com', 'St. Moses Memorial Hospital');
            $mail->addAddress($email);
            $mail->Subject = 'Password Reset Code';
            $mail->Body = "<h1>Your verification code is $code</h1>";


            if ($mail->send()) {
                $info = "We've sent a passwrod reset otp to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } else {
                $errors['otp-error'] = "Failed while sending code!" . $mail->ErrorInfo;
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

//if user click check reset otp button
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM users WHERE code = $otp_code";
    $code_res = mysqli_query($conn, $check_code);
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

//if user click change password button
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email']; //getting this email using session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE users SET code = $code, password = '$encpass' WHERE email = '$email'";
        $run_query = mysqli_query($conn, $update_pass);
        if ($run_query) {
            $info = "Your password changed. Now you can login with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}

//if login now button click
if (isset($_POST['login-now'])) {
    header('Location: login-user.php');
}
