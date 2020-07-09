<?php 
	
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
					<img src="images/logo.svg">
				</div>
		</div>
		<div class="containerinput">
			<form action="content/validationregister.php" method="post">
				<div class="formgroup">
					<input class="text" type="text" name="mail" placeholder="exemple:nom@gmail.com" maxlength="16">
					<input class="text" type="text" name="pwd" placeholder="mot de passe">
				</div>
				<div class="formgroup">
					<button>valider</button>
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