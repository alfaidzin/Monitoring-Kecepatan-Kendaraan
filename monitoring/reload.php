<?php
  date_default_timezone_set('Asia/Jakarta');  
  $kecepatan = $_POST['kecepatan'];

  $conn = mysqli_connect("localhost","id10540959_root","yandra",'id10540959_mynotescode');
  $sql = "SELECT * FROM ambang_batas ORDER BY id_ambang_batas";
  $result = mysqli_query($conn,$sql);

  $kategori = '';
  while ($row = mysqli_fetch_assoc($result)) {
  	if(eval('return '.$kecepatan.$row['kecepatan'].';')){
  		$kategori = $row['kategori'];
  		break;
  	}
  }

  $sql = "SELECT * FROM riwayat ORDER BY waktu DESC LIMIT 10";
  $result = mysqli_query($conn,$sql);
 
  $riwayat = '<table border="1" rules="all" cellpadding="5">
				<tr style="background-color: gray;">
					<th>#</th>
					<th>id_lokasi</th>
					<th>id_kendaraan</th>
					<th>Kecepatan</th>
					<th>Kategori</th>
					<th>Waktu</th>
				</tr>';

	$i = 1;
	
	while ($row = mysqli_fetch_assoc($result)) {
  	 $riwayat .= '<tr>
					<td>'.($i++).'</td>
					<td>'.$row['id_lokasi'].'</td>
					<td>'.$row['id_kendaraan'].'</td>
					<td>'.$row['kecepatan'].'</td>
					<td>'.$row['kategori'].'</td>
					<td>'.$row['waktu'].'</td>
				</tr>';
  	}
  $Plat = array("A","B","D","E","F","G","H","K","L","M","N","P","R","S","T","W","Z","AA","AB","AD","AE","AG");
$Nomor = "123456789";
$Plat2 = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i = 0; $i < 1; $i++) { 
        $Depan = rand(0, sizeof($Plat)-1); 
        $PlatDepan = $Plat[$Depan]; 
    }
for ($i = 0; $i < 4; $i++) { 
        $Tengah = rand(0, strlen($Nomor)-1); 
        $PlatTengah[] = $Nomor[$Tengah]; 
    }
for ($i = 0; $i < 3; $i++) { 
        $Belakang = rand(0, strlen($Plat2)-1); 
        $PlatBelakang[] = $Plat2[$Belakang]; 
    }

$PlatAkhir = "$PlatDepan $PlatTengah[0]$PlatTengah[1]$PlatTengah[2]$PlatTengah[3]
 $PlatBelakang[0]$PlatBelakang[1]$PlatBelakang[2]";

 $sql1 = "SELECT count(*) as count FROM lokasi";
$result1 = mysqli_query($conn,$sql1 ); 
 
  if(!mysqli_num_rows($result)){
  	$riwayat .= '<tr>
					<td colspan="4">data kosong</td>
				</tr>';
  }

  $riwayat.='</table>';
  $count = mysqli_fetch_assoc($result1);

  $sql = "INSERT INTO riwayat(id_lokasi, id_kendaraan, kecepatan,kategori,waktu)
          VALUES ('".rand(1,$count['count'])."','".$PlatAkhir."','".$kecepatan."',
                  '".$kategori."',
                  '".date("Y-m-d H:i:s")."'
				)";

  $result = mysqli_query($conn,$sql); 

  $response = array(
  		'kecepatan'=>$kecepatan,
  		'kategori'=>$kategori,
  		'riwayat'=>$riwayat
  	);

  echo  json_encode($response);
?>