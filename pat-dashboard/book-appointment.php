<?php
session_start();
error_reporting(0);
include 'conn.php';
include "db_config.php";

if (isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $department = $_POST['department'];
    $message = $_POST['message'];

	// $insert_sql = mysqli_query($conn, "INSERT INTO appointments (`full_name`, `email`, `doctor_type`, `issue`, `date`, `time`) 
    // VALUES ('$full_name', '$email', '$appointment_date', 'e', 'w', '2021-09-22', '03:37:51')");

	if(!empty($full_name) && !empty($email)){
    // $insert_sql = mysqli_query($conn, "INSERT INTO appointments (full_name, email, department, appointment_date, appointment_time, message) VALUES('$full_name','$email','$department', '$appointment_date','$appointment_time','$message')");
	$insert_sql = mysqli_query($conn, "INSERT INTO appointments (`full_name`, `email`, `doctor_type`, `issue`, `date`, `time`) 
    VALUES ('$full_name', '$email', '$appointment_date', 'e', 'w', '2021-09-22', '03:37:51')");

        if($insert_sql){
            $_SESSION['booksuccs'] = "Appointment Booked Successfully!";
            //sending user mail for confirmation of  booked appointmemt
            $subject = "Book Appointment";
            $message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nThank you for reaching out to us \n Your Appointment has been sent to the $department , department for a schedule. \n We will get back to you shortly. \n Appointment Details: \n Full Name: $full_name \n Email: $email \n Appointment Date: $appointment_date \n Appointment Time: $appointment_time \n Department: $department \n Message: $message.
            ";
            $sender= "From: add.office.stmoses@gmail.com";

            if(mail($email,$subject,$message,$sender)){
                $_SESSION['mail'] = "Appointment Details Set to Mail Successfully";
                header("Refresh:0");
                exit();
            }else{
                $_SESSION['errmail'] = "Mail not Sent!";
            }
            mysqli_close($conn);

            }else{
                $_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
                mysqli_close($conn);
            }
	}       

}





?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>St. Moses Memorial Hospital| Add Users</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
		
		<!-- Feathericon CSS -->
        <link rel="stylesheet" href="assets/css/feathericon.min.css">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
		<!-- <link rel="stylesheet" href="home/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="home/css/font-awesome.min.css"> -->
		<link rel="stylesheet" href="../home/css/animate.css">
		<link rel="stylesheet" href="../home/css/owl.carousel.css">
		<link rel="stylesheet" href="../home/css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../home/css/tooplate-style.css">
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                <a href="../index.php" class="logo">
                    <!-- <img src="assets/img/logo.png" alt="Logo"> -->
                    <h1 class="custom">
					<style>
						
						.custom{
							text-align: center;
							color: #0dd9f9;
							box-sizing: border-box;
							margin-bottom: .5rem;
							font-weight: 500;
							line-height: 1.2;
							font-size: 2.5rem;
							font-family: 'Mada', sans-serif;
							margin-top: 0;
						}
					</style>
						sMMH
					
					</h1>
                </a>
                <a href="../index.php" class="logo logo-small">
                    <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
                </a>
            </div>
				<!-- /Logo -->
				
				<a href="javascript:void(0);" id="toggle_btn">
					<i class="fe fe-text-align-left"></i>
				</a>
				
				<div class="top-nav-search">
					<form>
						<input type="text" class="form-control" placeholder="Search here">
						<button class="btn" type="submit"><i class="fa fa-search"></i></button>
					</form>
				</div>
				
				<!-- Mobile Menu Toggle -->
				<a class="mobile_btn" id="mobile_btn">
					<i class="fa fa-bars"></i>
				</a>
				<!-- /Mobile Menu Toggle -->
				
				<!-- Header Right Menu -->
				<ul class="nav user-menu">
					
					<!-- Notifications -->
					<li class="nav-item dropdown noti-dropdown">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<i class="fe fe-bell"></i> <span class="badge badge-pill">3</span>
						</a>
						<div class="dropdown-menu notifications">
							<div class="topnav-dropdown-header">
								<span class="notification-title">Notifications</span>
								<a href="javascript:void(0)" class="clear-noti"> Clear All </a>
							</div>
							<div class="noti-content">
								<ul class="notification-list">
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/doctors/doctor-thumb-01.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Dr. Ruby Perrin</span> Schedule <span class="noti-title">her appointment</span></p>
													<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient1.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Charlene Reed</span> has booked her appointment to <span class="noti-title">Dr. Ruby Perrin</span></p>
													<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient2.jpg">
												</span>
												<div class="media-body">
												<p class="noti-details"><span class="noti-title">Travis Trimble</span> sent a amount of $210 for his <span class="noti-title">appointment</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
									<li class="notification-message">
										<a href="#">
											<div class="media">
												<span class="avatar avatar-sm">
													<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/patients/patient3.jpg">
												</span>
												<div class="media-body">
													<p class="noti-details"><span class="noti-title">Carl Kelly</span> send a message <span class="noti-title"> to his doctor</span></p>
													<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<div class="topnav-dropdown-footer">
								<a href="#">View all Notifications</a>
							</div>
						</div>
					</li>
					<!-- /Notifications -->
					
					<!-- User Menu -->
					<li class="nav-item dropdown has-arrow">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
							<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/avatar-01.jpg" width="31" alt="Ryan Taylor"></span>
						</a>
						<div class="dropdown-menu">
							<div class="user-header">
								<div class="avatar avatar-sm">
									<img src="assets/img/profiles/avatar-01.jpg" alt="User Image" class="avatar-img rounded-circle">
								</div>
								<div class="user-text">
									<h6>Ryan Taylor</h6>
									<p class="text-muted mb-0">Patient</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="../auth/logout-user.php">Logout</a>
						</div>
					</li>
					<!-- /User Menu -->
					
				</ul>
				<!-- /Header Right Menu -->
				
            </div>
			<!-- /Header -->
			
			<!-- Sidebar -->
            <div class="sidebar" id="sidebar">
                <div class="sidebar-inner slimscroll">
					<div id="sidebar-menu" class="sidebar-menu">
					<ul>
                        <li class="menu-title">
                            <span>Patient's Dashboard</span>
                        </li>
                        <li >
                            <a href="./patient-dash.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="book-appointment.php"><i class="fe fe-user"></i> <span>Book Appointment</span></a>
                        </li>
                        <li >
                            <a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                        </li>
						<li> 
								<a href="profile.php"><i class="fe fe-user-plus"></i> <span>Profile</span></a>
						</li>

                    </ul>
					</div>
                </div>
            </div>
			<!-- /Sidebar -->
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Add Appointment</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Appointment</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<section id="appointment" data-stellar-background-ratio="3">
        		<div class="container">
            	<div class="row">

                <!-- <div class="col-md-6 col-sm-6">
                    <img src="home/images/appointment-image.jpg" class="img-responsive" alt="">
                </div> -->

                <div class="col-md-6 col-sm-6">
                    <!-- CONTACT FORM HERE -->
                    <form id="appointment-form" role="form" method="post" action="#">

                        <!-- SECTION TITLE -->
                        <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                            <h2>Make an appointment</h2>
                        </div>

                        <span style="color: green; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['booksuccs']);?>
                            <?php echo htmlentities($_SESSION['booksuccs'] = "");?>
                        </span>

                        <span style="color: red; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['errmsg']);?>
                            <?php echo htmlentities($_SESSION['errmsg'] = "");?>
                        </span>

                        <span style="color: green; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['mail']);?>
                            <?php echo htmlentities($_SESSION['mail'] = "");?>
                        </span>

                        <span style="color: red; padding: 0.5rem;">
                            <?php echo htmlentities($_SESSION['errmail']);?>
                            <?php echo htmlentities($_SESSION['errmail'] = "");?>
                        </span>

                        <div class="wow fadeInUp" data-wow-delay="0.8s">
                            <div class="col-md-6 col-sm-6">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="full_name" placeholder="Full Name">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select Date</label>
                                <input type="date" name="appointment_date" value="" class="form-control">
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <label for="date">Select time</label>
                                <input type="time" name="appointment_time" value="" class="form-control">
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="select">Select Department</label>
                                <select class="form-control" name="department">
                                             <option value="General Health">General Health</option>
                                             <option value="Cardiology">Cardiology</option>
                                             <option value="Dental">Dental</option>
                                             <option value="Marternity">Marternity</option>
                                        </select>
                            </div>

                            <div class="col-md-12 col-sm-12">
                                <label for="telephone">Phone Number</label>
                                <input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone">
                                <label for="Message">Additional Message</label>
                                <textarea class="form-control" rows="5" id="message" name="message" placeholder="Message"></textarea>
                                <button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JS -->
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		
		<!-- Custom JS -->
		<script  src="assets/js/script.js"></script>
		
    </body>
</html>

