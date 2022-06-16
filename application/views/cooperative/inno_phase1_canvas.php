
<div class="row">

	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">
				<h3 class="text-success">Lean canvas (Phase 1)</h3>
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Problem(Top3 problems)</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
					<div class="col-md-6">
						<div class="">
							<div class="text-center">
								<span class="cd-date text-primary">  Solution(Top3 Features)</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
				</div><!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Unique value</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
					<div class="col-md-6">
						<div class="">
							<div class="text-center">
								<span class="cd-date text-primary">  Unfair Advantage</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
				</div><!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Customer Segments</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
					<div class="col-md-6">
						<div class="">
							<div class="text-center">
								<span class="cd-date text-primary">  Key Metrics</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
				</div><!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Channels(path to customer)</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
					<div class="col-md-6">
						<div class="">
							<div class="text-center">
								<span class="cd-date text-primary">  Cost Structure</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
				</div><!-- Row -->
				<div class="row">
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Existing alternatives</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
					<div class="col-md-6">
						<div class="">
							<div class="cd-timeline-content text-center">
								<span class="cd-date text-primary">Revenue streams</span>
								<textarea id="elm1" name="area" required></textarea>
							</div>
						</div> <!-- cd-timeline-box -->
					</div> <!-- cd-timeline-block -->
				</div><!-- Row -->
				<br>


				<div class="col-12">
					<button type="button" class="btn btn-primary waves-effect waves-light float-right col-12">
						Submit Information
					</button>
				</div>

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
