
	

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
			    <span class="error"> <?php if(isset($errorpseudo)) echo $errorpseudo;  ?>  </span>
				<span class="error"> <?php if(isset($errorpass)) echo $errorpass;  ?>  </span>
			<form action="index.php" method="post" name="form">
				<div class="formgroup">
					<input class="text" type="text" value="<?php if(isset($pseudo)) echo $pseudo ;?>" name="pseudo" placeholder="pseudo">
					
					<input class="text" type="password" name="pass" placeholder="mot de passe">
				
				</div>
				<div class="formgroup">
					<button value="connexion" name="connexion">connexion</button>
				</div>
				<div class="formgroup">
					<p class="txt">
					  <a href="content/oubli.php">mot de passe oublié ?</a>
				   </p>
						
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