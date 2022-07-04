<?php
include 'config.php';
session_start(); //memulai session
//check apakah ada akses post dari halaman login?, jika tidak kembali kehalaman depan
if( !isset($_POST['username']) ) { header('location:index'); exit(); }
$error = ''; //set nilai default dari error,

$username = trim( $_POST['username'] );
$password = trim( $_POST['password'] );

if( strlen($username) < 2 )
{
 //validasi username tidak bpleh kosong
 $error = 'username tidak boleh kosong';
}else if( strlen($password) < 2 )
{
 //validasi password tidak boleh kosong
 $error = 'Password Tidak boleh kosong';
}else{
 //mengubah semua karakter ke bentuk string
 $username = $dbconnect->escape_string($username);
 $password = $dbconnect->escape_string($password);

 //hash dengan md5
 $password = md5($password);
 //SQL command untuk memilih data berdasarkan parameter $username dan $password yang diinputkan
 $sql = "SELECT * FROM admin
   WHERE username='$username'
   AND password='$password' LIMIT 1";

 //melakukan perintah
 $query = $dbconnect->query($sql);

 //check query
 if( !$query )
 {
  die( 'Oops!! Sepertinya ada kesalahan database '. $dbconnect->error );
 }

 //check hasil perintah
 if( $query->num_rows == 1 )
 {
  //jika data yang dimaksud ada maka akan ditampilkan
  $row =$query->fetch_assoc();

  //data nama disimpan di session browser
  $_SESSION['id_admin'] = $row['id_admin'];
  $_SESSION['nama'] = $row['nama'];


  //menuju halaman sesuai hak akses
  header('location:index');
  exit();

 }else{

  //jika data yang dimaksud tidak ada
  echo "<script>alert('Username atau Password Salah !');location='index';</script>";
 }
}
?>
