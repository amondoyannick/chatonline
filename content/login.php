//Récupération de la valeur du champ actif pour le nom $nom
    $stmt = $bdd->prepare('SELECT actif FROM users where nom like :nom');
    if($stmt->execute(array( ':nom'=>$nom)) && $row = $stmt->fetch())
    {
        $actif = $row['actif']; //actif contient 0 ou 1
    }
    if($actif == '1')
    {

        echo 'connexion autorisé' ;
        header('location:home.php');
    }
    else{
        echo 'erreur de connexion le compte n\'est pas activé ';
        header('location:../index.php');
    }


   
    <?php
  $dest = "amondoyannick@gmail.com";
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: amondoyannick@gmail.com";

  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyé avec succès à $dest ...";
  } else {
    echo "Échec de l'envoi de l'email...";
  }
?>