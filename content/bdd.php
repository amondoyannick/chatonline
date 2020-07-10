
<?php

//connexion a la base de donnees.

try{
  $bdd = new pdo('mysql:host=localhost;dbname=chatoline;charset=utf8','root','');
}catch(exception$e){
    die('error'.$e->getMessage());
}
?>
