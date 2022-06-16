<link href="<?php echo base_url();?>assets/css/sano.css" rel="stylesheet" type="text/css">
<div class="row">
	<div class="col-11">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">Activate and Disactivate</h4>


				<table id="mainTable" class="table table-striped mb-0">
					<thead>
					<tr>
						<th>Profile</th>
						<th>Names</th>
						<th>College/School</th>
						<th>Contact</th>
						<th>Status</th>

					</tr>
					</thead>
					<tbody>
					<?php
					for ($x = 0; $x <4; $x++){
						?>
						<tr>
							<td><img style="height: 4em" src="<?php echo base_url();?>assets/images/users/user-<?=$x+1;?>.jpg" alt="user-img" class="img-fluid rounded-circle" /></td>
							<td>Alex<?=$x+1;?></td>
							<td>IPRC Tumba</td>
							<td>+250786979551</td>

							<td>
								<label class="switch">
									<input type="checkbox" checked>
									<span class="slider round"></span>
								</label>
							</td>
						</tr>
					<?php
					}
					?>

					</tbody>
					<tfoot>




					</tfoot>
				</table>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
