<div class="row">
                                    <div class="col-12">
                                        <div class="card m-b-30">
                                            <div class="card-body">
                
                                                <h2 class="mt-0 header-title text-center border-bottom text-warning">Crafts</h2>
    
                                                <div class="form-group row has-success">
                                                    <label for="inputHorizontalSuccess" class="col-sm-12 col-form-label text-center">Update craft</label>
                                                </div>

                                                <form method="post" action="" enctype="multipart/form-data">
                                                <?php
					                           foreach($data as $row)
					                            {?>
                                                <!-- <div class="form-group row has-success">
                                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Craft Banner</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" name="crft_img" value="<?=$row->crft_img;?>" class="form-control form-control-success" id="inputHorizontalSuccess" required readonly>
                                                    </div>
                                                </div> -->
    
                                                <div class="form-group row has-success ">
                                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Quantity</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="crft_quantity" class="form-control form-control-danger" value="<?=$row->crft_quantity;?>" id="inputHorizontalSuccess" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row has-success ">
                                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Price</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="crft_price" class="form-control form-control-danger" value="<?=$row->crft_price;?>" id="inputHorizontalSuccess" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row has-success">
                                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Craft description</label>
                                                <!-- <div class="form-group row has-success text-center">
                                                    <label for="inputHorizontalSuccess" class="col-sm-2 col-form-label">Craft description</label> -->
                                                </div>
                                                <div class="form-group row has-warning">
                                                    <div class="col-sm-12">
                                                        <textarea name="crft_desc" id="myTextarea" value="<?=$row->crft_desc;?>"></textarea>
                                                    </div>
                                                </div>
                                                <?php
					                              }
					                             ?>                                            
                                                <div class="text-center m-t-15">
                                                    <input type="submit" class="btn btn-primary waves-effect waves-light" value="Update Craft" name="updatecraft"/>
                                                    <button type="reset" class="btn btn-default waves-effect m-l-5">
								Cancel
							</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->