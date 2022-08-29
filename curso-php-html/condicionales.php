<?php

$se_hablo_de_bruno = true;

?>
<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>condicionales</title>
</head>
<body>

<h1>esto no se debe de hacer</h1>
    
    <?php if ($se_hablo_de_bruno){
        echo "<p>Quien hablo</p>";
        echo "<b>:O</b>";
    }else{
        echo "<b>:)</b>";
    }
    ?>

    <h1>esto es aceptable</h1>
    
    <?php if($se_hablo_de_bruno) { ?>
        <b>:O</b><p>Quien hablo</p>
    <?php }else{ ?>
        <b>:)</b>
    <?php } ?>

    <h1>Esto si deberias hacerlo</h1>

    <?php if($se_hablo_de_bruno): ?>
        <b>:O</b><p>Quien hablo</p>
    <?php else: ?>
        <b>:)</b>
    <?php endif; ?>



</body>
</html>