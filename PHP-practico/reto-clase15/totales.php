<?php

$suma = 0;
foreach ($_REQUEST as $value){
    $descuento = ($value * 0.65 );
    $suma += $descuento;
    echo "El producto tiene un valor de $value y con el descuento de 35% debes pagar: ".$descuento. "<br>";
}
echo "el total a pagar es $suma";