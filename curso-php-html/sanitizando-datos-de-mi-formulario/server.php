<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["emal"];
$edad = $_POST["edad"];

$htmlentities = htmlentities($name);//forma 1 de sanitizar
$addslashes = addslashes($username);//para que no afecten comillas
$onlywords = preg_replace("/\d/", "", $username);// esto es para evitar solo texto
$onlynumber = preg_replace("/\D/", "", $username);// esto es para evitar solo numeros
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($edad, FILTER_SANITIZE_NUMBER_INT);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del usuario.</title>
</head>
<body>

<p>Nombre</p>
<?= $htmlentities ?>
<p>Username</p>
<?= $addslashes ?>
<p>Username sin numeros</p>
<?= $onlywords ?>
<p>Username sin letras</p>
<?= $onlynumber ?>
<p>Email</p>
<?= $email ?>
<p>Edad</p>
<?= $sanitize_int ?>

    
</body>
</html>