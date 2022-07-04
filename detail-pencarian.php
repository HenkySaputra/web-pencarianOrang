<?php include 'header.php';
include 'admin/config.php';
$id = $_GET['id'];
$query = mysqli_query($dbconnect,"select * from orang_hilang where id_orang_hilang='$id'");
$row = mysqli_fetch_array($query);
$queryPelapor = mysqli_query($dbconnect,"select * from user where id_user = '$row[id_user]'");
$rowPelapor = mysqli_fetch_array($queryPelapor);
$link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


?>

   <main>
      <!--? Hero Start -->
      <div class="slider-area2">
         <div class="slider-height2 hero-overly2 d-flex align-items-center">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                           <div class="hero-cap hero-cap2 text-center">
                              <h2>Detail Pencarian <?php echo $row['nama']?></h2>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <!-- Hero End -->
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
            <div class="col-lg-2">
</div>
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                                <?php echo "<img class='card-img rounded-0' src='admin/images/$row[foto]' width='600' height='500'/>";?>
                     </div>
                     <div class="blog_details">
                        <h2>Pencarian Orang Hilang <?php  echo $row['nama']?>
                        </h2>
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-clock"></i> 
                                        <?php echo date('D M Y',strtotime($row['tanggal']))?></a></li>
                        </ul>
                        <p class="excert">
                          
                        </p>
                        <table class="table table-striped table-bordered">Data Pelapor
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>TTL</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;

?>
                                        <tr>
                                            <td><?php echo $rowPelapor['nama']?></td>
                                            <td><?php echo $rowPelapor['nik']?></td>
                                            <td><?php echo $rowPelapor['tempat_lahir'].", ".$rowPelapor['tanggal_lahir']?></td>
                                            <td><?php echo $rowPelapor['alamat']?></td>
                                            <td><?php echo $rowPelapor['no_telp']?></td>
                                            <td><?php echo $rowPelapor['email']?></td>
                                        
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-bordered">Identitas Orang Hilang
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>TTL</th>
                                            <th>JK</th>
                                            <th>Pekerjaan</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>No Telp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;

?>
                                        <tr>
                                            <td><?php echo $row['nama']?></td>
                                            <td><?php echo $row['tempat_lahir'].", ".$row['tanggal_lahir']?></td>
                                            <td><?php echo $row['jk']?></td>
                                            <td><?php echo $row['pekerjaan']?></td>
                                            <td><?php echo $row['agama']?></td>
                                            <td><?php echo $row['alamat']?></td>
                                            <td><?php echo $row['telp']?></td>
                                        
                                        </tr>
                                    </tbody>
                                </table>

                                <table class="table table-striped table-bordered">Ciri-Ciri Orang Hilang
                                    <thead>
                                        <tr>
                                            <th>Tinggi Badan</th>
                                            <th>Bentuk Badan</th>
                                            <th>Warna Rambut</th>
                                            <th>Jenis Rambut</th>
                                            <th>Gigi</th>
                                            <th>Ciri Khusus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;

?>
                                        <tr>
                                            <td><?php echo $row['tinggi']?></td>
                                            <td><?php echo $row['badan']?></td>
                                            <td><?php echo $row['warna_rambut']?></td>
                                            <td><?php echo $row['jenis_rambut']?></td>
                                            <td><?php echo $row['gigi']?></td>
                                            <td><?php echo $row['khusus']?></td>
                                        
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-striped table-bordered">Kronologi
                                    <thead>
                                        <tr>
                                            <th>Kronologi Kejadian</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;

?>
                                        <tr>
                                            <td><?php echo $row['kronologi']?></td>
                                            <td align="center"><?php echo "<img src='admin/images/$row[foto]' width='300' height='200' />";?></td>
                
                                        
                                        </tr>
                                    </tbody>
                                </table>
                                <?php if(isset($_SESSION['id_user'])){ 
                                 $queryWA = mysqli_query($dbconnect,"select * from user where id_user='$_SESSION[id_user]'");
                                 $rowWA = mysqli_fetch_array($queryWA);
                                 $urutan = (int) substr($rowWA['no_telp'], 1, 11);
                                 $no_telp = "62".$urutan;  
                                 ?>
                                <a href="https://wa.me/<?php echo $no_telp?>?text=<?php echo $link?>" ><i class="fab fa-whatsapp-square"></i> Share Whatsapp</a>
                                <?php } ?>
                  </div>
                  <!-- Hero End 
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                           people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> 
                        </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                     </div>
                     <div class="navigation-area">
                        <div class="row">
                           <div
                              class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                              <div class="thumb">
                                 <a href="#">
                                    <img class="img-fluid" src="assets/img/post/preview.png" alt="">
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                    <span class="lnr text-white ti-arrow-left"></span>
                                 </a>
                              </div>
                              <div class="detials">
                                 <p>Prev Post</p>
                                 <a href="#">
                                    <h4>Space The Final Frontier</h4>
                                 </a>
                              </div>
                           </div>
                           <div
                              class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                              <div class="detials">
                                 <p>Next Post</p>
                                 <a href="#">
                                    <h4>Telescopes 101</h4>
                                 </a>
                              </div>
                              <div class="arrow">
                                 <a href="#">
                                    <span class="lnr text-white ti-arrow-right"></span>
                                 </a>
                              </div>
                              <div class="thumb">
                                 <a href="#">
                                    <img class="img-fluid" src="assets/img/post/next.png" alt="">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="assets/img/blog/author.png" alt="">
                        <div class="media-body">
                           <a href="#">
                              <h4>Harvard milan</h4>
                           </a>
                           <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                              our dominion twon Second divided from</p>
                        </div>
                     </div>
                  </div>
                  <div class="comments-area">
                     <h4>05 Comments</h4>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="assets/img/comment/comment_1.png" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Emilly Blunt</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="assets/img/comment/comment_2.png" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Emilly Blunt</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                           <div class="user justify-content-between d-flex">
                              <div class="thumb">
                                 <img src="assets/img/comment/comment_3.png" alt="">
                              </div>
                              <div class="desc">
                                 <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                 </p>
                                 <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                       <h5>
                                          <a href="#">Emilly Blunt</a>
                                       </h5>
                                       <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                    <div class="reply-btn">
                                       <a href="#" class="btn-reply text-uppercase">reply</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              -->
               </div>
              
            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->

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
      <script src="./assets/js/jquery.magnific-popup.js"></script>
      <!-- counter , waypoint -->
      <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
      <script src="./assets/js/jquery.counterup.min.js"></script>
      
		<!-- Nice-select, sticky -->
      <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
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