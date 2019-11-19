<!DOCTYPE html>
<html>
<head>
	<title>PANTAU | MKK</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="chartjs/Chart.js"></script>
	<style>
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button span:after {
  content: '\00ab';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  
  transition: 1s;
}

.button:hover span {
  padding-right: 25px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
						<li><a href="../../beranda/index.html">Beranda</a></li>
						<li><a href="../../data/tampil.php">Data</a></li>
						<b><li><a href="../generateDataDB.php">Monitoring</a></li></b>
					</ul>
				</div>
			<div class="right">
				<a href="../../../logout.php" class="btn btn-white">LOGOUT</a>
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
	<a href="../index.php" class="button" style="vertical-align:middle"><span>Kembali</span></a>

	<center>
		<h2>Grafik MKK</h2>
	</center>


</body>
</html>