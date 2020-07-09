
<?php
/*
$login = 'alice';
$password = 'alice';
$url = 'https://recrutement.saint-honore.eu/login';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$login:$password");
$result = curl_exec($ch);
curl_close($ch);  
echo($result);
*/
//connexion a la base de donnees.

try{
  $bdd = new pdo('mysql:host=localhost;dbname=gabon;charset=utf8','root','');
}catch(exception$e){
    die('error'.$e->getMessage());
}
?>
