<?php 
session_start();
include '../conn.php';
include '../db_config.php';

//seleting users from DB
$select_users = mysqli_query($conn,"SELECT * FROM users");

	//updating user
	if(isset($_POST['update-user'])){
		$full_name=$_POST['full_name'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$email=$_POST['email'];
		$account_id=$_POST['account_id'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$status = $_POST['status'];
		$id = $_POST['id'];
		$update_user = mysqli_query($conn, "UPDATE users SET full_name='$full_name', age='$age', gender='$gender', email='$email', account_id = '$account_id', 
			contact='$contact', address='$address', status='$status'
		 	WHERE id = '$id' ");
			
			 if($update_user){
				$_SESSION['succsmsg'] = "User Details Updated Successfully";
				mysqli_close($conn);
				header("Refresh:0");

			 }elseif(!$update_user){
				$insert_user = mysqli_query($conn,"INSERT INTO  users (full_name,age,gender,email,account_id,contact,address,status) VALUES('$full_name','$age','$gender','$email','$account_id',$contact','$address','$status'");

				$_SESSION['succsmsg'] = "User Details Updated Successfully";
				mysqli_close($conn);
				header("Refresh:0");

				// $_SESSION['errmsg'] = "ERROR: " . $update_user . "<br>" . mysqli_error($conn);
				 
			 }else{
		
		$_SESSION['errmsg'] = "ERROR: Inserting or Updating new details into user's table ";
		
	}
			 
	}else{
		
		$_SESSION['errmsg'] = "ERROR: Inserting or Updating new details into user's table ";
	}

	//deleting user
	if(isset($_POST['delete-user'])){
		$delete_user = mysqli_query($conn, "DELETE FROM users WHERE id = $id");

		if($delete_user){
			$_SESSION['succsmsg'] = "User Details Details Successfully";
			mysqli_close($conn);
			header("Refresh:0");
			exit();
		}else{
			$_SESSION['errmsg'] = "ERROR: Deleting User from Table";
		}


	}
	



?>
<!DOCTYPE html>
<html lang="en">
    

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>View Users | St. Moses Memorial Hospital</title>
		
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
		
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
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
								<h3 class="page-title">View Users</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
									<li class="breadcrumb-item active">View Users</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->

					<!-- User Type Legend -->
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-body">
									<div class="card-body">
										<div class="table-responsive">
											<table class=" datatable table-hover table-center mb-0">
												<thead>
													<tr>
													<th>No.</th>
													<th>User Type</th>
													</tr>
												</thead>
												<tbody>
														<td>1</td>
														<td>Patient</td>
													<tr>
														<td>2</td>
														<td>Doctor</td>
													</tr>
													<tr>
														<td>3</td>
														<td>Nurse</td>
													</tr>
													<tr>
														<td>4</td>
														<td>Receptionist</td>
													</tr>
													<tr>
														<td>5</td>
														<td>Accountant</td>
													</tr>
													<tr>
														<td>6</td>
														<td>Lab Technician</td>
													</tr>
													
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /User Type Legend -->

					<span style=" color: red; padding: 1rem;">
						<?php echo htmlentities($_SESSION['errmsg']); ?>
						<?php echo htmlentities($_SESSION['errmsg'] = ""); ?>
					</span>
					<span style=" color: green; padding: 1rem;">
						<?php echo htmlentities($_SESSION['succsmsg']); ?>
						<?php echo htmlentities($_SESSION['succsmsg'] = ""); ?>
					</span>
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
									<div class="card-body">

									<div class="table-responsive">
										<table class="datatable table table-stripped">
											<thead>
												<tr>
													
													<th>Name</th>
													<th>User Type</th>
													<th>E-mail</th>
													<th>Contact</th>
													<th>Age</th>
													<th>Gender</th>
													<th>Account ID</th>
													<th>Address</th>
													<th>Status</th>
													<th>RegDate</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												
												<?php
													while($rows=mysqli_fetch_assoc($select_users))
													{
													
												?>
													<tr>
													
													<td><?php echo $rows['full_name'];?></td>
													<td><?php echo $rows['userType_id'] ?></td>
													<td><?php echo $rows['email'];?></td>
													<td><?php echo $rows['contact'];?></td>
													<td><?php echo $rows['age'];?></td>
													<td><?php echo $rows['gender'];?></td>
													<td><?php echo $rows['account_id'];?></td>
													<td><?php echo $rows['address'];?></td>
													<td><?php echo $rows['status'];?></td>
													<td><?php echo $rows['regDate'];?></td>
													
													<td>
														<div class="actions">
															<a class="btn btn-sm bg-success-light editbtn" data-toggle="modal" href="<?php $rows['id'];?>">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a  data-toggle="modal" href="" class="btn btn-sm bg-danger-light deletebtn">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr> 
													<?php
													}
													?>

													<!-- Edit Details Modal -->
											<div class="modal fade" id="edit_user_details" aria-hidden="true" role="dialog">
												<div class="modal-dialog modal-dialog-centered" role="document" >
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">User Details</h5>
															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form method="POST">
																
																<div class="row form-row">
																	<div class="col-12">
																		<div class="form-group">
																			<label>Full Name</label>
																			<div>
																				<input type="text" name="full_name" id="full_name" class="form-control" value="">
																			</div>
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label>E-mail</label>
																			<div>
																				<input type="text" name="email" id="email" class="form-control" value="">
																			</div>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Age</label>
																			<input type="text" name="age" id="age" class="form-control" value="">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Gender</label>
																			<input type="text" name="gender" id="gender"  class="form-control" value="">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Account ID</label>
																			<input type="text" name="account_id" id="account_id" class="form-control" value="">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Contact</label>
																			<input type="text" name="contact" id="contact" class="form-control" value="">
																		</div>
																	</div>
																	<div class="col-12">
																		<div class="form-group">
																			<label>Address</label>
																			<div>
																				<input type="text" name="address" id="address" class="form-control" value="">
																			</div>
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>User Type</label>
																			<input type="text" name="user_type" id="user_type" class="form-control" value="">
																		</div>
																	</div>
																	<div class="col-12 col-sm-6">
																		<div class="form-group">
																			<label>Status</label>
																			<input type="text"  id="status" name="status" class="form-control" value="">
																		</div>
																	</div>
																	<!--  -->
																	<input type="hidden" id="id"  name="id"  >
																<button type="submit" name="update_user" class="btn btn-primary btn-block ">Save Changes</button>

															</form>
														</div>
													</div>
												</div>
											</div>
											<!-- /Edit Details Modal -->
												
												
											</tbody>
											
										</table>
									</div>
								</div>
							</div>
							
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->

		

			<!-- Delete Modal -->
			<div class="modal fade" id="delete_modal" aria-hidden="true" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document" >
					<div class="modal-content">
						<div class="modal-body">
							<div class="form-content p-2">
								<h4 class="modal-title">Delete</h4>
								<p class="mb-4">Are you sure want to delete User?</p>
								<button type="button" name="delete-user" class="btn btn-primary">Save </button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Delete Modal -->
		
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

		<!-- retreive data from db to disaplay in modal -->
		<Script>
			$(document).ready(function(){
				$('.editbtn').click(function(){
					$('#edit_user_details').modal('show');

					$tr = $(this).closest('tr');
					var data = $tr.children("td").map(function(){
						return $(this).text();
					}).get();

					console.log(data);
					$('#full_name').val(data[0]);
					$('#email').val(data[2]);
					$('#age').val(data[4]);
					$('#gender').val(data[5]);
					$('#account_id').val(data[6]);
					$('#address').val(data[7]);
					$('#contact').val(data[3]);
					$('#user_type').val(data[1]);
					$('#status').val(data[8]);
					$('#id').val(data[9]);
				});
			});


			$(document).ready(function(){
				$('.deletebtn').click(function(){
					$('#delete_modal').modal('show');

				

				});
			});


		</Script>
		
    </body>

</html>