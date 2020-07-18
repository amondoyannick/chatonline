
<?php

try{
  $bdd = new pdo('mysql:host=localhost:3308;dbname=chatonline;charset=utf8','root','');
}catch(exception$e){
    die('error'.$e->getMessage());
}
?>
