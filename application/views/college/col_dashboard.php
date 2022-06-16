
<div class="row">
<div class="col-xl-3 col-md-6">
		
			<div class="card mini-stat m-b-30">
				<div class="p-3 bg-primary text-white">
					<div class="mini-stat-icon">
						<i class="mdi mdi-projector-screen float-right mb-0"></i>
					</div>
					<h6 class="text-uppercase mb-0">Project Accepted</h6>
				</div>
				<div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +5% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 55</p>
                                                </div>
                                                <h5 class="m-0">80<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
			</div>
		
	</div>
	<div class="col-xl-3 col-md-6">
			<div class="card mini-stat m-b-30">
				<div class="p-3 bg-danger text-white">
					<div class="mini-stat-icon">
						<i class="mdi mdi-projector-screen float-right mb-0"></i>
					</div>
					<h6 class="text-uppercase mb-0">Project Failed</h6>
				</div>
				<div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-danger"> +1% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 5</p>
                                                </div>
                                                <h5 class="m-0">6<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
			</div>
	</div>
	<div class="col-xl-3 col-md-6">
			<div class="card mini-stat m-b-30">
				<div class="p-3 bg-warning text-white">
					<div class="mini-stat-icon">
						<i class="mdi mdi-projector-screen float-right mb-0"></i>
					</div>
					<h6 class="text-uppercase mb-0">Project Suspended</h6>
				</div>
				<div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +0% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 2</p>
                                                </div>
                                                <h5 class="m-0">2<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
			</div>
	</div>
	<div class="col-xl-3 col-md-6">
		<a href="<?php echo base_url('College/completed');?>">
			<div class="card mini-stat m-b-30">
				<div class="p-3 bg-success text-white">
					<div class="mini-stat-icon">
						<i class="mdi mdi-projector-screen float-right mb-0"></i>
					</div>
					<h6 class="text-uppercase mb-0">Project Completed</h6>
				</div>
				<div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 125</p>
                                                </div>
                                                <h5 class="m-0">139<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
			</div>
		</a>
	</div>
<div class="col-xl-12">
                        
 <div  style="height: 450px">
								<script>
 window.onload = function () {

 var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "College R&D Chart"
	},
	axisX: {
		interval: 1,
		intervalType: "year",
		valueFormatString: "YYYY"
	},
	axisY: {
		suffix: "%"
	},
	toolTip: {
		shared: true
	},
	legend: {
		reversed: true,
		verticalAlign: "center",
		horizontalAlign: "right"
	},
	data: [{
		type: "stackedColumn100",
		name: "Completed",
		showInLegend: true,
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{ x: new Date(2015,0), y: 40 },
			{ x: new Date(2016,0), y: 50 },
			{ x: new Date(2017,0), y: 60 },
			{ x: new Date(2018,0), y: 61 },
			{ x: new Date(2019,0), y: 63 },
			{ x: new Date(2020,0), y: 65 },
			{ x: new Date(2021,0), y: 67 }
		]
	}, 
	{
		type: "stackedColumn100",
		name: "Failed",
		showInLegend: true,
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{ x: new Date(2015,0), y: 28 },
			{ x: new Date(2016,0), y: 18 },
			{ x: new Date(2017,0), y: 12 },
			{ x: new Date(2018,0), y: 10 },
			{ x: new Date(2019,0), y: 10 },
			{ x: new Date(2020,0), y: 7 },
			{ x: new Date(2021,0), y: 5 }
		]
	}, 
	{
		type: "stackedColumn100",
		name: "Suspended",
		showInLegend: true,
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{ x: new Date(2015,0), y: 15 },
			{ x: new Date(2016,0), y: 12 },
			{ x: new Date(2017,0), y: 10 },
			{ x: new Date(2018,0), y: 9 },
			{ x: new Date(2019,0), y: 7 },
			{ x: new Date(2020,0), y: 5 },
			{ x: new Date(2021,0), y: 1 }
		]
	},
	{
		type: "stackedColumn100",
		name: "Accepted",
		showInLegend: true,
		xValueFormatString: "YYYY",
		yValueFormatString: "#,##0\"%\"",
		dataPoints: [
			{ x: new Date(2015,0), y: 17 },
			{ x: new Date(2016,0), y: 20 },
			{ x: new Date(2017,0), y: 18 },
			{ x: new Date(2018,0), y: 20 },
			{ x: new Date(2019,0), y: 20 },
			{ x: new Date(2020,0), y: 23 },
			{ x: new Date(2021,0), y: 27 }
		]
	}]
 });
 chart.render();

 }
 </script>
 <a href="<?php echo base_url('College/report');?>">
 <div id="chartContainer" style="height: 450px; max-width: 920px; margin: 0px auto;"></div>
  </a>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

							</div>
                            </div>
                        </div>
</div>
</div></a> <!-- end row -->
