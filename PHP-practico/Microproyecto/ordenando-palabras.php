<?php
/*Desarrolla una aplicacion que muestre una lista de palabras que esta en desoreden. El usuario debe ordenar las letras para encontrar la palabra correcta e ingresarla. Despues de enviar sus resultados, el usuario podra ve si acerto o fallo y cual era la palabra correcta.*/

$palabras = array("sol", "luna", "cielo");
$palabraDesorenadas = array();

for ($i=0; $i < 3; $i++) { 
    $palabraDesorenadas[$i] = str_shuffle($palabras[$i]);
}
print_r($palabraDesorenadas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./analisis.php">
    <input type="text" name = "palabra">
    <input type="text" name = "palabra1">
    <input type="text" name = "palabra2">
    <button type= "submit">Enviar</button>
    </form>
</body>
</html>