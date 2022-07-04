<?php 
include 'header.php';
include 'admin/config.php';
$queryLaporan=mysqli_query($dbconnect,"select * from orang_hilang");
$jumlah = mysqli_num_rows($queryLaporan);
$queryDitemukan = mysqli_query($dbconnect,"select * from orang_hilang where status='3'");
$korban = mysqli_num_rows($queryDitemukan);
$queryPencarian = mysqli_query($dbconnect,"select * from orang_hilang where status!='3'");
$pencarian = mysqli_num_rows($queryPencarian);
$queryUser = mysqli_query($dbconnect,"select * from user");
$user  = mysqli_num_rows($queryUser);
?>
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Pencarian Orang</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >Laporkan</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Segera Laporkan Orang Hilang Tanpa Menunggu 1 x 24 Jam</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="daftar" class="btn hero-btn">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Informasi Orang Hilang</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >Bantu Pencarian</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Orang-Orang Membutuhkan bantuan pencarian</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="dalam-pencarian" class="btn hero-btn">Temukan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Pelayanan</span>
                        <h2>Cara Melaporkan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-development"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="daftar">Daftarkan Diri Anda </a></h5>
                            <p>Daftarkan diri anda guna mengupdate status laporan pencarian anda</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-result"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="daftar">Input Data Pelapor dan Korban</a></h5>
                            <p>Setelah daftar anda dapat melakukan penginputan orang hilang</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-team"></span>
                        </div>
                        <div class="cat-cap">
                            <h5><a href="daftar">Verifikasi & Publish</a></h5>
                            <p>Data akan diverifikasi oleh Admin atau Humas sebelum di publish, Maksimal 1 x 24 Jam</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Area Start-->
   
    <!-- About Area End-->
    <!--? Services Ara Start -->
    
    <!-- Services Ara End -->
    <!--? Testimonial Start -->
    
    <!-- Testimonial End -->
    <!-- Coun Down Start -->
    <div class="count-down-area pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter"><?php echo $jumlah;?></span>
                        <p>Jumlah Laporan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter"><?php echo $korban;?></span>
                        <p> Korban Ditemukan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter"><?php echo $pencarian;?></span>
                        <p>Dalam Pencarian</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <!-- Counter Up -->
                    <div class="single-counter text-center">
                        <span class="counter"><?php echo $user;?></span>
                        <p>User</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Coun Down End -->
    <!-- Team Start -->
    
    <!-- Team End -->
    <!-- Want To work -->
    
    <!-- Want To work End -->
    <!-- Blog Area Start -->
    
    <!-- Blog Area End -->
    <!-- Brand Area Start -->
    
    <!-- Brand Area End -->
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
        <div class="container">
           
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
        
    </body>
</html>