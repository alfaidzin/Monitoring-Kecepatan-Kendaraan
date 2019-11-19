<?php
	include "koneksi.php";
 
	$k = $_POST["kode_kendaraan"];
	$d = $_POST["daerah"];
 
 
	// query sql
	$sql = "INSERT INTO kendaraan (kode_kendaraan,daerah) VALUES('$k','$d')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
	    
    header("location:tampil.php");
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>