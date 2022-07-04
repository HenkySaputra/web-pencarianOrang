<?php
include 'admin/config.php';
$id_user = $_POST['id_user'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$tempat_lahir = $_POST['tempat_lahir'];
$jk = $_POST['jk'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$username = $_POST['username'];

if(isset($_POST['ubah'])){
$password = md5($_POST['password']);
    $password = md5($_POST['password']);
    mysqli_query($dbconnect,"UPDATE user SET nama='$nama', nik='$nik',tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',jk='$jk',alamat='$alamat',no_telp='$no_telp',email='$email', username='$username', password='$password' where id_user = '$id_user'") or die(mysqli_error($dbconnect));
}else{
    
    mysqli_query($dbconnect,"UPDATE user SET nama='$nama', nik='$nik',tanggal_lahir='$tanggal_lahir',tempat_lahir='$tempat_lahir',jk='$jk',alamat='$alamat',no_telp='$no_telp',email='$email', username='$username'' where id_user = '$id_user'");
}

echo "<script>alert('Data telah diubah !');location='profile';</script>";
?>