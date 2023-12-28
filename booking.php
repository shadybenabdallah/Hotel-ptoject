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
		<title>Booking</title>
 		<link href="stylepro.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2e5eca910b.js" crossorigin="anonymous"></script>

    </head>


	<body class="loggedin">
	<div class="main-layout">
  		<div class="nav-layout">
		  <?php include 'nav.php' ?>
		</div>
		<div class="content makeImgBg">
<div class="checkinBtnBox">
<a href="checkin.php" class="checkin" >   Check-IN </a>
<a href="checkout.php"  class="checkout"> Check-out </a>

</div>





		</div>
</div>

</body>
</html>



