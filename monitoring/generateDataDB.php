<!DOCTYPE html>
<html>
<head>
	<title>Monitoring | MKK</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="javascript/script.js"></script>

	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(
			function(){
				function getRandom(min,max){
					return (Math.random()*(max-min+1)+min);
				}	

				var time = setInterval(
						function(){
							$.ajax(
								{
								  url:'reload.php',
								  data:{kecepatan:getRandom(0,200)},
								  method:'post',
								  dataType:'json',
								  success: function(response){
								  	$('#kecepatan').html(response.kecepatan);
								  	$('#kategori').html(response.kategori);
								  	$('#riwayat').html(response.riwayat);
								  }	
								}	
								);
						},5000);
			}
		);
	</script>
	<style>
.btn-group .button {
  background-color: grey; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  cursor: pointer;
  float: left;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.btn-group .button:hover {
  background-color: #3e8e41;
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
						<b><li><a href="../monitoring/generateDataDB.php">Monitoring</a></li></b>
					</ul>
				</div>
			<div class="right">
				<a href="../logout.php" class="btn btn-white">LOGOUT</a>
			</div>
		<div class="clear"></div>
		</div>
	</section>
				<section class="bagan0" id="section0">
					<div class="content">
	<div class="btn-group">

	<a href="index.php" class="button"><b>Lihat Grafik</a></b>
	
	<a href="download/index.php" class="button"><b>Download</a></b>
	
	<a href="cetak.php" class="button"><b>Cetak</a></b>
	</div>
	</div>
	</br>
	</br>
		</br>
		<h1>Kecepatan saat ini</h1>
		Kecepatan:<strong id='kecepatan'>Memuat data...</strong><br>
		Kategori:<strong id='kategori'>Memuat data...</strong><br>
		<h1>Riwayat Kecepatan:</h1>
		<div id='riwayat'>
			<table border="1" rules="all" cellpadding="5">
				<tr style="background-color: green;">
					<th>#</th>
					<th>Kecepatan</th>
					<th>Kategori</th>
					<th>Waktu</th>
				</tr>
				<tr>
					<td colspan="4">Memuat Data</td>
				</tr>
			</table>
		</div>
</body>
</html>





