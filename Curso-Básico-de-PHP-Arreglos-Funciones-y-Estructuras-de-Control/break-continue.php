<?php

$cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuchino" => 27.5,
    "Mocca" => 24,
    "Negro" => 15,
    "Recalentado" => 5

);

foreach ($cafes as $cafe => $precio) {
    echo "Actualmente encontre el cafe $cafe <br>";
    echo "<br>";
    if ($cafe == "Latte"){
        echo "Encontamos a late";
        echo "<br>";
        break;
    }
}

foreach ($cafes as $cafe => $precio) {
    echo "<br>";
    if ($cafe == "Recalentado"){
        continue;
    }
    echo "El cafe $cafe es muy rico";
    echo "<br>";
}