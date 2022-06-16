                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Sells Artisan</h4>
                                            <p class="text-muted m-b-30 font-14">
                                            </p>
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Quantity</th>
                                                    <th>Date</th>
                                                    <!-- <th>Price</th>
                                                    <th>Action</th> -->
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php
					foreach($data as $row)
					{?>
                                                <tr>
                                                    <td><?=$row->crft_id;?></td>
                                                    <td><?=$row->crft_title;?></td>
                                                    <td><?=$row->crft_img;?></td>
                                                    <td><?=$row->crft_desc;?></td>
                                                    <!-- <td>2011/04/25</td>
                                                    <td>$320,800</td> -->
                                                   
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