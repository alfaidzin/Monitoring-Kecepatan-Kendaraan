<?php
	include "koneksi.php";
 
	$nm = $_POST["nama_lokasi"];
	
 
 
	// query sql
	$sql = "INSERT INTO lokasi (nama_lokasi) VALUES('$nm')";
	$query = mysqli_query($koneksi, $sql) or die (mysqli_error());
 
	if($query){
	    
    header("location:../tampil.php");
	} else {
		echo "Error :".$sql."<br>".mysqli_error($koneksi);
	}
 
	mysqli_close($koneksi);
 
?>