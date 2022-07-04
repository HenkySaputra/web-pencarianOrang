<?php
include 'config.php';
$status = $_POST['status'];
$id = $_POST['id_laporan'];
mysqli_query($dbconnect,"UPDATE orang_hilang set status='$status' where id_orang_hilang='$id'");
echo "<script>alert('Data telah Diubah !');location='orang-hilang';</script>";
?>