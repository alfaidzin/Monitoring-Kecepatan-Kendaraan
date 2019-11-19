<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id_kendaraan = $_POST['id_kendaraan'];
$kode_kendaraan = $_POST['kode_kendaraan'];
$daerah = $_POST['daerah'];
 
// update data ke database
mysqli_query($koneksi,"update kendaraan set kode_kendaraan='$kode_kendaraan',daerah='$daerah' where id_kendaraan='$id_kendaraan'");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>