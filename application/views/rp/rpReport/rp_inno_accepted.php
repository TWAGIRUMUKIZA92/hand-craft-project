<html>
<body class="fixed-left">
<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">

				<h4 class="mt-0 header-title"><Name class="text-primary">College Name</Name> Accepted Innovation</h4>
				<p class="text-muted m-b-30 font-14">
				</p>
				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
					<tr>
						<th>N<sup>o</sup></th>
						<th>Innovation Title</th>
						<th>Owner</th>
						<th>Department</th>
						<th>Year</th>
						<th>Review</th>
					</tr>
					</thead>


					<tbody>

					<?php
					for ($a = 1; $a <4; $a++){
						?>

						<tr>


							<td>1</td>
							<td> Seka Muhinzi App.<?php echo $a?></td>
							<td>Tushimire Audace</td>
							<td>Information Technology</td>
							<td>2021</td>
							<td><span class="bg-success">
							<a href="#" class="btn-link text-white"><a href="<?php echo base_url()?>rp/acceptedDetails" class="text-white "><span class="mdi mdi-file "> Details</span> </a> </span> </td>

						</tr>
					<?php }?>



					</tbody>
				</table>

			</div>
		</div>

	</div> <!-- end col -->
</div> <!-- end row -->
<div class="input-group-append add-on float-right">
	<button class="btn btn-success" type="button" onclick="history.go(-1)">
		Go back <<
	</button>
</div>
</div><!-- container fluid -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->


</body>
</html>
