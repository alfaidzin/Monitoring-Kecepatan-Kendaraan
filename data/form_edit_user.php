<!DOCTYPE html>
<html>
<head>
	<title>form edit user</title>
	<style>
	    .link:hover{
	        color:blue;
	        
	    }
	</style>
</head>
<body>

	<?php
	  $kiriman = $_GET["id_kendaraan"];
	  include "koneksi.php";
	  $q = "SELECT * FROM kendaraan WHERE id_kendaraan='$kiriman'";
	  $result = mysqli_query($koneksi,$q);
	  $row = mysqli_fetch_assoc($result);
	?>
		<section class="utama" id="section1">
					<div class="content">
						<div class="form">
	<h1>Form Edit Kendaraan</h1>
		<form action="edit_user.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id_kendaraan" value="<?php echo $row["id_kendaraan"];?>">
		<input type="text" name="kode_kendaraan" placeholder="Plat Kendaraan" value="<?php echo $row["kode_kendaraan"]; ?>">
		<input type="text" name="daerah" placeholder="Daerah" value="<?php echo $row["daerah"]; ?>"><p/>
		<input type="submit" value="Simpan">
		<a href="tampil.php" class="link" style="text-decoration:none;"><center>Batal</center></a>
		
	</form>

						</div>
					</div>
				</section>

		</div>
		<link rel="stylesheet" type="text/css" href="style_form_user.css">
	<script type="text/javascript" src="script.js"></script>
</body>
</html>