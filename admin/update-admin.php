<?php
include 'config.php';
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];
$username = $_POST['username'];
$id = $_POST['id_admin'];

if(isset($_POST['ubah'])){
    $password = md5($_POST['password']);
    mysqli_query($dbconnect,"UPDATE admin SET nama='$nama', jabatan='$jabatan', username='$username', password='$password' where id_admin = '$id'") or die(mysqli_error($dbconnect));
}else{
    
    mysqli_query($dbconnect,"UPDATE admin SET nama='$nama', jabatan='$jabatan', username='$username' where id_admin = '$id'");
}

echo "<script>alert('Data telah ditambah !');location='admin';</script>";
?>