<!DOCTYPE html>
<html>
   <head>
     <meta charset="utf-8">
    <meta name="viewport" content="width = device-width , initial-scale=1.0" >
    <title>register</title>
    <link rel="stylesheet" href="../css/register.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>

   </head>
   <body>

        <div class="container">
            <div class="containerbox">
                    <h3>enregistrement</h3>
              <form method="POST" action="validationregister.php">

                <div class="formgroup">
                    <label for="nom">pseudo:</label>
                    <input type="text" id="pseudo" placeholder="pseudo" required name="pseudo">

                </div>
                <div class="formgroup">
                    <label for="mail">email:</label>
                    <input type="text" id="mail" placeholder="exemple:nom@gmail.com" required name="mail">  
                </div>
                <div class="formgroup">
                      <label for="pwd">mot de passe:</label>
                      <input type="password" id="pwd" placeholder="mot de passe" name="pwd">
                 </div>
                <div class="formgroup">
                      <button name="valide">valider</button>
                 </div>
                 <p>
                     <a href="../index.php">si vous avez un compte connecter vous ici.</a>
                 </p>

              </form>

            </div>
        </div>
   </body>

   </html>
