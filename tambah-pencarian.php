<?php include 'header.php'; ?>
    <main>
        <!--? Hero Start -->
        <div class="slider-area2">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Laporkan Orang Hilang</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->
        <!-- ================ contact section start ================= -->
        <section class="contact-section">
            <div class="container">
               
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Tambah Pencarian Orang</h2>
                    </div>
                    <div class="col-lg-12">
                        <form class="form-contact contact_form" action="insert-orang-hilang" enctype="multipart/form-data" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">Nama
                                        <input class="form-control" name="nama" type="text" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">Jenis Kelamin
                                        <select name="jk" class="form-control">
                                        <option>Laki-Laki</option>
                                        <option>Perempuan</option>    
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Tanggal Lahir
                                        <input class="form-control" name="tanggal_lahir" type="date" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Tempat Lahir
                                        <input class="form-control" name="tempat_lahir" type="text" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Pekerjaan
                                        <input class="form-control" name="pekerjaan" type="text" placeholder="Pekerjaan">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">Agama<br>
                                        <select name="agama" class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>   
                                        <option>Protestan</option>   
                                        <option>Kong Hu Cu</option>   
                                        <option>Hindu</option>    
                                        <option>Budha</option>   
                                        <option>Lainnya</option>   
                                    </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">Alamat
                                        <input class="form-control" name="alamat" type="text" placeholder="Alamat Lengkap">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Nomor HP
                                        <input class="form-control" name="no_telp" type="text" placeholder="Nomor HP">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Tinggi (CM)
                                        <input class="form-control" name="tinggi" type="text" placeholder="Tinggi Badan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Bentuk Badan
                                        <input class="form-control" name="badan" type="text" placeholder="Bentuk Badan">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Warna Rambut
                                        <input class="form-control" name="warna_rambut" type="text" placeholder="Warna Rambut">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Jenis Rambut
                                        <input class="form-control" name="jenis_rambut" type="text" placeholder="Jenis Rambut">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Bentuk Gigi
                                        <input class="form-control" name="gigi" type="text" placeholder="Bentuk Gigi">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">Ciri Khusus
                                        <textarea class="form-control" name="khusus" placeholder="Ciri-Ciri Khusus"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">Kronologi
                                        <textarea class="form-control" name="kronologi" placeholder="Kronologi"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Foto
                                        <input class="form-control" name="foto" type="file" placeholder="Bentuk Gigi">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">Kartu Keluarga
                                        <input class="form-control" name="kk" type="file" placeholder="Bentuk Gigi">
                                    </div>
                                </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn">LAPOR</button>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
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
	
		<!-- All JS Custom Plugins Link Here here -->
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
		
		<!-- Nice-select, sticky -->
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>
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