<html>
          <head>
            <meta charset="utf-8">
                      <title>Belajar Koneksi Database</title>
                      <link rel="stylesheet" type="text/css" href="form.css">
          </head>
          <body>
            <div class="loginBox">
            <img src="user.png" class="user">
            <h2> Masukkan Data </h2>
        <form action="insert.php" method="post">
            <p>id_operator</p>
        <input type="text" name="id_operator" placeholder="id operator" required="required">
            <p>Nama</p>
        <input type="text" name="nama" placeholder="nama" required="required">
            <p>username</p>
        <input type="text" name="username" placeholder="username" required="required">
         <p>Password</p>
        <input type="password" name="password" placeholder="••••••" required="required">

        <input type="submit" name="" value="Daftar">
        <a href='../login.php'>Login !</a>
		   <!--       <table>
                    <tr>
                           <td>id_operator</td>
                           <td>:</td>
                           <td><input type="text" name="id_operator" ></td>
                     </tr>
                     <tr>
                           <td>Nama</td>
                           <td>:</td>
                           <td><input type="text" name="nama" ></td>
                     </tr>
                     <tr>
                           <td>Username</td>
                           <td>:</td>
                           <td><input type="text" name="username"></td>
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
            <input type="submit" value="Daftar"> <input type="reset" value="Reset"> -->
       </form>
     </div>
     
        </body>
   </html>