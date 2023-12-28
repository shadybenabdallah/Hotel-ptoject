<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign in</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="login">
	<div class="box">
		<form action="authenticate.php" method="post">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" name="username"  id="username" required>
				<span>Userame</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" name="password"  id="password" required>
				<span>Password</span>
				<i></i>
			</div>
			<input type="submit" value="Login">
			<a href="Signup.php">Make an account </a>
		</form>
	</div></div>
</body>
</html>