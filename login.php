<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login | MKK</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="loginBox">
			<img src="user.png" class="user">
			<h2>Log In Here</h2>
			<form action="login/ceklogin.php" method="post">
				<p>Username</p>
				<input type="text" name="username" placeholder="Enter Username"  required="required">
				<p>Password</p>
				<input type="password" name="password" placeholder="••••••"  required="required">
				<input type="submit" name="" value="Sign In">
				<a href="admin/form.php">Register</a>
			</form>
		</div>
	</body>
</html>
