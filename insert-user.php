<?php
include 'admin/config.php';
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($dbconnect,"INSERT INTO user VALUES('','$nik','$nama','$tanggal_lahir','$tempat_lahir','$jk','$alamat','$no_telp','$email','$username','$password','0')") or die (mysqli_error($dbconnect));
echo "<script>alert('Data telah terdaftar, silahkan login !');location='login';</script>";
?>