<?php include 'header.php';
$queryUser=mysqli_query($dbconnect,"select * from user");
$user = mysqli_num_rows($queryUser);

$queryAdmin = mysqli_query($dbconnect,"select * from admin");
$admin = mysqli_num_rows($queryAdmin);

$queryOrang = mysqli_query($dbconnect,"select * from orang_hilang");
$orang = mysqli_num_rows($queryOrang);
?>
    
        <div class="content mt-3">

            <div class="col-lg-3 col-md-6">
                <div class="social-box twitter">
                    <i class="fa fa-user"></i>
                    <ul>
                    
                            <span class="count"><?php echo $user;?></span>
                            <span>User</span>
                        
                        
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box linkedin">
                    <i class="fa fa-lock"></i>
                    <ul>
                            <span class="count"><?php echo $admin?></span>
                            <span>Admin</span>
                    
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->


            <div class="col-lg-3 col-md-6">
                <div class="social-box google-plus">
                    <i class="fa fa-street-view"></i>
                    <ul>
                            <span class="count"><?php echo $orang;?></span>
                            <span>Orang Hilang</span>
                       
                    </ul>
                </div>
                <!--/social-box-->
            </div>
            <!--/.col-->

        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
