<?php
include "../koneksi.php";

$id_user = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
//md5 untuk encripsi
$password =md5($_POST['password']);
$level = $_POST['level'];

 $sql = "UPDATE db_user SET nama='$nama',username='$username',password='$password',level='$level' WHERE id_user='$id_user'";

 $result = mysql_query($sql);

 if ($result){
 	header ("location:view.php");
 } else {
 	echo "Terjadi kesalahan";
 }
?>