<?php
session_start();

//sambungkan ke database
$koneksi = mysqli_connect("localhost","id10540959_root","yandra","id10540959_mynotescode");

//mengambil data dari form login
$username=$_POST['username'];
$password=md5($_POST['password']);

//query untuk mengambil data yang sesuai
$query= mysqli_query($koneksi,"select * from operator where username='$username' and password='$password'");


$kode = mysqli_fetch_array($query);

$cek=mysqli_num_rows($query);

if ($cek==1){
$_SESSION['username']=$kode[username];
$_SESSION['password']=$kode[password];
echo "<script>alert('Selamat anda berhasil login'); window.location=('../beranda/index.html');</script>";
    
}
else{
	echo "<script>alert('Upss ada yang salah, Coba lagi ya...'); window.location=('../index.html');</script>";
}
?> 