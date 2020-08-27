<?php
declare(strict_types = 1) ;
session_start();
if(isset($_SESSION['id'])){
	header('location:compte.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/css.css">
	<link rel="shortcut icon" href="../img/logo.png">
	<title>compte</title>
</head>
<body>
	<?php include('include/head.php'); ?>
	<div class="container">
		<div class="row pt-3 ">
			<div class="col-md-4"></div>
			<div class="col-md-4 pt-3 ">
		
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>