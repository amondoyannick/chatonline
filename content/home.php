<?php
session_start();
if(empty($_SESSION['email'])){
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
  <h1> welcome yannick </h1>
</head>
<body>
    
</body>
</html>