<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($dbconnect,"DELETE FROM user where id_user='$id'");
echo "<script>alert('Data telah Dihapus !');location='user';</script>";
?>