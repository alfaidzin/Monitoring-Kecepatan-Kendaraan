<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_lokasi = $_POST['id_lokasi'];
$nama_lokasi = $_POST['nama_lokasi'];
 
// update data ke database
mysqli_query($koneksi,"update lokasi set nama_lokasi='$nama_lokasi' where id_lokasi='$id_lokasi'");
 
// mengalihkan halaman kembali ke index.php
header("location:../tampil.php");
 
?>