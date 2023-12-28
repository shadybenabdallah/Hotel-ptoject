
<?php 

try
{
$db =new PDO('mysql:host=localhost;dbname=hotel;charset=utf8',
'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table data_etudiant
$sqlQuery = 'SELECT * FROM hotel_clients';
$requete = $db->prepare($sqlQuery);
$requete->execute();
$res = $requete->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="stylepro.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>CLIENT</title>
</head>
<body class="loggedin">
	<div class="main-layout">
  		<div class="nav-layout">
		  <?php include 'nav.php' ?>
		</div>

		<div class="content  " >
      <div class="table">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Category room</th>
      <th scope="col">Check-IN</th>
	  <th scope="col">Check-OUT</th>
	  <th scope="col">CIN</th>
	  <th>Cancel</th>
    <th>Change</th>
    </tr>
  </thead>
  <tbody>
    <tr >
		<?php foreach($res as $et): ?>
      <th scope="row"><?= $et['nom']?></th>
      <td><?= $et['prenom']?></td>
      <td><?= $et['categoryroom']?></td>
      <td><?= $et['checkin']?></td>
	  <td><?= $et['checkout']?></td>
	  <td><?= $et['cin']?></td>

	  <form action="delete.php" method="post">
		<input type="hidden" name="cin" value="<?php echo $et['cin']?>">
	  <td><input type="submit" name="delete" class="btn btn-danger" value="Delete"></td>
    
   
	
	</form>
  <form action="modifier.php" method="post">
    <td><input type="submit"name="modifier" class="btn btn-success" value="change"></td>
    </tr>
    </form>
	<?php endforeach; ?>
    
  </tbody>
</table>
</div>
		<div> 

</div>
</div>
</div>
</div>
</body>
</html>