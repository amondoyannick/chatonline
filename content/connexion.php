<?php
declare(strict_types = 1) ;
session_start();
if(isset($_SESSION['id'])){
	header('location:compte.php');
}

if(!empty($_POST)){
	extract($_POST) ;
	require_once('include/functions.php');
	$membre = account_exist() ;
	if($membre){
		$_SESSION['id'] = $membre['id'];
		header('location:compte.php') ; 
	}
	else{
		$erreur = 'identifiants erroné ! ';
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
	<title>connexion</title>
</head>
<body>
    <?php include('include/head.php'); ?>
	<div class="container">
		<div class="row pt-3 ">
			<div class="col-md-4"></div>
			<div class="col-md-4 pt-3 ">
			<h1 class="text-center">Connexion</h1>
			<?php if(isset($erreur)) : ?>

			<div class="alert alert-danger "><?= $erreur ?></div>

			<?php endif ?>
			<form class="formgroup pt-3" action="connexion.php" method="post">
				<div class="containerlogo">
				
					<div class="cercle"> 
						<img src="../img/logo.png">
					</div>

				</div>

				<input type="email" name="email"placeholder="Adresse e-mail" value="<?php if(isset($email)) echo $email ;  ?>">
	            <input type="password" name="password"  placeholder="Mot de passe">
	            <button value="connexion">connexion</button>
	            <p class="pt-3 ml-3"><a href="oubli.php" class="txt">Mot de passe oublié ?</a></p>
	            <div class="pt-2"></div>
			</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>