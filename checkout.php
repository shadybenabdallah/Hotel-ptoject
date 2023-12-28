<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Check-out</title>
		<link href="stylepro.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 
    </head>
	<body class="loggedin">
	<div class="main-layout">
  		<div class="nav-layout">
		  <?php include 'nav.php' ?>
		</div>
		<div class="content makeImgBg " >

		<form action="checkout.php" method="POST" class="content-form">
		<h3 class="checkin-title">CHECK-OUT</h3>

		<form action="checkout.php" method="POST">
Give your CIN card : <input type="text" name="cin">
<input type="submit" value="Envoi">
</form>

</div>





		</div>
</div>

</body>
</html>






<?php
if (!empty($_POST))
{
$varcin=$_POST['cin'];
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
$sqlQuery = "DELETE FROM hotel_clients WHERE cin=$varcin";
$requete = $db->prepare($sqlQuery);
$requete->execute();
}
?>
