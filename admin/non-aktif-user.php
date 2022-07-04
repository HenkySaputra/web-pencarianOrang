<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($dbconnect,"UPDATE user set status=0 where id_user='$id'");
echo "<script>alert('Data telah Dinonaktifkan !');location='user';</script>";
?>