<?php
    $errors = array();
    // If user clicks on rgister button
    // if(isset($_POST['submit'])){
        
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
    //     $confirmpassword = $_POST['confirmpassword'];

                
    //         if(!empty($name) && !empty ($email) && !empty ($password) && !empty($confirmpassword)){
    //             // Checking email validity
    //             if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //                 $errors['email'] = "Valid Email";

    //                 $sql = mysqli_query($conncet, "");

    //             }else{
    //                 $errors['email'] = "Invalid Email Address";
    //             }
                
    //             // Checking password match
                

    //         }
    //         else {
    //             echo "All input fields are required";
    //         }
    // }


    if(isset($_POST['submbit'])){
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
        
        // If password does not match
        if($password !== $confirmpassword){
            $errors['password'] = "Confirm password not matched!";
        }


        $email_check = "SELECT * FROM usertable WHERE email = '$email'";
        $result = mysqli_query($con, $email_check);
        if(mysqli_num_rows($result) > 0){
            $errors['email'] = "Email that you have entered already exist!";
        }
        if(count($errors) === 0){
            $encpass = password_hash($password, PASSWORD_BCRYPT);
            $code = rand(999999, 111111);
            $status = "notverified";
            $insert_data = "INSERT INTO usertable (name, email, password, code, status)
                            values('$name', '$email', '$encpass', '$code', '$status')";
            $data_check = mysqli_query($con, $insert_data);
            if($data_check){
                $subject = "Email Verification Code";
                $message = "Your verification code is $code";
                $sender = "From: casvalabs@gmail.com";
                if(mail($email, $subject, $message, $sender)){
                    $info = "We've sent a verification code to your email - $email";
                    $_SESSION['info'] = $info;
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    header('location: user-otp.php');
                    exit();
                }else{
                    $errors['otp-error'] = "Failed while sending code!";
                }
            }else{
                $errors['db-error'] = "Failed while inserting data into database!";
            }
        }

    }
