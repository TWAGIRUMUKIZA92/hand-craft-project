                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <!-- <h4 class="mt-0 header-title">Craft List</h4> -->
                                            <p class="text-muted m-b-30 font-14">
                                            </p>
            
                                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Cooperative Name</th>
                                                    <th>Email</th>
                                                    <th>Telephone</th>
                                                    <th>Licence</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
            
            
                                                <tbody>
                                                <?php
          if($data->num_rows()>0)
          {
            foreach ($data->result() as $row)
             {
                       ?>
                                                <tr>
                                                <td><?=$row->coop_id;?> </td>
                                                <td><?=$row->coop_name;?></td>
                                                <td><?=$row->coop_email;?></td>
                                                <td><?=$row->coop_tel;?></td>

                                                    <td><?=$row->coop_licence;?></td>
                                                    
                                                    <!-- <td><a href="<?php echo base_url(); ?>Cooperative/updateCraft/<?=$row->crft_id;?>"><i class="mdi mdi-table-edit text-success"></i>Edit</a>/<a href="<?php echo base_url(); ?>Cooperative/craft_list/<?=$row->crft_id;?>"><i class="mdi mdi-delete text-danger"></i>Delete</a></td> -->
                                                    <td>
                                                    <div class="col-sm-6 col-md-4 col-xl-3 m-b-30">
                                                    <button type="button" class="btn btn-primary waves-effect waves-light" id="alertify-labels">Accept</button>
                                                </div>
                                                    </td>
                                                </tr>
                                                <?php
                                    }
                                }
                                    ?>
                                    
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->