<link rel="stylesheet" type="text/css" href="view.css">
<table border="5" >
<a href="form.php">Create Data</a>
           <thead>
            <tr>
			 <th>No</th>
             <th>Id operator</th>
		     <th>Nama</th>
			 <th>Username</th>
           </tr>
    </thead>
	<tbody>
 <?php
include '../koneksi.php';
		
	$sql ="SELECT * FROM  operator";
	$no=1;
	//untuk menyeleksi data error
	$query =mysql_query($sql) or die("select data menu error :".mysql_error());
	while($record =mysql_fetch_array($query)){
?>
 <tr>
	 <td>
	 <?php echo $no++?>
	</td>
     <td>
	 <?php echo $record['id_operator'] ?>
	</td>
	<td>
	 <?php echo $record['nama'] ?>
	</td>
	<td>
	 <?php echo $record['username'] ?>
	</td>
<tr>
<?php } ?>
</tbody>
</table>