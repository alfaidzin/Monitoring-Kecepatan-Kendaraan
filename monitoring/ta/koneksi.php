<?php
$host ='localhost';
$user ='id10540959_root';
$pas ='yandra';
$database='id10540959_mynotescode';

$konek = mysqli_connect($host,$user,$pas,$database);

if (!$konek)
{
	echo "koneksi ke MYSQL gagal....";
}
?>