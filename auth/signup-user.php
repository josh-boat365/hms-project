<?php 
// require_once "controllerUserData.php";
include_once "../conn.php";
include_once "../db_config.php";

session_start();
error_reporting(0);

if(isset($_POST['signup'])){
    $name =  $_POST['name'];
    $age =  $_POST['age'];
    $gender =  $_POST['gender'];
    $email =  $_POST['email'];
    $contact =  $_POST['contact'];
    $address =  $_POST['address'];
    $password =  $_POST['password'];
    
    $check_user = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'LIMIT 1");
	$arr = mysqli_fetch_array($check_user);

    if($arr>0){
		$_SESSION['alrdyexist'] = "User Already Exists";
		mysqli_close($conn);
	}else{
        $insert_data = "INSERT INTO users (full_name, age, gender, email, account_id, contact, address,password, usertype, regDate, updation_date, status)
        values('$name', '$age', '$gender','$email', '$account_id', '$contact', '$address','$password', '1', NOW(), NULL, 'Active')";
        if($insert_data){
            $_SESSION['success'] = "Account Created Succesfully";
            mysqli_close($conn);
        }
        else{
            $_SESSION['error'] = "Data not inserted";
        }
        
    }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <span class="alert alert-success text-center">
                        <?php echo htmlentities($_SESSION['alrdyexist']) ?>
                        <?php echo htmlentities($_SESSION['alrdyexist'] = ""); ?>
                    </span>
                    <span class="alert alert-success text-center">
                        <?php echo htmlentities($_SESSION['success']) ?>
                        <?php echo htmlentities($_SESSION['success'] = ""); ?>
                    </span>
                    <span class="alert alert-danger text-center">
                        <?php echo htmlentities($_SESSION['error']) ?>
                        <?php echo htmlentities($_SESSION['error'] = ""); ?>
                    </span>
                    
                    
                   
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required value="<?php echo $name ?>">
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
                    <div class="form-group">
                        <input class="form-control" type="text" name="contact" placeholder="Contact" required value="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="address" placeholder="Address" required value="">
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
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>