<?php
include 'config.php';
$id = $_GET['id'];
mysqli_query($dbconnect,"UPDATE orang_hilang set status=1 where id_orang_hilang='$id'");
echo "<script>alert('Data telah Di Publish !');location='orang-hilang';</script>";
?>