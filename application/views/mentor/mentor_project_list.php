
<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title">My Project</h4>

				<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
					<tr>
						<th>owner</th>
						<th>Project title</th>
						<th>current stage</th>
						<th>member</th>
						<th>department</th>
						<th>status</th>
					</tr>
					</thead>


					<tbody>
					<?php
					for($i=0 ; $i<40 ; $i++){
						?>
						<tr>
							<td>Garrett Winters</td>
							<td><a href="<?php echo base_url(); ?>mentor/details"> smart water tank</a></td>
							<td>3</td>
							<td>63</td>
							<td>Information technology</td>
							<td>Suspended</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>

			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
