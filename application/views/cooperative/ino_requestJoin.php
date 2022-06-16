<div class="row">
	<div class="col-lg-12">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">Member Form</h4>
				<p class="text-muted m-b-30 font-14">Use this form to add member to cooperative</p>

				<form action="<?= base_url() ?>Cooperative/request" method="post" enctype="multipart/form-data">
										<div class="form-group">
						<label>First Name</label>
						<div>
							<input type="text" class="form-control" placeholder="First Name" required="" name="m_fname" />
						</div>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<div>
							<input type="text" class="form-control" placeholder="Last Name" required="" name="m_lname" />
						</div>
					</div>
					<div class="form-group row has-success">
						<label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control form-control-success" id="inputHorizontalSuccess" placeholder="name@example.com" name="m_email">
						</div>
					</div>
					<div class="form-group">
						<label>Phone Number</label>
						<div>
							<input type="number" class="form-control" placeholder="Telephone number" required="" name="m_contact" />
						</div>
					</div>
					<div class="form-group">
						<label>Age</label>
						<div>
							<input type="number" class="form-control" placeholder="Enter member's age" required="" name="m_age" />
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Select</label>
						<div class="col-sm-10">
							<select class="form-control" name="m_gender">
								<option>---Select Gender---</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="form-group float-right">
						<div>
							<!-- <button type="submit" class="btn btn-primary waves-effect waves-light" name="addmember">
								<i class="mdi mdi-plus"></i>
								Add
							</button> -->
							<input type="submit" class="btn btn-primary waves-effect waves-light" name="addmember" value="Add">
							<button type="reset" class="btn btn-default waves-effect m-l-5">
								Cancel
							</button>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
