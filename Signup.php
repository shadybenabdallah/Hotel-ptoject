<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign up</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="login">
	<div class="box">
		<form action="Signup.php" method="post">
			<h2>Sign up</h2>
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
			<input type="submit" value="Sing-up" onclick="my()">
			<a href="index.php" value="Log-in">Log in </a>
		</form>
	</div></div>
</body>
</html>
<?php
if (!empty($_POST))
{
$varusername=$_POST['username'];
$varpassword=$_POST['password'];
//connexion à la base de données
try
{
 $db =new PDO('mysql:host=localhost;dbname=hotel;charset=utf8',
'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
// execution de la requete d insertion
$sqlQuery = "INSERT INTO accounts(username,password)
VALUES('$varusername','$varpassword')";
$requete = $db->prepare($sqlQuery);
$requete->execute();
}
?>
<?php
echo '<script type="text/javascript">
        function my () { alert("your account has been made"); } 
</script>'; 
?> 

