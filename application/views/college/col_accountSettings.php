

<div class="page-content-wrapper ">

	<div class="container-fluid">


		<!-- end row -->

		<div class="row">
			<div class="col-lg-6">
				<div class="card m-b-30">
					<div class="card-body">

						<h4 class="mt-0 header-title text-success">Account Settings </h4>


						<form class="" action="#" method="post">
							<div class="form-group">
								<label>Change Your Contacts:</label>
								<input type="text" class="form-control"  name="phone" required placeholder="Phone Number" />
							</div>
							<div class="form-group">
								<label>Change Your Profile: </label>
								<div>
									<input type="file" class="form-control" required parsley-type="image" >
								</div>
							</div>
							<div class="form-group">
								<div>
									<button type="submit" class="btn-primary waves-effect waves-light" name="changepass">
										Change
									</button>
									<button type="reset" class="btn-warning waves-effect m-l-5">
										Cancel
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div> <!-- end col -->
			<div class="col-lg-6">
				<div class="card m-b-30">
					<div class="card-body">

						<h4 class="mt-0 header-title text-success">Change Account Password </h4>


						<form class="" action="#" method="post">
							<div class="form-group">
								<label>Type Your Oldpassword:</label>
								<input type="password" class="form-control"  name="oldpassword" required />
							</div>
							<div class="form-group">
								<label> Your New password:</label>
								<input type="password" class="form-control"  name="newpassword" required  />
							</div>

							<div class="form-group">
								<label> confirm  password:</label>
								<input type="password" class="form-control"  name="confpassword" required />
							</div>
							<div class="form-group">
								<div>
									<button type="submit" class=" btn-primary waves-effect waves-light" name="change">
										Change
									</button>
									<button type="reset" class=" btn-warning waves-effect m-l-5">
										Cancel
									</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div> <!-- end col -->

		</div> <!-- end row -->

	</div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
	<b>© <?php echo date("Y"); ?>
		IPRC TUMBA</b> <span class="d-none d-sm-inline-block"> - Research & Development MIS</span>
</footer>
</div>
<!-- End Right content here -->

</div>
<!-- END wrapper -->


<!-- jQuery  -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>assets/js/detect.js"></script>
<script src="<?php echo base_url();?>assets/js/fastclick.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>assets/js/waves.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.scrollTo.min.js"></script>

<!-- Parsley js -->
<script src="<?php echo base_url();?>assets/plugins/parsleyjs/parsley.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script>
	$(document).ready(function() {
		$('form').parsley();
	});
</script>

</body>
</html>
