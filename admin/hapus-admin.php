<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($dbconnect,"DELETE FROM admin where id_admin='$id'");
echo "<script>alert('Data telah Dihapus !');location='admin';</script>";
?>