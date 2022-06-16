<div class="row">
    

                                            <?php
                                            foreach($address as $row){
                                                $id = $row->coop_id;
                                                $email = $row->coop_email;
                                                $contact = $row->coop_tel;
                                                $old = $row->coop_pass;
                                            }
                                            ?>
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body  text-success">
            
                                            <h4 class="mt-0 header-title text-primary border-bottom">Change Password</h4>
            
                                            <form  action="<?=base_url()?>Cooperative/changePassword" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Old Password</label>
                                                    <input type="password" id="old" name="old" class="form-control" required placeholder="Type Old Password"/>
                                                    <input type="hidden" id="old1" name="old1" value="<?=$old?>" class="form-control" required placeholder="Type something"/>
                                                </div>
            
                                                <div class="form-group">
                                                    <label>New Password</label>
                                                    <div>
                                                        <input type="password" name="newPassword" class="form-control" required
                                                               placeholder="New Password" id="password"/>
                                                    </div>
                                                    <label>Comfirm Password</label>
                                                    <div class="m-t-10">
                                                        <input type="password" class="form-control" required
                                                               id="confirm_password"
                                                               placeholder="Re-Type Password"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div>
                                                        <button type="submit" class="btn btn-secondary waves-effect waves-light bg-primary">
                                                            Change Password
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-lg-6">
                                    <div class="card m-b-30">
                                        <div class="card-body text-warning">
            
                                            <h4 class="mt-0 header-title  text-primary border-bottom">Change Cooperative Email&Contact</h4>
                                            
            
                                            <form  action="<?=base_url()?>Cooperative/changeInfo" method="post" enctype="multipart/form-data">
            
                                                <div class="form-group">
                                                    <label>E_mail</label>
                                                    <div>
                                                        <input type="text" name="coop_email" value="<?=$email?>" class="form-control" required/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <div>
                                                        <input type="text" name="coop_tel" value="<?=$contact?>" class="form-control" required/>
                                                    </div>
                                                </div>
            
                                                <div class="form-group m-b-0">
                                                    <div>
                                                    <button type="submit" class="btn btn-success waves-effect waves-light bg-primary">Change</button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                            <script>

                                var password = document.getElementById("password")
                                , confirm_password = document.getElementById("confirm_password");

                                function validatePassword(){
                                if(password.value != confirm_password.value) {
                                    confirm_password.setCustomValidity("Passwords Don't Match");
                                } else {
                                    confirm_password.setCustomValidity('');
                                }
                                }

                                password.onchange = validatePassword;
                                confirm_password.onkeyup = validatePassword;

                                

                                var olda = document.getElementById("old")
                                , oldb= document.getElementById("old1");

                                function validateOldPassword(){
                                if(olda.value != oldb.value) {
                                    old.setCustomValidity("Old Passwords Don't Match");
                                } else {
                                    old.setCustomValidity('');
                                }
                                }

                                old.onchange = validateOldPassword;
                                old1.onkeyup = validateOldPassword;

                            </script>