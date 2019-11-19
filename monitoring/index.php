<!DOCTYPE html>
<html>
<head>
	<title>Grafik | MKK</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>
		<style>
.button {
 position: relative;

  left: 450px;
  top: 10px;
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid rgba(75, 192, 192, 1);
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button1:hover {
  background-color: rgba(75, 192, 192, 0.2);
  color: rgba(255,99,132,1);
   box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid rgba(255,99,132,1);
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
  background-color: rgba(255, 99, 132, 0.2) ;
  color: rgba(75, 192, 192, 1);
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}
</style>
</head>
<body>


<div id="container">
	<section id="menu" class="no-sticky"> 
		<div class="content">
			<div class="left">
					<ul>
						<li><a href="../beranda/index.html">Beranda</a></li>
						<li><a href="../data/tampil.php">Data</a></li>
						<b><li><a href="generateDataDB.php">Monitoring</a></li></b>
					</ul>
				</div>
			<div class="right">
				<a href="../logout.php" class="btn btn-white">LOGOUT</a>
			</div>
		<div class="clear"></div>
		</div>
	</section>
	       <a href="generateDataDB.php" class="button button2"><b>Lihat Data Generate</a></b>
        	<a href="ta/index.php" class="button button1"><b>Lihat Grafik Pantau</a></b>
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
					label: 'Jumlah',
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