

<div class="row">
	<div class="col-lg-10">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">New Innovation Form</h4>
				<p class="text-muted m-b-30 font-14">This form generated to you for registring a new innovation as an innovator.</p>

				<form class="" action="#">
					<div class="form-group">
						<label>E-Mail</label>
						<div>
							<input type="email" class="form-control" required
								   parsley-type="email" placeholder="Enter a valid e-mail"/>
						</div>
					</div>
					<div class="form-group">
						<label>First Name</label>
						<div>
							<input type="text" class="form-control" placeholder="First Name" readonly/>
						</div>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<div>
							<input type="text" class="form-control" placeholder="Last Name" readonly/>
						</div>
					</div>
					<div class="form-group">
						<label>R&D Title</label>
						<div>
							<input type="text" class="form-control"
								   required placeholder="Enter your R&D Title"/>
						</div>
					</div>
					<div class="form-group">
						<label>Number of Member</label>
						<div>
							<input type="number" required class="form-control" placeholder="2">
						</div>
					</div>
					<div class="form-group">
						<div>
							<a href="<?php echo base_url(); ?>innovator/canvas1"><button type="button" class="btn btn-primary waves-effect waves-light">
								Next>>
								</button></a>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->

