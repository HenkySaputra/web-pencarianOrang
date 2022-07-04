<?php
session_start();
include 'admin/config.php';
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$tempat_lahir=$_POST['tempat_lahir'];
$jk=$_POST['jk'];
$pekerjaan=$_POST['pekerjaan'];
$agama=$_POST['agama'];
$alamat=$_POST['alamat'];
$no_telp=$_POST['no_telp'];
$tinggi=$_POST['tinggi'];
$badan=$_POST['badan'];
$warna_rambut=$_POST['warna_rambut'];
$jenis_rambut=$_POST['jenis_rambut'];
$gigi=$_POST['gigi'];
$khusus=$_POST['khusus'];
$kronologi=$_POST['kronologi'];

$tanggal = date('Y-m-d');

$q = mysqli_query($dbconnect, "SELECT max(no_surat) as kodeTerbesar FROM orang_hilang");
$data = mysqli_fetch_array($q);
$no_surat = $data['kodeTerbesar'];

$urutan = (int) substr($no_surat, 0, 3);
$urutan++;
$no_surat = sprintf("%03s", $urutan)."/LP-OH/III/2020/SPKT";


    $foto = $_FILES['foto']['name'];
    $tmp2 = $_FILES['foto']['tmp_name'];
    $fotobaru = date('dmYHis').$foto;
    $path2 = "admin/images/".$fotobaru;
    move_uploaded_file($tmp2, $path2);

    $kk = $_FILES['kk']['name'];
    $tmp = $_FILES['kk']['tmp_name'];
    $kkbaru = date('dmYHis').$kk;
    $path = "admin/images/".$kkbaru;
    move_uploaded_file($tmp, $path);

mysqli_query($dbconnect,"INSERT INTO orang_hilang VALUES(null,'$no_surat','$tanggal','0','$_SESSION[id_user]','$nama','$tempat_lahir','$tanggal_lahir','$jk','$pekerjaan','$agama'
                        ,'$alamat','$no_telp','$tinggi','$badan','$warna_rambut','$jenis_rambut','$gigi','$khusus','$kronologi','1','$fotobaru','$kkbaru')") or die (mysqli_error($dbconnect));
echo "<script>alert('Data telah dilaporkan !');location='pencarian';</script>";
?>