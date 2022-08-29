<?php

$edades = array(
    "Carlos" => 20,
    "Mr. Michi" => 18,
    "Juan" => 40
);

echo "La edad de Mr. Michi es: " . $edades["Mr. Michi"];
echo "<br>";
echo "La edad de Carlos es: " . $edades["Carlos"];
echo "<br>";
echo "La edad de Juan es: " . $edades["Juan"];
echo "<br>";

$cafes = [
    "Capuchino" => 50,
    "Latte" => 49,
    "Americano" => 70
];

echo "El presio del cafe Capuchino es de : {$cafes['Capuchino']}<br>";
echo "El presio del cafe Latte es de : {$cafes['Latte']}<br>";
echo "El presio del cafe Americano es de : {$cafes['Americano']}<br>";

$personas = array (
    "Carlos" => array(
        "Edad" => 20,
        "apellido" => "Santana"
    ),
    "Mr. Michi" => array(
        "Edad" => 18,
        "apellido" => "Michisancio"
    )
);

echo "<br> La informacion de Mr. Michi es: <br>Edad: " . $personas
["Mr. Michi"]["Edad"] . " <br>Apellido: " . $personas
["Mr. Michi"]["apellido"];