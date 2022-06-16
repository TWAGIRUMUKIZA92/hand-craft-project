<link href="<?php echo base_url();?>assets/css/sano.css" rel="stylesheet" type="text/css">
<div class="row">
	<?php
	for ($i=0; $i<=3;$i++){
		?>
		<div class="col-12">
			<div class="card m-b-30">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-6 col-md-4 m-t-30">
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
						<div class="col-sm-6 col-md-4 m-t-30">
							<div class=" text-center">
								<label class="switch">
									<input type="checkbox" checked>
									<span class="slider round"></span>
								</label>
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
