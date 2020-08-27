<?php
declare(strict_types = 1) ;
session_start();
if(isset($_SESSION['id'])){
	header('location:connexion.php');
}

if(!empty($_POST)){
	extract($_POST) ;
	$erreur = [] ;
	require_once('include/functions.php') ;
	if(empty($email)){
		$erreur['email'] = 'Adresse e-mail manquante' ;
	}
	elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
		$erreur['email'] = 'Adresse e-mail invalide ' ;
	}
	elseif(!email_free($email)){
		$erreur['email'] = 'Adresse e-mail existe deja' ;
	}
	if(empty($password)){
		$erreur['password'] = 'Mot de passe manquant' ;
	}
	elseif(strlen($password)<8){
		$erreur['password'] = 'mot de passe doit au moins faire 8 caractères ' ;
	}
	if(empty($passwordconf)){
		$erreur['passwordconf'] = 'confirmation de mot de passe manquante' ;
	}
	elseif($password != $passwordconf){
		$erreur['passwordconf'] = 'mot de passe différent' ;
	}
	if(!$erreur){
		// include BDD  || recupération des data dans la BDD
		
		unset($email) ;
		$validation = 'Inscription reussie avec succès !' ;
	}
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
	<title>inscription</title>
</head>
<body>
	<?php include('include/head.php'); ?>
	<div class="container">
		<div class="row pt-3 ">
			<div class="col-md-4"></div>
			<div class="col-md-4 pt-3 ">
			<h1 class="text-center">Inscription</h1>

			<?php if(isset($erreur['email'])) : ?>

				<div class="alert alert-danger "><?= $erreur['email'] ?></div>

			<?php endif ?>
			<?php if(isset($erreur['password'])) : ?>

				<div class="alert alert-danger "><?= $erreur['password'] ?></div>

			<?php endif ?>
			<?php if(isset($erreur['passwordconf'])) : ?>

				<div class="alert alert-danger "><?= $erreur['passwordconf'] ?></div>

			<?php endif ?>

			<?php if(isset($validation)) : ?>

			<div class="alert alert-success "><?= $validation ?></div>

			<?php endif ?>

			<form class="formgroup pt-3" action="inscription.php" method="post">
				<input type="email" name="email"  placeholder="Adresse e-mail" value="<?php if(isset($email)) echo $email ;  ?>">
	            <input type="password" name="password"  placeholder="Mot de passe">
	            <input type="password" name="passwordconf" placeholder="Confirmez le mot de passe">
	            <button value="connexion">connexion</button>
	            <div class="pt-3"></div>
	        </form>
			</div>
			<div class="col-md-4 "></div>
		</div>
	</div>
</body>
</html>