<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT</title>
</head>
<body>

	<center>

		<h2>LAPORAN</h2>
		<h4>MONITORING KECEPATAN KENDARAAN</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th>id_riwayat</th>
			<th>id_lokasi</th>
			<th>id_kendaraan</th>
			<th>Kecepatan</th>
			<th>Kategori</th>
			<th>Waktu</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($koneksi,"select * from riwayat");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>

			<td><?php echo $data['id_riwayat']; ?></td>
			<td><?php echo $data['id_lokasi']; ?></td>
			<td><?php echo $data['id_kendaraan']; ?></td>
			<td><?php echo $data['kecepatan']; ?></td>
			<td><?php echo $data['kategori']; ?></td>
			<td><?php echo $data['waktu']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

	<script>
		window.print();
	</script>

</body>
</html>