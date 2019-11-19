<?php
	include "koneksi.php";

	$idh = $_GET["id_lokasi"];

	// query sql
	$sql = "DELETE FROM lokasi WHERE id_lokasi='$idh'";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());

	if($query){

echo "<script>alert('Data berhasil di hapus'); window.location=('../tampil.php');</script>";
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}

	mysqli_close($koneksi);
?>