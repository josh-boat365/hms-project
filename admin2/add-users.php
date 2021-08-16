<?php
session_start();
error_reporting(0);
include "../conn.php";
include "../db_config.php";




//user account ID's
$admin_id = admin_id();
$patient_id = patient_id();
$doctor_id = doctor_id();
$nurse_id = nurse_id();
$receptionist_id = receptionist_id();
$accountant_id = accountant_id();
$lab_tech_id = labTechnician_id();

// user account passwords
$admin_pass = admin_pass();
$patient_pass = patient_pass();
$doctor_pass = doctor_pass();
$nurse_pass = nurse_pass();
$receptionist_pass = receptionist_pass();
$accountant_pass = accountant_pass();
$lab_tech_pass = lab_pass();


//getting data from form
if(isset($_POST['add-user'])){
	$full_name = $_POST['full-name'];
	$age = $_POST['age'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];

	// checking if user already exist
	$check_user = mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'LIMIT 1");
	$arr = mysqli_fetch_array($check_user);

	if($arr>0){
		$_SESSION['alrdyexist'] = "User Already Exists";
		mysqli_close($conn);
	}else{

			//inserting into Database based on the user type selected or account type selected
				$acct_type = $_POST['acct-type'];
				switch($acct_type){
					case '1':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) 
							VALUES('$full_name','$age','$gender','$email','$patient_id','$patient_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
									//sending verification to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $patient_id.\n Your Account Password is $patient_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
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
							
								break;
					case '2':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) VALUES('$full_name','$age','$gender','$email','$doctor_id','$doctor_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
									//seding verfication to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $doctor_id.\n Your Account Password is $doctor_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
										exit();
									}else{
										$_SESSION['errmail'] = "Mail not Sent!";
									}
									mysqli_close($conn);
								}else{
									$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
									mysqli_close($conn);
								}
								break;
					case '3':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) VALUES('$full_name','$age','$gender','$email','$nurse_id','$nurse_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
										//seding verfication to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $nurse_id.\n Your Account Password is $nurse_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
										exit();
									}else{
										$_SESSION['errmail'] = "Mail not Sent!";
									}
									mysqli_close($conn);
								}else{
									$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
									mysqli_close($conn);
								}
								break;
					case '4':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) VALUES('$full_name','$age','$gender','$email','$receptionist_id','$receptionist_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
										//seding verfication to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $receptionist_id.\n Your Account Password is $receptionist_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
										exit();
									}else{
										$_SESSION['errmail'] = "Mail not Sent!";
									}
									mysqli_close($conn);
								}else{
									$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
									mysqli_close($conn);
								}
								break;
					case '5':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) VALUES('$full_name','$age','$gender','$email','$accountant_id','$accountant_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
										//seding verfication to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $accountant_id.\n Your Account Password is $accountant_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
										exit();
									}else{
										$_SESSION['errmail'] = "Mail not Sent!";
									}
									mysqli_close($conn);
								}else{
									$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
									mysqli_close($conn);
								}
								break;
					case '6':
						$add_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,password,contact,address,userType_id,regDate,updation_date) VALUES('$full_name','$age','$gender','$email','$lab_tech_id','$lab_tech_pass','$contact','$address','$acct_type',now(),NULL) ");

								if($add_user){
									$_SESSION['succsmsg'] = "Account added Successfully";
										//seding verfication to mail
									$subject = "Account Verification";
									$message = "Hi $full_name,\n Welcome to St. Moses Memorial Hospital. \nYour Account ID is $lab_tech_id.\n Your Account Password is $lab_tech_pass. \n Sign In by going to the home page \nNOTICE: \n AFTER SIGNIN YOU ARE REQUIRED TO CHANGE YOUR LOGIN CREDENTIALS
									";
									$sender= "From: add.office.stmoses@gmail.com";

									if(mail($email,$subject,$message,$sender)){
										$_SESSION['mail'] = "Account Details Set to Mail Successfully";
										exit();
									}else{
										$_SESSION['errmail'] = "Mail not Sent!";
									}
									mysqli_close($conn);
								}else{
									$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
									mysqli_close($conn);
								}
								break;

					default:
						$_SESSION['errmsg'] = "ERROR: ". $add_user ."".mysqli_error($conn);
						$_SESSION['succsmsg'] = "Account added Successfully";


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
		
    </head>
    <body>
	
		<!-- Main Wrapper -->
        <div class="main-wrapper">
		
			<!-- Header -->
            <div class="header">
			
				<!-- Logo -->
                <div class="header-left">
                    <a href="index.php" class="logo">
						<img src="assets/img/logo.png" alt="Logo">
					</a>
					<a href="index.php" class="logo logo-small">
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
									<p class="text-muted mb-0">Administrator</p>
								</div>
							</div>
							<a class="dropdown-item" href="profile.php">My Profile</a>
							<a class="dropdown-item" href="settings.php">Settings</a>
							<a class="dropdown-item" href="login.php">Logout</a>
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
								<span>Main</span>
							</li>
							<li> 
								<a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
							</li>
							<li> 
								<a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
							</li>
							<li> 
								<a href="specialities.php"><i class="fe fe-users"></i> <span>Specialities</span></a>
							</li>
							<li> 
								<a href="patient-list.php"><i class="fe fe-user"></i> <span>Patients</span></a>
							</li>
							<li> 
								<a href="doctor-list.php"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
							</li>
							<li> 
								<a href="nurse-list.php"><i class="fe fe-user-plus"></i> <span>Nurse</span></a>
							</li>
							<li> 
								<a href="receptionist-list.php"><i class="fe fe-user"></i> <span>Receptionist</span></a>
							</li>
							<li> 
								<a href="accountant-list.php"><i class="fe fe-user"></i> <span>Accountant</span></a>
							</li>
							<li> 
								<a href="lab-technician-list.php"><i class="fe fe-user-plus"></i> <span>Lab Technician</span></a>
							</li>
							<li class="submenu">
								<a href="#"><i class="fe fe-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
								<ul style="display: none;">
									<li><a href="add-users.php"> Add Users </a></li>
									<li><a href="view-users.php"> View Users </a></li>
								</ul>
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
								<h3 class="page-title">Add Users</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
									<li class="breadcrumb-item active">Add Users</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					<span style=" color: red; padding: 1rem;">
						<?php echo htmlentities($_SESSION['errmsg']); ?>
						<?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
					</span>
					<span style=" color: green; padding: 1rem;">
						<?php echo htmlentities($_SESSION['succsmsg']); ?>
						<?php echo htmlentities($_SESSION['succsmsg'] = ""); ?>
					</span>
					<span style=" color: blue; padding: 1rem;">
						<?php echo htmlentities($_SESSION['alrdyexist']); ?>
						<?php echo htmlentities($_SESSION['alrdyexist'] = ""); ?>
					</span>
					<span style=" color: green; padding: 1rem;">
						<?php echo htmlentities($_SESSION['mail']); ?>
						<?php echo htmlentities($_SESSION['mail'] = ""); ?>
					</span>
					<span style=" color: red; padding: 1rem;">
						<?php echo htmlentities($_SESSION['errmail']); ?>
						<?php echo htmlentities($_SESSION['errmail'] = ""); ?>
					</span>
					
					<div class="row">
						<div class="col-sm-12">
						<div class="modal-content" style="position:relative; width:60rem; left:10%; right:6%;">
														<div class="modal-header">
															<h5 class="modal-title">Personal Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															</button>
														</div>
														<div class="modal-body">
															<form method="POST">
																<div class="row form-row">
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Full Name</label>
																			<input type="text" name="full-name" class="form-control" placeholder="John Doe" required>
																		</div> 
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Age</label>
																			<input type="number" name="age" class="form-control" placeholder="Age" required>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Gender</label>
																			<input type="text" name="gender"  class="form-control" placeholder="Male/Female" required>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Email ID</label>
																			<div class="mail-icon">
																				<input type="email" name="email" class="form-control" placeholder="johndoe@example.com" >
																			</div>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Contact</label>
																			<input type="text" name="contact" class="form-control" placeholder="0550746180" required>
																		</div>
																	</div>
																	<div class="col-12">
																		<h5 class="form-title"><span>Address</span></h5>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																		<label>Address</label>
																			<input type="text" name="address" class="form-control" placeholder="Amasaman, Accra - Stadium, Junction">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Select Account Type</label> &nbsp; &nbsp; &nbsp; <br>
																			<select class="custom-select custom-select-lg " name="acct-type" id="">
																				<option value="1">Patient</option>
																				<option value="2">Doctor</option>
																				<option value="3">Nurse</option>
																				<option value="4">Receptionist</option>
																				<option value="5">Accountant</option>
																				<option value="6">Lab-Technician</option>
																			</select>
																		</div>
																	</div>
																</div>
																<button type="submit" name="add-user" class="btn btn-dark btn-block">Add Users</button>
															</form>
														</div>
													</div><br><br><br>
						</div>			
					</div>
					
				</div>			
			</div>
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