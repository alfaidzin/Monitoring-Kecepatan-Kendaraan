<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data | B1 kelompok 5</title>

</head>
<body>

<div id="container">
	<section id="menu" class="no-sticky"> 
		<div class="content">
			<div class="left">
					<ul>
						<li><a href="../beranda/index.html">Beranda</a></li>
						<li><a><b>Data</a></li></b>	
						<li><a href="../monitoring/generateDataDB.php">Monitoring</a></li>
					</ul>
				</div>
			<div class="right">
				
							<a href="../logout.php" class="btn btn-white">LOGOUT</a>
			</div>
		<div class="clear"></div>
		</div>
	</section>
				<section class="satu" id="section1">
					<div class="content">
					    <h2 style="color:white;">Data Kendaraan</h2>
						<table class="center">
							<tr>
						
								<th>Kendaraan</th>

								<th>Daerah</th>
								<th>Tindakan</th>
							</tr>
							<?php
							include "koneksi.php";
							$q = "SELECT * FROM kendaraan";
							$result = mysqli_query($koneksi,$q);
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr><td>" .$row["kode_kendaraan"]."</td><td>" .$row["daerah"]."</td>"
							?>

							<td><a href="form_edit_user.php?id_kendaraan=<?php echo $row["id_kendaraan"]; ?>">Edit</a>
								<a href="delete_user.php?id_kendaraan=<?php echo $row["id_kendaraan"]; ?>">Delete</a></td></tr>
							<?php
							}
							?>
						</table>
							<br/><a class="btn_dashboard" href="form_tambah_user.php">Tambah Kendaraan</a><p/>
					</div>
				</section>



				<section class="dua" id="section2">
					<div class="content">
					     <h2 style="color:white;">Data Lokasi</h2>
						<table class="center">
							<tr>
								<th>Id lokasi</th>
								<th>lokasi</th>

								<th>Tindakan</th>
							</tr>
							<?php
							include "koneksi.php";
							$q = "SELECT * FROM lokasi";
							$result = mysqli_query($koneksi,$q);
							while($row = mysqli_fetch_assoc($result)){
								echo "<tr><td>" . $row["id_lokasi"]. "</td><td>" . $row["nama_lokasi"] ."</td>"
							?>
						
							<td><a href="lokasi/form_edit_user.php?id_lokasi=<?php echo $row["id_lokasi"]; ?>">Edit</a>
								<a href="lokasi/delete_user.php?id_lokasi=<?php echo $row["id_lokasi"]; ?>">Delete</a></td></tr>
							<?php
							}
							?>
						</table>
							<br/><a class="btn_dashboard" href="lokasi/form_tambah_user.php">Tambah Lokasi</a><p/>
					</div>
				</section>


			</div>
	
	<link rel="stylesheet" type="text/css" href="style_tabel.css">
	<script type="text/javascript" src="script.js"></script>

		<script type="text/javascript" src="script.js"></script>
</body>
</html>




