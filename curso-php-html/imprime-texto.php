<?php 

    $nombre = "Mr. Michi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimiendo texto y etiquetas con PHP</title>
</head>
<body>
    <?php echo "<b> Integracion de html con php</b> <br>";?>

    <?= "<i> otra forma de imprimir con PHP</i>" ?>
    <h1>¡hola <?= $nombre ?>!</h1>
</body>
</html>