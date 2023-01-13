<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>St. Moses Memorial Hospital - Appointment List Page</title>

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
	<link rel="stylesheet" href="assets/css/calendar_style.css">

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
					<!-- <h1>sMMH</h1> -->
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
						<span class="user-img"><img class="rounded-circle" src="../home/images/title-logo.png" width="31" alt="Ryan Taylor "></span>
					</a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm">
								<img src="../home/images/title-logo.png" alt="User Image" class="avatar-img rounded-circle">
							</div>
							<div class="user-text">
								<h6>Ryan Taylor </h6>
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

						<li>
							<a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
						</li>
						<li class="active">
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
							<h3 class="page-title">Calendar</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item active">Calendar</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				<div class="row">
					<div class="col-md-12">

						<!-- Recent Orders -->

						<div class="app-container" ng-app="dateTimeApp" ng-controller="dateTimeCtrl as ctrl" ng-cloak>

							<div date-picker datepicker-title="Select Date" picktime="true" pickdate="true" pickpast="false" mondayfirst="false" custom-message="You have selected" selecteddate="ctrl.selected_date" updatefn="ctrl.updateDate(newdate)">

								<div class="datepicker" ng-class="{
				'am': timeframe == 'am',
				'pm': timeframe == 'pm',
				'compact': compact
			}">
									<div class="datepicker-header">
										<div class="datepicker-title" ng-if="datepicker_title">{{ datepickerTitle }}</div>
										<div class="datepicker-subheader">{{ customMessage }} {{ selectedDay }} {{ monthNames[localdate.getMonth()] }} {{ localdate.getDate() }}, {{ localdate.getFullYear() }}</div>
									</div>
									<div class="datepicker-calendar">
										<div class="calendar-header">
											<div class="goback" ng-click="moveBack()" ng-if="pickdate">
												<svg width="30" height="30">
													<path fill="none" stroke="#0DAD83" stroke-width="3" d="M19,6 l-9,9 l9,9" />
												</svg>
											</div>
											<div class="current-month-container">{{ currentViewDate.getFullYear() }} {{ currentMonthName() }}</div>
											<div class="goforward" ng-click="moveForward()" ng-if="pickdate">
												<svg width="30" height="30">
													<path fill="none" stroke="#0DAD83" stroke-width="3" d="M11,6 l9,9 l-9,9" />
												</svg>
											</div>
										</div>
										<div class="calendar-day-header">
											<span ng-repeat="day in days" class="day-label">{{ day.short }}</span>
										</div>
										<div class="calendar-grid" ng-class="{false: 'no-hover'}[pickdate]">
											<div ng-class="{'no-hover': !day.showday}" ng-repeat="day in month" class="datecontainer" ng-style="{'margin-left': calcOffset(day, $index)}" track by $index>
												<div class="datenumber" ng-class="{'day-selected': day.selected }" ng-click="selectDate(day)">
													{{ day.daydate }}
												</div>
											</div>
										</div>
									</div>
									<div class="timepicker" ng-if="picktime == 'true'">
										<div ng-class="{'am': timeframe == 'am', 'pm': timeframe == 'pm' }">
											<div class="timepicker-container-outer" selectedtime="time" timetravel>
												<div class="timepicker-container-inner">
													<div class="timeline-container" ng-mousedown="timeSelectStart($event)" sm-touchstart="timeSelectStart($event)">
														<div class="current-time">
															<div class="actual-time">{{ time }}</div>
														</div>
														<div class="timeline">
														</div>
														<div class="hours-container">
															<div class="hour-mark" ng-repeat="hour in getHours() track by $index"></div>
														</div>
													</div>
													<div class="display-time">
														<div class="decrement-time" ng-click="adjustTime('decrease')">
															<svg width="24" height="24">
																<path stroke="white" stroke-width="2" d="M8,12 h8" />
															</svg>
														</div>
														<div class="time" ng-class="{'time-active': edittime.active}">
															<input type="text" class="time-input" ng-model="edittime.input" ng-keydown="changeInputTime($event)" ng-focus="edittime.active = true; edittime.digits = [];" ng-blur="edittime.active = false" />
															<div class="formatted-time">{{ edittime.formatted }}</div>
														</div>
														<div class="increment-time" ng-click="adjustTime('increase')">
															<svg width="24" height="24">
																<path stroke="white" stroke-width="2" d="M12,7 v10 M7,12 h10" />
															</svg>
														</div>
													</div>
													<div class="am-pm-container">
														<div class="am-pm-button" ng-click="changetime('am');">am</div>
														<div class="am-pm-button" ng-click="changetime('pm');">pm</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="buttons-container">
										<div class="cancel-button">CANCEL</div>
										<div class="save-button">SAVE</div>
									</div>

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
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.2/angular.min.js'></script>
	<script src="./assets/js/calendar_script.js"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/appointment-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:49 GMT -->

</html>