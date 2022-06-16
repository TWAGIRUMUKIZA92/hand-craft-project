<div class="row">
	<?php
	for ($i=0; $i<=3;$i++){
		?>
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-md-2 m-t-30">
							<div class=" text-center">
								<img style="height: 7em" src="<?php echo base_url();?>assets/images/users/user<?=$i+1;?>.png" alt="user-img" class="img-fluid rounded-circle" />
							</div>
						</div>
						<div class="col-sm-6 col-md-4 m-t-30">
							<div class=" text-left">
								Name: Karekezi
								<br>
								Contact:Karekezi@gmail.com
								<br>
								Department: Information Technology
							</div>
						</div>
						<div class="col-sm-6 col-md-3 m-t-30">
						<a href="<?php echo base_url('');?>"><div class=" text-left">
								<b>Smart tank</b>
								<br>
								It's used to manage water tanks and is for remote controll
							</div></a>
						</div>
						<div class="col-sm-6 col-md-3 m-t-30">
							<div class=" text-center">
								<button class="btn btn-success" disabled>Comfirm</button>
								<button class="btn btn-danger" disabled>Reject</button>
							</div>
						</div>
					</div> <!-- end row -->
				</div>
			</div>
		</div>
		<?php
	}
	?>
</div><!-- end row -->
