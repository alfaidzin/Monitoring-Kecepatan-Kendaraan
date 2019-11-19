<!DOCTYPE html>
<html lang="en">
<head>
	<title>Beranda | B1 kelompok 5</title>
</head>
<body>

<div id="container">
	<section id="menu" class="no-sticky"> 
		<div class="content">
			<div class="left">
					<ul>
						<li><a href="">Beranda</a></li>
						<li><a><b>Data</a></li></b>	
						<li><a href="">Monitoring</a></li>
					</ul>
				</div>
			<div class="right">
				<a href="" class="btn btn-white">OPERATOR</a>
			</div>
		<div class="clear"></div>
		</div>
	</section>
				<section class="satu" id="section1">
					<div class="content">
						<table class="center">
							<tr>
								<th>Id lokasi</th>
								<th>lokasi</th>
							</tr>
							<?php
							include "koneksi.php";
							$q = "SELECT * FROM lokasi";
							$result = mysqli_query($koneksi,$q);
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr><td>" . $row["id_lokasi"]. "</td><td>" . $row["nama_lokasi"] ."</td>"
							?></tr>
							<?php
							}
							?>
						</table>
							<br/><a class="btn_dashboard" href="form_tambah_user.php">Tambah User</a><p/>
					</div>
				</section>

			</div>
	
	<link rel="stylesheet" type="text/css" href="style_tabel2.css">
	<script type="text/javascript" src="script.js"></script>

		<script type="text/javascript" src="script.js"></script>
</body>
</html>




