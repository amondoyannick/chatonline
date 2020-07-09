<?php 
//page pour l'activation de notre compte.

//connexion à la bdd

include 'bdd.php';

//recupération des variables pour l'activation $login et $clef

$nom = $_GET['nom'];
$clef = $_GET['clef'];

 
// Récupération de la clé correspondant au $login dans la base de données
$stmt = $bdd->prepare('SELECT clef ,actif FROM users WHERE nom like :nom');
if($stmt->execute(array('nom' => $nom && $row->fetch() )))
{
    $clefbdd = $row['clef'];//on recupere la clef dans la bdd
    $actif = $row['actif'];// actif prendra la valeur 1 ou 0.
}

// On teste la valeur de la variable $actif récupérée dans la BDD
if($actif == '1')//si le compte est deja activé
{
    echo 'votre compte est deja activé' ;
}else{// si c est pas le cas
    if($clef == $clefbdd)//on test si la clef obtenu est égale à la clef de la bdd
    {
        echo 'activation du compte reussi !';

         // La requête qui va passer notre champ actif de 0 à 1

         $stmt =$bdd->prepare('UPDATE users SET actif = 1 WHERE login like :login ');
         $stmt->bindParam(':login', $login);
         $stmt->execute();
    }else{//si la clef ne correspond pas on affiche une erreur
        echo 'Erreur ! votre compte ne peut pas être activé' ;
    }
}
$stmt->closeCursor();




?>