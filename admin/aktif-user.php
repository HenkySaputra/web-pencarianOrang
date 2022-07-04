<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($dbconnect,"UPDATE user set status=1 where id_user='$id'");
echo "<script>alert('Data telah Aktifkan !');location='user';</script>";
?>