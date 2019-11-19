<!DOCTYPE html>
<html>
<head>
	<title>form edit user</title>

	<link rel="stylesheet" type="text/css" href="style_form_user.css">
	<style>
	    .link:hover{
	        color:blue;
	    }
	</style>
</head>
<body>
	<?php
	  $kiriman = $_GET["id_lokasi"];
	  include "koneksi.php";
	  $q = "SELECT * FROM lokasi WHERE id_lokasi='$kiriman'";
	  $result = mysqli_query($koneksi,$q);
	  $row = mysqli_fetch_assoc($result);
	?>
					<section class="utama" id="section1">
					<div class="content">
						<div class="form">
	<h1>Form Edit Lokasi</h1>

		<form action="edit_user.php" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id_lokasi" value="<?php echo $row["id_lokasi"];?>">
		<input type="text" name="nama_lokasi" placeholder="nama lokasi" value="<?php echo $row["nama_lokasi"]; ?>"><p/>
		<input type="submit" value="Simpan">	
			<a href="../tampil.php" class="link" style="text-decoration:none;"><center>Batal</center></a>
	</form>

						</div>
					</div>
				</section>

		</div>
		<link rel="stylesheet" type="text/css" href="style_form_edit.css">
	<script type="text/javascript" src="script.js"></script>
</body>
</html>