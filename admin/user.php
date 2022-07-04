<?php include 'header.php';?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <strong class="card-title">Data User</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tgl Lahir</th>
                                            <th>Tempat Lahir</th>
                                            <th>JK</th>
                                            <th>Alamat</th>
                                            <th>No HP</th>
                                            <th>Email</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;
$query = mysqli_query($dbconnect,"select * from user");
foreach($query as $row){
?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $row['nik']?></td>
                                            <td><?php echo $row['nama']?></td>
                                            <td><?php echo $row['tanggal_lahir']?></td>
                                            <td><?php echo $row['tempat_lahir']?></td>
                                            <td><?php echo $row['jk']?></td>
                                            <td><?php echo $row['alamat']?></td>
                                            <td><?php echo $row['no_telp']?></td>
                                            <td><?php echo $row['email']?></td>
                                            <?php if($row['status']==1){ ?>
                                            <td><a class="btn btn-warning" href="non-aktif-user?id=<?php echo $row['id_user']; ?>"  onclick="return confirm('Apakah anda yakin akan Mengnonaktifkan Data = <?php echo $row['nama']; ?> ?')">Non-Aktifkan</a>
                                            <?php } else{ ?>
                                            <td><a class="btn btn-success" href="aktif-user?id=<?php echo $row['id_user']; ?>"  onclick="return confirm('Apakah anda yakin akan Mengaktifkan Data = <?php echo $row['nama']; ?> ?')">Aktifkan</a>
                                            <?php } ?>
                                            <a class="btn btn-danger" href="hapus-user?id=<?php echo $row['id_user']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus Data = <?php echo $row['nama']; ?> ?')">Hapus</a>
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
