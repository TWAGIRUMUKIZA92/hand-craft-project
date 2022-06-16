<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>Nyamasheke District</title>
	<meta content="Admin InnoDashboard" name="description" />
	<meta content="ThemeDesign" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">
    <!-- Dropzone css -->
        <link href="<?php echo base_url();?>assets/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
	<!--Morris Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">

	<!--Chartist Chart CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/chartist/css/chartist.min.css">

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>assets/css/top.css" rel="stylesheet" type="text/css">

	<!-- check-->
	<link href="<?php echo base_url();?>assets/css/sano.css" rel="stylesheet" type="text/css">

	<!-- DataTables -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

	<!-- ========== Left Sidebar Start ========== -->
	<div class="left side-menu">
		<button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
			<i class="ion-close"></i>
		</button>

		<div class="left-side-logo d-block d-lg-none">
			<div class="text-center">

				<a href="<?php echo base_url();?>InnoDashboard/" class="logo"><img src="<?php echo base_url();?>assets/images/logo-dark.png" height="20" alt="logo"></a>
			</div>
		</div>

		<div class="sidebar-inner slimscrollleft">

			<div id="sidebar-menu">
				<ul>
					<li class="menu-title">Main</li>

					<li>
						<a href="<?php echo base_url();?>cooperative/index" class="waves-effect">
							<i class="mdi mdi-view-dashboard"></i>
							<span> Dashboard </span>
						</a>
					</li>
					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple-outline "></i> <span> Members </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url();?>cooperative/new_member"><i class="mdi mdi-account-plus"></i>Add new Member</a></li>
							<li><a href="<?php echo base_url();?>cooperative/#"><i class="mdi mdi-file-document-box"></i>Member List</a></li>
						</ul>
					</li>
					<li class="has_sub">
						<a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-trophy "></i> <span> Crafts </span> <span class="menu-arrow float-right"><i class="mdi mdi-chevron-right"></i></span></a>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url();?>cooperative/new_craft"><i class="mdi mdi-trophy "></i>Add new Craft</a></li>
							<li><a href="<?php echo base_url();?>cooperative/craft_list"><i class="mdi mdi-file-document-box"></i>Crafts List</a></li>
						</ul>
					</li>
					<li>
						<a href="#" class="waves-effect"><i class="mdi mdi-cart-outline float-left mb-0"></i><span> Sells</span> <span class="badge badge-success badge-pill float-right">3</span></a>
					</li>



					<li>
						<a href="<?php echo base_url();?>cooperative/settings" class="waves-effect">
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

						<a href="<?php echo base_url();?>" class="logo"><img src="<?php echo base_url();?>assets/images/logo-dark.png" height="70" alt="logo"></a>
					</div>
				</div>

				<nav class="navbar-custom">

					<ul class="list-inline float-right mb-0">
						<li class="list-inline-item dropdown d-none d-sm-inline-block ">
							<span class="text-white" style="margin-right: 70px">NYAMASHEKE COOPERATIVE</span>
						</li>
						<!-- <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
							<form role="search" class="app-search">
								<div class="form-group mb-0">
									<input type="text" class="form-control" placeholder="Search...">
									<button type="submit"><i class="fa fa-search"></i></button>
								</div>
							</form>
						</li> -->


						<li class="list-inline-item dropdown notification-list">
							<a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="<?php echo base_url();?>#" role="button"
							   aria-haspopup="false" aria-expanded="false">
								<img src="<?php echo base_url();?>assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
							</a>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
								<a class="dropdown-item" href="#"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Profile</a>
								<a class="dropdown-item" href="<?php echo base_url();?>cooperative/settings"><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline m-r-5 text-muted"></i> Lock screen</a>
								<a class="dropdown-item" href="<?php echo base_url();?>cooperative/logout"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
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
									<li class="breadcrumb-item"><a href="">COOPERATIVE</a></li>
									<li class="breadcrumb-item active"><?php echo $page;?></li>
								</ol>
							</div>
							<h5 class="page-title"><?php echo $page;?></h5>
						</div>
					</div>

					<button onclick="topFunction()" id="myBtn" title="Go to top" class="rounded-circle">Top</button>
					<!-- end row -->
