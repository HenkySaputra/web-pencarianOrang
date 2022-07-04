<?php include 'header.php'; ?>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Tambah Data Admin</strong>
                            </div>
                            <div class="card-body">
                                <!-- Credit Card -->
                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <form action="insert-admin" method="post" novalidate="novalidate">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Nama</label>
                                                <input id="cc-pament" name="nama" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Jabatan</label>
                                                <input id="cc-pament" name="jabatan" type="text" class="form-control">
                                            </div>
                                                
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="cc-exp" class="control-label mb-1">Username</label>
                                                            <input id="cc-exp" name="username" type="text" class="form-control" >
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <label for="x_card_code" class="control-label mb-1">Password</label>
                                                        <div class="input-group">
                                                            <input  name="password" type="password" class="form-control">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-plus fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Tambah</span>
                                                    </button>
                                                </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
