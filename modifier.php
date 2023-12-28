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
		<title>Modifier</title>
		<link href="stylepro.css" rel="stylesheet" type="text/css">
 		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 
    </head>


	<body class="loggedin">
	<div class="main-layout">
  		<div class="nav-layout">
		 
		</div> <?php include 'nav.php' ?>
		<div class="content makeImgBg " >

		<form action="modifier.php" method="POST" class="content-form">
		<h3 class="checkin-title">Change</h3>

	
Name : <input type="text" name="nom">
Last name  : <input type="text" name="prenom">
Choose your category de room : <select name="categoryroom" id="category">
<option value="">Choose the room category  </option>
<option value="SingleRoom"> Single room </option>
    <option value="DoubleRoom"> Double room </option>
    <option value="DeluxeRoom">Deluxe room </option>
</select>
Check-in date: <input type=date name="checkin">
Check-out date: <input type=date name="checkout"> 
Add your CIN card:<input type="text" name="cin">
<br><input type="submit" value="Change" name="button" >
</form>

</div>





		</div>
</div>
</body>
</html>






<?php
if (!empty($_POST))
{ $varnom=$_POST['nom'];
    $varprenom=$_POST['prenom'];
    $varroom=$_POST['categoryroom'];
    $varcheckin=$_POST['checkin'];
    $varcheckout=$_POST['checkout'];
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
    $sqlQuery = "UPDATE hotel_clients SET
    nom='$varnom',prenom='$varprenom',categoryroom='$varroom',checkin='$checkin',checkout='$checkout'
    WHERE cin='$varcin'";
    $requete = $db->prepare($sqlQuery);
    $requete->execute();
    }
   


?>

