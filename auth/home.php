<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
        if($run_Sql){
            $fetch_info = mysqli_fetch_assoc($run_Sql);
            // $status = $fetch_info['status'];
            // $code = $fetch_info['code'];
            // if($status == "verified"){
            //     if($code != 0){
            //         header('Location: reset-code.php');
            //     }
            // }else{
            //     header('Location: user-otp.php');
            // }
        }
}else{
    header('Location: login-user.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $fetch_info['name'] ?> | Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
        nav{
            padding-left: 100px!important;
            padding-right: 100px!important;
            background: #A5C422;;
            font-family: 'Poppins', sans-serif;
        } 
        nav a.navbar-brand{
            color: #fff;
            font-size: 30px!important;
            font-weight: 500;
        }
        button a{
            color: #A5C422;;
            font-weight: 500;
        }
        button a:hover{
            text-decoration: none;
        }
        .lobby{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            text-align: center;
            transform: translate(-50%, -50%);
            font-size: 50px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <nav class="navbar">
    <a class="navbar-brand" href="#">
        <h1>sMMH</h1>
    </a>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>
    </nav>
    <div class="lobby">
    <h1>Welcome </h1>
    <p><?php echo $fetch_info['name'] ?></p>
    <p>To The Patients Lobby</p>
    </div>
    
</body>
</html>