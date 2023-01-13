<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Doccure - Doctor List Page</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="../home/images/title-logo.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="assets/css/feathericon.min.css">

	<!-- Datatables CSS -->
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
					<h1>sMMH</h1>
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
						<span class="user-img"><img class="rounded-circle" src="../home/images/title-logo.png" width="31" alt="Ryan Taylor "></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../home/images/title-logo.png" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>Ryan Taylor </h6>
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
							<h3 class="page-title">List of Doctors</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
								<li class="breadcrumb-item active">Doctor</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->

				<div class="row">
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Doctor Name</th>
												<th>Speciality</th>
												<th>Member Since</th>
												<th>Earned</th>
												<th>Account Status</th>

											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-01.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Ruby Perrin</a>
													</h2>
												</td>
												<td>Dental</td>

												<td>14 Jan 2019 <br><small>02.59 AM</small></td>

												<td>$3100.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Darren Elder</a>
													</h2>
												</td>
												<td>Dental</td>

												<td>11 Jun 2019 <br><small>4.50 AM</small></td>

												<td>$5000.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-03.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Deborah Angel</a>
													</h2>
												</td>
												<td>Cardiology</td>

												<td>4 Jan 2018 <br><small>9.40 AM</small></td>

												<td>$3300.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-04.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Sofia Brient</a>
													</h2>
												</td>
												<td>Urology</td>

												<td>5 Jul 2019 <br><small>12.59 AM</small></td>

												<td>$3500.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-05.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Marvin Campbell</a>
													</h2>
												</td>
												<td>Orthopaedics</td>

												<td>24 Jan 2019 <br><small>02.59 AM</small></td>

												<td>$3700.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-06.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Katharine Berthold</a>
													</h2>
												</td>
												<td>Orthopaedics</td>

												<td>23 Mar 2019 <br><small>02.50 PM</small></td>

												<td>$4000.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-07.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Linda Tobin</a>
													</h2>
												</td>
												<td>Neurology</td>

												<td>14 Dec 2018 <br><small>01.59 AM</small></td>

												<td>$2000.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-08.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Paul Richard</a>
													</h2>
												</td>
												<td>Dermatology</td>

												<td>11 Jan 2019 <br><small>02.59 AM</small></td>

												<td>$3000.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-09.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. John Gibbs</a>
													</h2>
												</td>
												<td>Dental</td>

												<td>21 Apr 2018 <br><small>02.59 PM</small></td>

												<td>$4100.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/doctors/doctor-thumb-10.jpg" alt="User Image"></a>
														<a href="profile.php">Dr. Olga Barlow</a>
													</h2>
												</td>
												<td>Dental</td>

												<td>15 Feb 2018 <br><small>03.59 AM</small></td>

												<td>$3500.00</td>

												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
											</tr>
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

	</div>
	<!-- /Main Wrapper -->

	<!-- jQuery -->
	<script src="assets/js/jquery-3.2.1.min.js"></script>

	<!-- Bootstrap Core JS -->
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- Slimscroll JS -->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Datatables JS -->
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>

	<!-- Custom JS -->
	<script src="assets/js/script.js"></script>

</body>


</html>