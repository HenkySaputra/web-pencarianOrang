<?php include 'header.php';
$id = $_GET['id'];
$query = mysqli_query($dbconnect,"select * from orang_hilang where id_orang_hilang = '$id'");
$row = mysqli_fetch_array($query);    
if($row['status']==1){
        $status="Laporan Baru";
    }elseif($row['status']==2){
        $status="Laporan Di Publish";
    }elseif($row['status']==3){
        $status="Telah Ditemukan";
    }
$queryPelapor = mysqli_query($dbconnect,"select * from user where id_user = '$row[id_user]'");
$rowPelapor = mysqli_fetch_array($queryPelapor);

?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Detail Orang Hilang Surat Nomor: <?php echo $row['no_surat']?></strong>
                            </div>

                            <div class="card-body">
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
                                            <th>Kartu Keluarga</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;

?>
                                        <tr>
                                            <td><?php echo $row['kronologi']?></td>
                                            <td align="center"><?php echo "<img src='images/$row[kk]' width='300' height='200' />";?></td>
                                            <td align="center"><?php echo "<img src='images/$row[foto]' width='300' height='200' />";?></td>
                
                                        
                                        </tr>
                                    </tbody>
                                </table>
                                <form action="update-status" method="post" novalidate="novalidate">
                                    <input type="hidden" name="id_laporan" value="<?php echo $id;?>">
                                            <div class="form-group">
                                                <label for="cc-payment" class="control-label mb-1">Status</label>
                                                <select name="status" class="form-control">
                                                    <option><?php echo $status;?></option>
                                                    <option disabled>--Status Pencarian--</option>
                                                    <option value="1">Laporan Baru</option>
                                                    <option value="2">Laporan Di Publish</option>
                                                    <option value="3">Telah Ditemukan</option>
                                                </select>
                                            </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Update</span>
                                                    </button>
                                                </div>
                                        </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
