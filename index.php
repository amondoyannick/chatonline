<?php 
session_start();
if(!empty($_SESSION['id'])){
	header('location:home.php');
}
if(!empty($_POST)){
	extract($_POST);
	$valid = true ;
	if(empty($mail)){
		$valid = false ;
		$erreurmail = " Indiquer un mail valide" ;
	}
	if(empty($pass)){
		$valid = false ;
		$erreurpass = " Entrer un mot de pass" ;
	}
		require('content/bdd.php');
		$req = $bdd->prepare('SELECT id_login FROM chatonline  WHERE email =:email AND pass = :pass');
		$req->execute(array('email'=>$mail, 'pass'=>sha1($pass)));
		if(!empty($pass) && !empty($mail)){
			if($req->rowCount()== 0){
				$valid = false ; 
				$erreur = "mauvais identifiants";
			}
			if($valid){
				$_SESSION['id'] = $login;
				header('location:home.php');
			}

		}
		
}
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>fiche inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<meta name ="viewport" content="width=width-device , initial-scale=1" >
	<link rel="stylesheet"  href="css/custom.css">
	<meta charset="utf-8">
</head>
<body>
		<div class="left">
			<div class="containerlogo">
				<a>
					<img src="" title="chatonline"> ici logo
				</a>
					
				</div>
		</div>

		<div class="right">
			<ul >
				<li class="active"><a href="index.php">Home</a></li>
				<li><a href="content/register.php">Register</a></li>
				<li><a href="content/Apropos.php">A propos</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		
		
		<div class="boxlogin">
			
			<div class="containerlogo">
					
					<div class="cercle">
						<img src="images/logo.svg">
					</div>
			</div>
			<div class="containerinput">
				<form action="index.php" method="post">
					<div class="formgroup">
						<input class="text" type="text" name="mail" placeholder="exemple:nom@gmail.com" maxlength="16" value="<?php if(isset($mail)) echo $mail ; ?>">
						<span class="error"><?php if(isset($erreurmail)) echo $erreurmail;  ?> </span>
						<input class="text" type="text" name="pwd" placeholder="mot de passe">
						<span class="error"><?php if(isset($erreurpass)) echo $erreurpass;  ?> </span>
					</div>
					<div class="formgroup">
						<button >valider</button>
					</div>
					<div class="formgroup">
						
						<label for="stayloguser">rester connecté</label>
						<input class="btnradio" type="radio" id="stayloguser">
						
					</div>
					<p class="txt">
						vous n'avez pas de compte ?
						<a href="content/register.php">Inscrivez vous ici</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</body>
</html>