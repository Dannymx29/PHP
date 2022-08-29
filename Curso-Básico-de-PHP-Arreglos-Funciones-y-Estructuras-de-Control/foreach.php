<?php

$cafes = array(
    "Americano" => 20,
    "Latte" => 25,
    "Capuchino" => 27.5,
    "Mocca" => 24,
    "Negro" => 15

);

foreach ($cafes as $cafe => $price) {
    echo "El cafe $cafe cuesta $$price USA. <br>";
    echo "<br>";
}