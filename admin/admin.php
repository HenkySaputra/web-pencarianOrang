<?php include 'header.php';?>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="tambah-admin" class="btn btn-primary">Tambah</a>
                                <strong class="card-title">Data Admin</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>jabatan</th>
                                            <th>Username</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php 
$no=1;
$query = mysqli_query($dbconnect,"select * from admin where id_admin !='0'");
foreach($query as $row){
?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $row['nama']?></td>
                                            <td><?php echo $row['jabatan']?></td>
                                            <td><?php echo $row['username']?></td>
                                        <td>
                                        <a class="btn btn-success" href="edit-admin?id=<?php echo $row['id_admin']; ?>" onclick="return confirm('Apakah anda yakin akan mengedit Data = <?php echo $row['nama']; ?> ?')">Edit</a>
                                        <a class="btn btn-danger" href="hapus-admin?id=<?php echo $row['id_admin']; ?>" onclick="return confirm('Apakah anda yakin akan menghapus Data = <?php echo $row['nama']; ?> ?')">Hapus</a>
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
