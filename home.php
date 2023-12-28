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
		<title>Home Page</title>
		<link href="stylepro.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	
    </head>
	
 
		<div class="main-layout">
  			 <div class="nav-layout">
			   <?php 
					include 'nav.php'
					?>
    		</div>
<div class="content makeImgBg">
	
<div class="home-title">
			<h1>Welcome to our</h1>
			<h3>best services to the best clients</h1>
		</div>
		

		</div>


		</div>


 
</html>



