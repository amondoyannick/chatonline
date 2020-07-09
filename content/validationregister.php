<?php 
include 'bdd.php';
//verification des information entrer au formulaire.
//securiser les information entrer dans le formulaire.
$nom = htmlspecialchars($_POST['nom']);
$prenom =htmlspecialchars( $_POST['prenom']);
$mail = htmlspecialchars($_POST['mail']);
$pass = password_hash($_POST['pwd'] , PASSWORD_DEFAULT);
$clef = "" ;
$actif= 0;
if(isset($nom,$pass,$mail,$prenom))
{
$get_info_user = $bdd->prepare('INSERT INTO users(nom,prenom, mail,motdepasse , date_creation, clef , actif) VALUES (?,?,?,?,?,?,now()')or die(print_r($bdd->errorInfo()));
$get_info_user->execute(array(
    $nom , $prenom ,$mail , $pass , $actif , $clef  
)) ;


 //recupération des variables neccessaire au mail de confirmation.
  $nom ;
  $mail;
 // géneration aléatoire d'une clef
 $clef= md5(microtime(TRUE)*100000);

 //// Insertion de la clé dans la base de données (à adapter en INSERT si besoin)

 $inclef = $bdd->prepare('UPDATE users SET clef = :clef WHERE nom like :nom ');
 $inclef->execute(array(
     'nom'=>$nom , 'clef' => $clef
 ));

    // Préparation du mail contenant le lien d'activation
    
 /*   $destinataire = $mail;
    $sujet = "Activer votre compte" ;
    $entete = "From: societegeneral@gmail.com" ;

    // Le lien d'activation est composé du nom(log) et de la clé(cle)
    $message = 'Bienvenue sur evoko+,
    
    Pour activer votre compte, veuillez cliquer sur le lien ci-dessous
    ou copier/coller dans votre navigateur Internet..
    
    http://votresite.com/activation.php?log='.urlencode($nom).'&cle='.urlencode($clef).'
    
    
    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre..';
    
    
   if(mail($destinataire, $sujet, $message, $entete)) // Envoi du mail
   {
        echo 'Email envoyé avec succès à.'.$mail ;
   }else{
       echo 'echec de l\'envoi' ;
   }
*/
}
       


$get_info_user->closeCursor();


?>



<?php 

$mail = htmlspecialchars($_POST['mail']);
$pass = password_hash($_POST['pwd'] , PASSWORD_DEFAULT);

$req = $bdd->prepare('INSERT INTO users (mail,motdepasse) VALUES (?,?)');
$req->execute(array($mail,$pass));


?>

