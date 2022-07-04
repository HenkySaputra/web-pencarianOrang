<?php
include 'config.php';
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($dbconnect,"INSERT INTO admin VALUES('','$nama','$jabatan','$username','$password')") or die (mysqli_error($dbconnect));
echo "<script>alert('Data telah ditambah !');location='admin';</script>";
?>