<?php ?>

<?php 

$tabla_del_9 = [];

for ($i = 1; $i <= 10; $i++){

    $resultado = 9 * $i;
    $texto = "9 x $i = $resultado";

    array_push($tabla_del_9, $texto);
}
/*echo "<pre>";
print_r($tabla_del_9);
echo "</pre>";
echo "<pre>";
var_dump($tabla_del_9);
echo "</pre>";*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Refactorizando codigo espagueti</title>
</head>
<body>

<small>Este es el codigo espagueti mala practoca</small>
    <h1>Tabla del 9</h1>
    <ul>

    <?php 
    for ($i=0; $i < 10; $i++) { 
       echo "<li>" . "9 x 1 =" . (9 * ($i + 1)) . "</li>";
    }
    ?>
    </ul>

    <small>Esta es la forma factorizad del codigo.</small>

    <ul>
        <?php for ($i = 1; $i <= 10; $i++) : ?>

        <li>9 x <?= $i ?> = <?= 9 * $i ?></li>

        <?php endfor ; ?>
    </ul>

    <small>esta es la forma en la que ponemos toda la logica de PHP fuera de la de HTML esto con el fin de que corran mejor y no se mezclen solo imprimimos los resusltados.</small>

    <ul>

    <?php foreach ($tabla_del_9 as $result) : ?>

    <li><?= $result ?></li>

    <?php endforeach; ?>

    </ul>

</body>
</html>