<?php include 'header.php';?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Orang Hilang</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>No Surat</th>
                                            <th>Tanggal</th>
                                            <th>Admin</th>
                                            <th>Pelapor</th>
                                            <th>Status</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;
$query = mysqli_query($dbconnect,"select orang_hilang.id_orang_hilang, orang_hilang.no_surat, orang_hilang.tanggal, admin.nama as nama_admin, user.nama as nama_pelapor, orang_hilang.status from orang_hilang,admin,user where orang_hilang.id_admin = admin.id_admin AND orang_hilang.id_user = user.id_user");
foreach($query as $row){
    if($row['status']==1){
        $status="Laporan Baru";
    }elseif($row['status']==2){
        $status="Laporan Di Publish";
    }elseif($row['status']==3){
        $status="Telah Ditemukan";
    }
?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $row['no_surat']?></td>
                                            <td><?php echo $row['tanggal']?></td>
                                            <td><?php echo $row['nama_admin']?></td>
                                            <td><?php echo $row['nama_pelapor']?></td>
                                            <td><?php echo $status;?></td>
                                        <td>
                                        <?php if($status !='Laporan Di Publish'){ ?>
                                            <a class="btn btn-primary" href="publish-hilang?id=<?php echo $row['id_orang_hilang']; ?>" onclick="return confirm('Apakah anda yakin akan Mempublish Data = <?php echo $row['no_surat']; ?> ?')">Publish</a>
                                        <?php }else{ ?>
                                        <a class="btn btn-warning" href="no-publish-hilang?id=<?php echo $row['id_orang_hilang']; ?>" onclick="return confirm('Apakah anda yakin akan MenonPublish Data = <?php echo $row['no_surat']; ?> ?')">Non-Publish</a>
                                        <?php } ?>
                                        <a class="btn btn-success" href="detail-hilang?id=<?php echo $row['id_orang_hilang']; ?>" onclick="return confirm('Apakah anda yakin akan mengedit Data = <?php echo $row['no_surat']; ?> ?')">Detail</a>
                                        <a class="btn btn-danger" href="hapus-hilang?id=<?php echo $row['id_orang_hilang']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus Data = <?php echo $row['no_surat']; ?> ?')">Hapus</a>
                                        </td>
                                        </tr>
<?php } ?>
                                    </tbody>
                                </table>
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
