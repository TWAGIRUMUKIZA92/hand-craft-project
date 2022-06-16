
<div class="row">

	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">
				<h3 class="text-success">Lean canvas (Phase 2)</h3>
				<div class="row">
					<div class="col-md-12">
						<form method="post" action="">
							<section id="cd-timeline" class="cd-container">

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-success">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box">
										<div class="cd-timeline-content text-center">

											<h3>Problem</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-danger">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box right">
										<div class="cd-timeline-content text-center">
											<h3>Solution
											</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-success">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box">
										<div class="cd-timeline-content text-center">
											<h3>Unique value</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-danger">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box right">
										<div class="cd-timeline-content text-center">
											<h3>Key metrics</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-success">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box">
										<div class="cd-timeline-content text-center">
											<textarea id="elm1" name="area" required></textarea>
											<h3>Unfair advantage</h3>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-danger">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box right">
										<div class="cd-timeline-content text-center">
											<h3>Customer segments</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-success">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box">
										<div class="cd-timeline-content text-center">
											<h3>Channels</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-danger">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box right">
										<div class="cd-timeline-content text-center">
											<h3>Cost structure</h3>
											<textarea id="elm1" name="area" required></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->

								<div class="cd-timeline-block">
									<div class="cd-timeline-img cd-danger">
										<i class="mdi mdi-adjust"></i>
									</div> <!-- cd-timeline-img -->

									<div class="cd-timeline-box left">
										<div class="cd-timeline-content">
											<h3 >Revenue streams</h3>
											<textarea id="elm1" name="area" required=""></textarea>
										</div>
									</div> <!-- cd-timeline-box -->
								</div> <!-- cd-timeline-block -->
							</section> <!-- cd-timeline -->

							<div class="col-12">
								<button type="button" class="btn btn-primary waves-effect waves-light float-right col-12">
									Update Information
								</button>
							</div>
						</form>
					</div>
				</div><!-- Row -->

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->

<!-- jQuery  -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js"></script>
<!-- App js -->
<script src="<?php echo base_url();?>assets/js/app.js"></script>

<script>
	$(document).ready(function () {
		if($("#elm1").length > 0){
			tinymce.init({
				selector: "textarea#elm1",
				theme: "modern",
				toolbar: "bold italic | bullist numlist",
				style_formats: [
					{title: 'Bold text', inline: 'b'}
				]
			});
		}
	});
</script>
