<?php

$users = ["pepito123", "Mr.michi", "RetaxMain"];

do {
    $user = readline("Por favor, indica tu nuevo nombre: ");
}while (in_array ($user, $users));
echo "<br>";