

			<div class="page-content-wrapper ">

				<div class="container-fluid">


					<!-- end row -->

					<div class="row">
						<div class="col-lg-10">
							<div class="card m-b-30">
								<div class="card-body">

									<h4 class="mt-0 header-title">Suspension Request </h4>


									<form class="" action="#">

										<div class="form-group">
											<label>R&D Title: </label>
											<div>
												<select  class="form-control" required>
													<option>--select Project--</option>
													<option>smart water</option>
													<option>smart cooker</option>
												</select >
											</div>
										</div>

										<div class="form-group">
											<label>Reasons of Suspension: </label>
											<div>
												<textarea  class="form-control" required parsley-type="email" cols="3" rows="4" placeholder="Enter your Reasons"></textarea >
											</div>
										</div>
										<div class="form-group">
											<label>Resuming Date:</label>
											<div>
												<input id="date" onchange="myFunction()" min="<?=date("Y-m-d");?>" type="date" class="form-control"/>
											</div>
										</div>

										<div class="form-group">
											<label> Suspension Days:</label>
												<p id="demo"></p>
										</div>


										<div class="form-group">
											<div>
												<button type="submit" class="btn btn-primary waves-effect waves-light">
													Submit
												</button>
												<button type="reset" class="btn btn-secondary waves-effect m-l-5">
													Cancel
												</button>
											</div>
										</div>
									</form>

									<script>
										function myFunction() {
											var sano = document.getElementById('date').value;
											var date1 = new Date(sano);
											var date2 = new Date();
											var difference = date1.getTime() - date2.getTime();
											var days = Math.ceil(difference / (1000 * 3600 * 24));
											document.getElementById("demo").innerHTML = days+1;
										}
									</script>

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
<!--			<script type = "text/javascript" >-->
<!--				// JavaScript program to illustrate-->
<!--				// calculation of no. of days between two date-->
<!---->
<!--				function myFunction(){-->
<!--					var today = new Date();-->
<!--					var dd = String(today.getDate()).padStart(2, '0');-->
<!--					var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!-->
<!--					var yyyy = today.getFullYear();-->
<!---->
<!--					today = yyyy + '-' + mm + '-' + dd;-->
<!---->
<!--					// To set two dates to two variables-->
<!--					var date1 = today;-->
<!--					var date2 = document.getElementById('date');-->
<!---->
<!--					// To calculate the time difference of two dates-->
<!--					var Difference_In_Time = date2.getTime() - date1.getTime();-->
<!---->
<!--					// To calculate the no. of days between two dates-->
<!--					var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24);-->
<!---->
<!--					//To display the final no. of days (result)-->
<!--					document.getElementById('days').value = date2;-->
<!--				}-->
<!---->
<!--			</script>-->
