<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>Consultator Login</title>
	<meta content="Admin Dashboard" name="description" />
	<meta content="ThemeDesign" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png">

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Begin page -->
<div class="accountbg">

	<div class="content-center">
		<div class="content-desc-center">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-5 col-md-8">
						<div class="card">
							<div class="card-body">

								<h3 class="text-center mt-0 m-b-15">
									<a href="<?= base_url();?>comsultator/login" class="logo logo-admin"><img src="<?php echo base_url(); ?>assets/images/logo-dark.png" height="30" alt="logo"></a>
								</h3>
								<h4 class="text-muted text-center font-18"><b><?=$page;?></b></h4>
								<h5 class="text-muted text-center font-18"><b><?php echo @$error; ?></b></h5>

								<div class="p-2">
									<form class="form-horizontal m-t-20"  action="<?php echo base_url();?>consultator/login" method="post" enctype="multipart/form-data">

										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" name="coop_email" type="email" required="" placeholder="Email">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" name="coop_pass" type="password" required="" placeholder="Password">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-6">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Remember me</label>
												</div>
											</div>
											<div class="col-6">
												<div class="custom-control custom-checkbox float-right">
													<a href="<?php echo base_url(); ?>">Go home</a>
												</div>
											</div>
										</div>

										<div class="form-group text-center row m-t-20">
											<div class="col-12">
												<input class="form-control bg-primary text-white" name="login" type="submit" value="Log In">
											</div>
										</div>

										<div class="form-group m-t-10 mb-0 row">
											<div class="col-sm-7 m-t-20">
												<a href="<?=base_url()?>consultator/reset" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
											</div>
											<!-- <div class="col-sm-5 m-t-20">
												<a href="<?=base_url()?>cooperative/new_account" class="text-muted"><i class="mdi mdi-account-circle"></i> Create an account</a>
											</div> -->
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- end row -->
			</div>
		</div>
	</div>
</div>

<!-- jQuery  -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/detect.js"></script>
<script src="<?php echo base_url(); ?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

</body>
</html>
