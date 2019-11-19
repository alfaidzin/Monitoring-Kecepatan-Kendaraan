<?php
 include "../koneksi.php";

 $id = $_GET['id'];
 $sql = "DELETE FROM db_user WHERE id_user='$id'";
 $result = mysql_query($sql);

 if ($result){
 	header ("location: view.php");
 } else {
 	echo "Terjadi kesalahan";
 }
?>