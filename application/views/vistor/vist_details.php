<div class="row" style="margin-top:150px;">
                    <div class="col-lg-6">
                        <div class="card m-b-30">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Your Details</h4>
                                <form class="" action="<?= base_url();?>home/initial_invoice" method="post">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" class="form-control" required placeholder="Your Firstname" name="f_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" required placeholder="Your Lastname" name="l_name"/>
                                    </div>
                                    <div class="form-group">
                                        <label>State/Region</label>
                                        <input type="text" class="form-control" required placeholder="Your State/Region" name="state_region"/>
                                    </div>
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" required placeholder="Your City" name="city"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Address 1</label>
                                        <input type="text" class="form-control" required placeholder="Address 1" name="address1"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Address 2</label>
                                        <input type="text" class="form-control" required placeholder="Address 2" name="address2"/>
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number</label>
                                        <div>
                                            <input data-parsley-type="number" type="text"
                                                   class="form-control" required
                                                   placeholder="Enter Phone number" name="contact"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                Submit
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
                            <div class="card-body">
                                <form class="" action="#" method="#">
                                    <div class="form-group">
                                        <label></label>
                                        <img class="d-block img-fluid mx-auto" src="<?= base_url();?>assets/images/payment_method.jpg" height="120px">
                                    </div>




                                </form>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
