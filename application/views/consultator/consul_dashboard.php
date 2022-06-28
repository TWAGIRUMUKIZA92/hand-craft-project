                            
                            <div class="row">
                            <a href="<?php echo base_url();?>consultator//craft_list">
                            	<div class="col-xl-4 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">TOTAL Crafts</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> <?=$dataif->crft_quantity+$deleteif->crft_quantity;?></span> <span class="ml-2 text-muted">Total Crafts</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Remaining Crafts : <?=$dataif->crft_quantity?></p>
                                                </div>
                                                <h5 class="m-0"><?=$deleteif->crft_quantity;?><i class="mdi mdi-arrow-down text-danger ml-2"></i> Crafts</h5>
                                                
                                            </div>
                                        </div>
                        </a>  
                                    </div>
                                </div>
                             
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-cart-outline float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Total Sales</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 14256</p>
                                                </div>
                                                <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url();?>consultator//craft_list">
                                <div class="col-xl-4 col-md-6">
                                    <div class="card mini-stat m-b-30">
                                        <div class="p-3 bg-primary text-white">
                                            <div class="mini-stat-icon">
                                                <i class="mdi mdi-account-network float-right mb-0"></i>
                                            </div>
                                            <h6 class="text-uppercase mb-0">Total Cooperatives</h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="border-bottom pb-4">
                                                    <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                                            </div>
                                            <div class="mt-4 text-muted">
                                                <div class="float-right">
                                                    <p class="m-0">Last : 3426</p>
                                                </div>
                                                <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                            <!-- end row -->