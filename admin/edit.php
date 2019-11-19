<?php
 include "../koneksi.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM db_user WHERE id_user='$id'";
 $result = mysql_query($sql);
 $dt = mysql_fetch_array($result);
?>
<html>
          <head>
                      <title>Belajar Koneksi Database</title>
          </head>
          <body>
                    <h3> Masukkan Data </h3>
        <form action="editaksi.php" method="post">
		<input type="hidden" value="<?php echo $dt['id_user'];?>" name="id_user">
                  <table>
                     <tr>
                           <td>Nama</td>
                           <td>:</td>
                           <td><input type="text" name="nama" value="<?php echo $dt['nama'];?>"></td>
                     </tr>
                     <tr>
                           <td>Username</td>
                           <td>:</td>
                           <td><input type="text" name="username" value="<?php echo $dt['username'];?>"></td>
                    </tr>
                     <tr>
                           <td>Password</td>
                           <td>:</td>
                           <td><input type="password" name="password"></td>
                    </tr>
					<tr>
						    <td> Level</td>
						    <td>:</td>
							<td><select name="level">
							<option value="admin">Admin</option>
							<option value="user">User</option>
							</select></td>
					</tr>
					</table>
            <input type="submit" value="Daftar"> <input type="reset" value="Reset">
       </form>
        </body>
   </html>