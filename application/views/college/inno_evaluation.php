<div class="row">

	<div class="col-lg-6">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">Phase one<span class="float-right">40%</span></h4>

				<form action="#">
					<fieldset>
						<div class="form-group">
							<div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck1">Meeting the criteria</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck2" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck2">Provide all needed information</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck3" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck3">Description of project/Prototype as a solution</label>
								</div>

							</div>
						</div>

						<div class="form-group m-b-0">
							<div>
								<button type="submit" class="btn btn-primary waves-effect waves-light">
									Submit
								</button>
								<button type="reset" class="btn btn-secondary waves-effect m-l-5">
									Cancel
								</button>
							</div>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div> <!-- end col -->

	<div class="col-lg-6" onclick="mess()">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">Phase two<span class="float-right">0%</span></h4>

				<form action="#">
					<fieldset disabled="disabled">
						<div class="form-group">
							<div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck21">Meeting the criteria</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck22" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck22">Provide all needed information</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck23" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck23">Description of project/Prototype as a solution</label>
								</div>

							</div>
						</div>

						<div class="form-group m-b-0">
							<div>
								<button type="submit" class="btn btn-primary waves-effect waves-light">
									Submit
								</button>
								<button type="reset" class="btn btn-secondary waves-effect m-l-5">
									Cancel
								</button>
							</div>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div> <!-- end col -->
	<div class="col-lg-6"  onclick="mess()">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">Phase three<span class="float-right">0%</span></h4>
				<h5 id="phase3" class="text-danger"></h5>

				<form action="#">
					<fieldset disabled="disabled">
						<div class="form-group">
							<div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck31" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck31">Meeting the criteria</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck32" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck32">Provide all needed information</label>
								</div>
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck33" data-parsley-multiple="groups"
										   data-parsley-mincheck="2">
									<label class="custom-control-label" for="customCheck33">Description of project/Prototype as a solution</label>
								</div>

							</div>
						</div>

						<div class="form-group m-b-0">
							<div>
								<button type="submit" class="btn btn-primary waves-effect waves-light">
									Submit
								</button>
								<button type="reset" class="btn btn-secondary waves-effect m-l-5">
									Cancel
								</button>
							</div>
						</div>
					</fieldset>
				</form>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->

<script>
	function mess(){
		window.setTimeout('alert("Complete previous phase");window.close();',1);
	}
</script>
