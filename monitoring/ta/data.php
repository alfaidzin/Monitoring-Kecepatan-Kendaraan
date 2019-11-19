<?php
include "koneksi.php";
?>

<?php
  $x_tanggal  = mysqli_query($konek, 'SELECT waktu FROM ( SELECT * FROM riwayat ORDER BY id_riwayat DESC LIMIT 20) Var1 ORDER BY id_riwayat ASC');
  $y_metana   = mysqli_query($konek, 'SELECT kecepatan FROM ( SELECT * FROM riwayat ORDER BY id_riwayat DESC LIMIT 20) Var1 ORDER BY id_riwayat ASC');
  ?>

  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title"><center></h3>
    </div>

    <div class="panel-body">
        
	<div style="width: 800px;margin: 0px auto;">
		
      <canvas id="myChart"></canvas>
      </div>
      <script>
       var canvas = document.getElementById('myChart');
        var data = {
            labels: [<?php while ($b = mysqli_fetch_array($x_tanggal)) { echo '"' . $b['waktu'] . '",';}?>],
            datasets: [
            {
                label: "kecepatan",
                fill: true,
                lineTension: 0.1,
                backgroundColor: "rgba(105, 0, 132, .2)",
                borderColor: "rgba(200, 99, 132, .7)",
                borderCapStyle: 'butt',
                borderDash: [],
                borderDashOffset: 0.0,
                borderJoinStyle: 'miter',
                pointBorderColor: "rgba(200, 99, 132, .7)",
                pointBackgroundColor: "#fff",
                pointBorderWidth: 1,
                pointHoverRadius: 5,
                pointHoverBackgroundColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderColor: "rgba(200, 99, 132, .7)",
                pointHoverBorderWidth: 2,
                pointRadius: 5,
                pointHitRadius: 10,
                data: [<?php while ($b = mysqli_fetch_array($y_metana)) { echo  $b['kecepatan'] . ',';}?>],
            }
            ]
        };

        var option = 
        {
          showLines: true,
          animation: {duration: 0}
        };
        
        var myLineChart = Chart.Line(canvas,{
          data:data,
          options:option
        });

      </script>          
    </div>    
  </div>
