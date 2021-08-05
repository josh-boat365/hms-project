<?php 
session_start();
require "connection.php";
// require "./conn.php";
require "../db_config.php";
$email = "";
$name = "";
$errors = array();

//if user click signup button
    if(isset($_POST['signup'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $age = mysqli_real_escape_string($con, $_POST['age']);
        $gender = mysqli_real_escape_string($con, $_POST['gender']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        

        
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
        
        // If password does not match
        if($password !== $confirmpassword){
            $errors['password'] = "Confirm password not matched!";
        }


        $email_check = "SELECT * FROM users WHERE email = '$email'";
        $resultult = mysqli_query($con, $email_check);
        // $row = mysqli_fetch_array($result);
        if($resultult > 0){

            $errors['email'] = "Email that you have entered already exist!";
        }else{
        if(count($errors) === 0){
            
            $insert_data = "INSERT INTO users (full_name, age, gender, email, account_id, contact, address,password, usertype, regDate, updation_date, status)
                            values('$name', '$age', '$gender','$email', '$account_id', '$contact', '$address','$password', '1', NOW(), NULL, 'Active')";
            $data_check = mysqli_query($con, $insert_data);
            if(mysqli_num_rows($data_check) > 0){
                $row = mysqli_fetch_assoc($data_check);
                $errors[] = "Data inserted";
            }
                
            // if($data_check){
            //     $subject = "Email Verification Code";
            //     $message = "Your verification code is $code";
            //     $sender = "From: shahiprem7890@gmail.com";
            //     if(mail($email, $subject, $message, $sender)){
            //         $info = "We've sent a verification code to your email - $email";
            //         $_SESSION['info'] = $info;
            //         $_SESSION['email'] = $email;
            //         $_SESSION['password'] = $password;
            //         // header('location: user-otp.php');
            //         exit();
            //     }else{
            //         $errors['otp-error'] = "Failed while sending code!";
            //     }
            }else{
                $errors['db-error'] = "Failed while inserting data into database!";
            }
        }
    }

    // }
    //if user click verification code submit button
            // if(isset($_POST['check'])){
            //     $_SESSION['info'] = "";
            //     $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
            //     $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
            //     $code_result = mysqli_query($con, $check_code);
            //     if(mysqli_num_rows($code_result) > 0){
            //         $fetch_data = mysqli_fetch_assoc($code_result);
            //         $fetch_code = $fetch_data['code'];
            //         $email = $fetch_data['email'];
            //         $code = 0;
            //         $status = 'verified';
            //         $update_otp = "UPDATE usertable SET code = $code, status = '$status' WHERE code = $fetch_code";
            //         $update_result = mysqli_query($con, $update_otp);
            //         if($update_result){
            //             $_SESSION['name'] = $name;
            //             $_SESSION['email'] = $email;
            //             header('location: home.php');
            //             exit();
            //         }else{
            //             $errors['otp-error'] = "Failed while updating code!";
            //         }
            //     }else{
            //         $errors['otp-error'] = "You've entered incorrect code!";
            //     }
            // }


    //if user click login button
    if(isset($_POST['login'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $check_email = "SELECT * FROM users WHERE account_id = '$account_id'";
        $result = mysqli_query($conn, $check_email);
        if(mysqli_num_rows($result) > 0){
            $fetch = mysqli_fetch_assoc($result);
            $fetch_pass = $fetch['password'];
            if(password_verify($password, $fetch_pass)){
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: home.php');
                // $status = $fetch['status'];
                // // if($status == 'verified'){
                //   $_SESSION['email'] = $email;
                //   $_SESSION['password'] = $password;
                //     header('location: home.php');
                // }
                // else{
                //     $info = "It's look like you haven't still verify your email - $email";
                //     $_SESSION['info'] = $info;
                //     header('location: user-otp.php');
                // }
            }else{
                $errors['email'] = "Incorrect email or password!";
            }
        }else{
            $errors['email'] = "It's look like you're not yet a member! Click on the bottom link to signup.";
        }
    }

    //if user click continue button in forgot password form
    if(isset($_POST['check-email'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $check_email = "SELECT * FROM usertable WHERE email='$email'";
        $run_sql = mysqli_query($con, $check_email);
        if(mysqli_num_rows($run_sql) > 0){
            $code = rand(999999, 111111);
            $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
            $run_query =  mysqli_query($con, $insert_code);
            if($run_query){
                $subject = "Password resultet Code";
                $message = "Your password resultet code is $code";
                $sender = "From: shahiprem7890@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a passwrod resultet otp to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    header('location: resultet-code.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Something went wrong!";
            }
        }else{
            $errors['email'] = "This email addresults does not exist!";
        }
    }

    //if user click check resultet otp button
        if(isset($_POST['check-resultet-otp'])){
            $_SESSION['info'] = "";
            $otp_code = mysqli_real_escape_string($con, $_POST['otp']);
            $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
            $code_result = mysqli_query($con, $check_code);
            if(mysqli_num_rows($code_result) > 0){
                $fetch_data = mysqli_fetch_assoc($code_result);
                $email = $fetch_data['email'];
                $_SESSION['email'] = $email;
                $info = "Please create a new password that you don't use on any other site.";
                $_SESSION['info'] = $info;
                header('location: new-password.php');
                exit();
            }else{
                $errors['otp-error'] = "You've entered incorrect code!";
            }
        }

    //if user click change password button
        if(isset($_POST['change-password'])){
            $_SESSION['info'] = "";
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            if($password !== $cpassword){
                $errors['password'] = "Confirm password not matched!";
            }else{
                $code = 0;
                $email = $_SESSION['email']; //getting this email using session
                $encpass = password_hash($password, PASSWORD_BCRYPT);
                $update_pass = "UPDATE usertable SET code = $code, password = '$encpass' WHERE email = '$email'";
                $run_query = mysqli_query($con, $update_pass);
                    if($run_query){
                        $info = "Your password changed. Now you can login with your new password.";
                        $_SESSION['info'] = $info;
                        header('Location: password-changed.php');
                    }else{
                        $errors['db-error'] = "Failed to change your password!";
                    }
            }
        }
    
   //if login now button click
        if(isset($_POST['login-now'])){
            header('Location: login-user.php');
        }
?>