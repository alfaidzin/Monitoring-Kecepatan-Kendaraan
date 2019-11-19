<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah User</title>
	<style>
	    .link:hover{
	        color:blue;
	    }
	</style>
</head>
<body>
		<div id="container">

				<section class="utama" id="section1">
					<div class="content">
						<div class="form">
						<h1>Form Tambah Lokasi</h1>
						<form action="tambah_user.php" method="post" enctype="multipart/form-data">
							<input type="text" name="nama_lokasi" placeholder="Nama lokasi"><p/><br/>

							<input style="width:100%;" type="submit" value="Simpan">
								<a href="../tampil.php" class="link" style="text-decoration:none;"><center>Batal</center></a>
						</form>
						</div>
					</div>
				</section>

		</div>
		<link rel="stylesheet" type="text/css" href="style_form_user.css">
	<script type="text/javascript" src="script.js"></script>
</body>
</html>