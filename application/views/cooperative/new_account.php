<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Cooperative Account</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div class="accountbg">
            
            <div class="content-center">
                <div class="content-desc-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-8">
                                <div class="card">
                                    <div class="card-body">
                    
                                        <h3 class="text-center mt-0 m-b-15">
                                            <a href="<?= base_url();?>cooperative/login" class="logo logo-admin"><img src="<?php echo base_url();?>assets/images/logo-dark.png" height="30" alt="logo"></a>
                                        </h3>
                    
                                        <h4 class="text-muted text-center font-18"><b><?=$page;?></b></h4>
                    
                                        <div class="p-3">
                                        <form method="post" action="<?= base_url() ?>Cooperative/new_account" enctype="multipart/form-data">
                    
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="email" required="" placeholder="Email" name="coop_email">
                                                    </div>
                                                </div>
                    
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="text" required="" placeholder="Cooperative Name" name="coop_name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">Cooperative Licence(only pdf file)
                                                        <input class="form-control" type="file" required="" placeholder="Licence" name="coop_licence">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="number" required="" placeholder="Phone Number" name="coop_tel">
                                                    </div>
                                                </div>
                    
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="password" required="" placeholder="Password" name="coop_pass" id="password">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" type="password" required="" placeholder="Retype-Password" id="confirm_password">
                                                    </div>
                                                </div>
                    
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                                                        </div>
                                                    </div>
                                                </div>
                    
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <!-- <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" name="new_account">Register</button> -->
                                                        <input type="submit" class="btn btn-primary waves-effect waves-light" value="Create Account" name="new_account"/>
                                                    </div>
                                                </div>
                    
                                                <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-12 m-t-20 text-center">
                                                        <a href="<?=base_url()?>cooperative" class="text-muted">Already have account?</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                    
                                    </div>
                                </div>                        
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
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
</script>