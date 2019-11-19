<?php
$op = $_POST['id_operator'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

include "koneksi.php";

$daftar = "INSERT INTO `operator` (`id_operator`,`nama`,`username`,`password`) values ('$op','$nama','$username','$password')";
mysqli_query($koneksi,$daftar);

echo "<script>alert('Data berhasil di Tambahkan'); window.location=('../index.html');</script>";
?>