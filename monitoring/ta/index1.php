<!DOCTYPE html>
<html>
<head>
	<title>MEMBUAT GRAFIK DARI DATABASE MYSQL DENGAN PHP DAN CHART.JS - www.malasngoding.com</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>
</head>
<body>


<div id="container">
	<section id="menu" class="no-sticky"> 
		<div class="content">
			<div class="left">
					<ul>
						<li><a href="../../beranda/index.html">Beranda</a></li>
						<li><a href="../../data/tampil.php">Data</a></li>
						<b><li><a href="../generateDataDB.php">Monitoring</a></li></b>
					</ul>
				</div>
			<div class="right">
				<a class="btn btn-white">OPERATOR</a>
				<a href="../logout.php" class="btn btn-white">LOGOUT</a>
			</div>
		<div class="clear"></div>
		</div>
	</section>

	<style type="text/css">
	body{
		font-family: roboto;
	}

	table{
		margin: 0px auto;
	}
	</style>


	<center>
		<h2>Grafik MKK</h2>
	</center>


	<?php 
	include 'koneksi.php';
	?>

	<div style="width: 800px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>

	<br/>
	<br/>

	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Normal", "Terlalu Cepat"],
				datasets: [{
					label: 'Statistik',
					data: [
					<?php 
					$jumlah_normal = mysqli_query($koneksi,"select * from riwayat where kategori='normal'");
					echo mysqli_num_rows($jumlah_normal);
					?>, 
					<?php 
					$jumlah_cepat = mysqli_query($koneksi,"select * from riwayat where kategori='Terlalu Cepat'");
					echo mysqli_num_rows($jumlah_cepat);
					?>
					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(75, 192, 192, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(75, 192, 192, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>