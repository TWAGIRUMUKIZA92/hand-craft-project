<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title><?=$page?></title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets\img\logo-dark.png">

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
                                            <a href="<?= base_url();?>consultator/login" class="logo logo-admin"><img src="<?php echo base_url();?>assets/images/logo-dark.png" height="30" alt="logo"></a>
                                        </h3>
                
                                        <h4 class="text-muted text-center font-18"><b><?=$page;?></b></h4>
                                        <h3 class="text-muted text-center font-18"><?php echo @$error; ?></h3>
                
                                        <div class="p-2">
                                            <form class="form-horizontal m-t-20" action="<?=base_url()?>consultator/reset" method="post">
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="email" type="email" required="" placeholder="email">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <input class="form-control" name="tel" type="text" required="" placeholder="phone number">
                                                    </div>
                                                </div>
                
                                                <div class="form-group row">
                                                    <div class="col-12">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customCheck1" required>
                                                            <label class="custom-control-label" for="customCheck1">Send default password to number provided above</label>
                                                        </div>
                                                    </div>
                                                </div>
                
                                                <div class="form-group text-center row m-t-20">
                                                    <div class="col-12">
                                                        <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Reset Password</button>
                                                    </div>
                                                </div>
                
                                                <div class="form-group m-t-10 mb-0 row">
                                                    <div class="col-sm-7 m-t-20">
                                                        <a href="<?=base_url()?>consultator" class="text-muted"><i class="mdi mdi-lock"></i> Arleady have account</a>
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
        <script src="<?php echo base_url();?>assets1/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets1/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets1/js/modernizr.min.js"></script>
        <script src="<?php echo base_url();?>assets1/js/detect.js"></script>
        <script src="<?php echo base_url();?>assets1/js/fastclick.js"></script>
        <script src="<?php echo base_url();?>assets1/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets1/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url();?>assets1/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets1/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url();?>assets1/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets1/js/app.js"></script>

    </body>
</html>