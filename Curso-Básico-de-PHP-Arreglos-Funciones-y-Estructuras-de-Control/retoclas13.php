<?php

$num_tienda = (int) readline("Dame el numero de tienda: \n <br>");
$x = 0;
$y = 1;

for ($i = 2; $i <= $num_tienda ; $i++) { 

    $z = $y;
    $y += $x;
    $x = $z;
    echo "Las posibles formas de llegar a la tienda $i son: $y <br>\n";
}
