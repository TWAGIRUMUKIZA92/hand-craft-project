<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>R&D MIS</title>
	<meta content="Admin InnoDashboard" name="description" />
	<meta content="ThemeDesign" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">

	<!--Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">

	<!--Chartist Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/chartist/css/chartist.min.css">

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

	<!-- DataTables -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- DataTables -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!--End of Data Table-->
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
	<!--  chat-->
	<link href="<?php echo base_url();?>assets/css/forum.css"  rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/forum_chat.css"  rel="stylesheet" type="text/css">
	<!--end chat-->
	<link href="<?php echo base_url();?>assets/css/chat.css"  rel="stylesheet" type="text/css">
	<!-- C3 charts css -->
	<link href="<?php echo base_url();?>assets/plugins/c3/c3.min.css" rel="stylesheet" type="text/css"  />

</head>


<body class="fixed-left">

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Begin page -->
<div id="wrapper">

	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
			<i class="ion-close"></i>
		</button>

		<div class="left-side-logo d-block d-lg-none">
			<div class="text-center">

				<a href="<?php echo base_url();?>Rp/" class="logo"><img src="<?php echo base_url();?>assets/images/logo-dark.png" height="20" alt="logo"></a>
			</div>
		</div>

		<div class="sidebar-inner slimscrollleft">

			<div id="sidebar-menu">
				<ul>
					<li class="menu-title">Main</li>

					<li>
						<a href="<?php echo base_url();?>rp/" class="waves-effect">
							<i class="mdi mdi-view-dashboard"></i>
							<span> Dashboard </span>
						</a>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account"></i> <span> Manage Users </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url();?>rp/newUser">Register new User</a></li>
							<li><a href="<?php echo base_url();?>rp/action">User informations</a></li>
						</ul>
					</li>

					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-file-document-box"></i> <span> Colleges & schools </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url();?>rp/newCollege">Add College/School</a></li>
							<li><a href="<?php echo base_url();?>rp/collegeAction">Enable/Disable</a></li>
							<li><a href="<?php echo base_url();?>rp/report">College&school report</a></li>
						</ul>
					</li>



					<li>
						<a href="<?php echo base_url();?>rp/chat" class="waves-effect"><i class="mdi mdi-message-text"></i><span> Forum</span> <span class="badge badge-success badge-pill float-right">3</span></a>
					</li>

					<li>
						<a href="" class="waves-effect">
							<i class="mdi mdi-help-circle"></i>
							<span> Seek Help </span>
						</a>
					</li>

					<li>
						<a href="<?php echo base_url();?>rp/setting" class="waves-effect">
							<i class="mdi mdi-settings"></i>
							<span> Account Setting </span>
						</a>
					</li>

				</ul>
			</div>
			<div class="clearfix"></div>
		</div> <!-- end sidebarinner -->
	</div>
	<!-- Left Sidebar End -->

	<!-- Start right Content here -->

	<div class="content-page">
		<!-- Start content -->
		<div class="content">

			<!-- Top Bar Start -->
			<div class="topbar">

				<div class="topbar-left	d-none d-lg-block">
					<div class="text-center">

						<a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>assets/images/logo.png" height="70" alt="logo"></a>
					</div>
				</div>

				<nav class="navbar-custom">

					<ul class="list-inline float-right mb-0">
						<li class="list-inline-item dropdown d-none d-sm-inline-block ">
							<span class="text-white" style="margin-right: 70px">Research & Development MIS</span>
						</li>
						<li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
							<form role="search" class="app-search">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Search...">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</li>
						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?php echo base_url();?>#" role="button"
							   aria-haspopup="false" aria-expanded="false">
								<i class="mdi mdi-email-outline noti-icon"></i>
								<span class="badge badge-danger badge-pill noti-icon-badge">5</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<span class="badge badge-danger float-right">367</span>
									<h5>Messages</h5>
								</div>
								<div class="slimscroll" style="max-height: 230px;">
									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon"><img src="<?php echo base_url();?>assets/images/users/user-2.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
										<p class="notify-details"><b>Audace SANGANO</b><span class="text-muted">your project has been promoted to anather stage.</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon"><img src="<?php echo base_url();?>assets/images/users/user-3.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
										<p class="notify-details"><b>Jean D'amour</b><span class="text-muted">You have 87 unread messages</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon"><img src="<?php echo base_url();?>assets/images/users/user-4.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
										<p class="notify-details">Gustave KAREKEZI<span class="text-muted">It is a long established fact that a reader will</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon"><img src="<?php echo base_url();?>assets/images/users/user-5.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
										<p class="notify-details"><b>Kevin Kamugisha</b><span class="text-muted">Dummy text of the printing and typesetting industry.</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon"><img src="<?php echo base_url();?>assets/images/users/user-6.jpg" alt="user-img" class="img-fluid rounded-circle" /> </div>
										<p class="notify-details"><b>Blaise YONKURU</b><span class="text-muted">You have 87 unread messages</span></p>
									</a>
								</div>


								<!-- All-->
								<a href="javascript:void(0);" class="dropdown-item notify-all">
									View All
								</a>

							</div>
						</li>

						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="<?php echo base_url();?>#" role="button"
							   aria-haspopup="false" aria-expanded="false">
								<i class="mdi mdi-bell-outline noti-icon"></i>
								<span class="badge badge-success badge-pill noti-icon-badge">3</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<span class="badge badge-danger float-right">84</span>
									<h5>Notification</h5>
								</div>

								<div class="slimscroll" style="max-height: 230px;">

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon bg-primary"><i class="mdi mdi-account-card-details "></i></div>
										<p class="notify-details">Your Account blocked<span class="text-muted">your account has been bloched plz contact your adminisrator.</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon bg-success"><i class="mdi mdi-message"></i></div>
										<p class="notify-details">Dead line<span class="text-muted">You have 10 days remain</span></p>
									</a>

									<!-- item-->
									<a href="javascript:void(0);" class="dropdown-item notify-item">
										<div class="notify-icon bg-warning"><i class="mdi mdi-martini"></i></div>
										<p class="notify-details">Your innovation stage<span class="text-muted">Now you reach on this stage</span></p>
									</a>

									<!-- All-->
									<a href="javascript:void(0);" class="dropdown-item notify-all">
										View All
									</a>

								</div>
						</li>

						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="<?php echo base_url();?>#" role="button"
							   aria-haspopup="false" aria-expanded="false">
								<img src="<?php echo base_url();?>assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
								<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
								<a class="dropdown-item" href="<?php echo base_url();?>rp/setting"><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
								<a class="dropdown-item" href="<?php echo base_url();?>rp/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
							</div>
						</li>

					</ul>

					<ul class="list-inline menu-left mb-0">
						<li class="list-inline-item">
							<button type="button" class="button-menu-mobile open-left waves-effect">
								<i class="ion-navicon"></i>
							</button>
						</li>
					</ul>

					<div class="clearfix"></div>

				</nav>

			</div>
			<!-- Top Bar End -->

			<div class="page-content-wrapper ">

				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<div class="float-right page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="">R&D</a></li>
									<li class="breadcrumb-item active"><?php echo $page;?></li>
								</ol>
							</div>
							<h5 class="page-title"><?php echo $page;?></h5>
						</div>
					</div>
					<!-- end row -->

