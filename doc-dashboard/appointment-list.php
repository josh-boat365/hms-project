<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>St. Moses Memorial Hospital - Appointment List Page</title>

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

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
				<a href="../index.php" class="logo">
					<!-- <img src="assets/img/logo.png" alt="Logo"> -->
					<h1>sMMH</h1>
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
								<p class="text-muted mb-0">Doctor</p>
							</div>
						</div>
						<a class="dropdown-item" href="profile.html">My Profile</a>
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
							<span>Doctor's Dashboard</span>
						</li>
						<li>
							<a href="./doctors-dash.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
						</li>

						<li class="active">
							<a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
						</li>
						<li>
							<a href="calendar.php"><i class="fe fe-calendar"></i> <span>Calendar</span></a>
						</li>
						<li>
							<a href="status.php"><i class="fe fe-activity"></i> <span>Statistics</span></a>
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
							<h3 class="page-title">Appointments</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Appointments</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-md-12">

						<!-- Recent Orders -->
						<div class="card">
							<div class="card-body">
								<div class="table-responsive">
									<table class="datatable table table-hover table-center mb-0">
										<thead>
											<tr>
												<th>Patient Name</th>
												<th>Apointment Time</th>
												<th>Status</th>
												<th class="text-right">Amount</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient1.jpg" alt="User Image"></a>
														<a href="profile.php">Charlene Reed </a>
													</h2>
												</td>
												<td>9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_1" class="check" checked>
														<label for="status_1" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$200.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.html" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient2.jpg" alt="User Image"></a>
														<a href="profile.php">Travis Trimble </a>
													</h2>
												</td>

												<td>5 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.35 AM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_2" class="check" checked>
														<label for="status_2" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$300.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient3.jpg" alt="User Image"></a>
														<a href="profile.php">Carl Kelly</a>
													</h2>
												</td>
												<td>11 Nov 2019 <span class="text-primary d-block">12.00 PM - 12.15 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_3" class="check" checked>
														<label for="status_3" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$150.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient4.jpg" alt="User Image"></a>
														<a href="profile.php"> Michelle Fairfax</a>
													</h2>
												</td>
												<td>7 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.20 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_4" class="check" checked>
														<label for="status_4" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$150.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient5.jpg" alt="User Image"></a>
														<a href="profile.php">Gina Moore</a>
													</h2>
												</td>

												<td>15 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$200.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient6.jpg" alt="User Image"></a>
														<a href="profile.php">Elsie Gilley</a>
													</h2>
												</td>

												<td>16 Nov 2019 <span class="text-primary d-block">1.00 PM - 1.15 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$250.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient7.jpg" alt="User Image"></a>
														<a href="profile.php">Joan Gardner</a>
													</h2>
												</td>

												<td>18 Nov 2019 <span class="text-primary d-block">1.10 PM - 1.25 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$260.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient8.jpg" alt="User Image"></a>
														<a href="profile.php"> Daniel Griffing</a>
													</h2>
												</td>

												<td>18 Nov 2019 <span class="text-primary d-block">11.10 AM - 11.25 AM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$260.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient9.jpg" alt="User Image"></a>
														<a href="profile.php">Walter Roberson</a>
													</h2>
												</td>

												<td>21 Nov 2019 <span class="text-primary d-block">12.10 PM - 12.25 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$300.00
												</td>
											</tr>
											<tr>
												<td>
													<h2 class="table-avatar">
														<a href="profile.php" class="avatar avatar-sm mr-2"><img class="avatar-img rounded-circle" src="assets/img/patients/patient10.jpg" alt="User Image"></a>
														<a href="profile.php">Robert Rhodes</a>
													</h2>
												</td>

												<td>23 Nov 2019 <span class="text-primary d-block">12.10 PM - 12.25 PM</span></td>
												<td>
													<div class="status-toggle">
														<input type="checkbox" id="status_5" class="check" checked>
														<label for="status_5" class="checktoggle">checkbox</label>
													</div>
												</td>
												<td class="text-right">
													$300.00
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- /Recent Orders -->

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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->

</html>