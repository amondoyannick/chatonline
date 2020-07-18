<?php 
session_start();
if(!empty($_SESSION['email'])){
	header('location:content/home.php');
}
if(!empty($_POST)){
	extract($_POST);
	$valid = true ;
	if(empty($mail)){
		$valid = false;
		$errormail = " Indiquez une adresse email valide" ;
	}
	if(empty($pass)){
		$valid = false;
		$errorpass = 'Mauvais mot de passe';
		
	}
	if($valid){
		require('content/bdd.php');
		$req = $bdd->prepare('SELECT id FROM register WHERE email = :email AND pass = :pass');
		$req->execute(array('email'=>$mail , 'pass'=>sha1($pass ))) ;
		if(!empty($mail) && !empty($pass)){
			if($req->rowcount() == 0){
				$valid = false;
				$error = 'Mauvais identifiants' ;
			}

		}
		if($valid){
			$_SESSION['email'] = $mail ;
			header('location:content/home.php');
		}
		unset($mail);
		

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
	<div class="boxlogin">
		
		<div class="containerlogo">
				
				<div class="cercle"> 
					<img src="images/logo.png">
				</div>
		</div>
		<span class="error"> <?php if(isset($error)) echo $error;  ?>  </span>
		<div class="containerinput">
			<form action="index.php" method="post" name="form">
				<div class="formgroup">
					<input class="text" type="email" value="<?php if(isset($mail)) echo $mail ;?>" name="mail" placeholder="exemple:nom@gmail.com">
					<span class="error"> <?php if(isset($errormail)) echo $errormail;  ?>  </span>
					<input class="text" type="password" name="pass" placeholder="mot de passe">
					<span class="error"> <?php if(isset($errorpass)) echo $errorpass;  ?>  </span>
				</div>
				<div class="formgroup">
					<button value="connexion" name="connexion">connexion</button>
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
</body>
</html>