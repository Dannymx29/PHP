<?php

echo "<pre>";
print_r($_REQUEST);
echo"</pre>";
echo "<br>";

$arreglo = $_REQUEST;
echo "<pre>";
var_dump($arreglo);
echo"</pre>";
echo "<br>";

$w = 1;
foreach ($arreglo["producto"] as $v => $value){
    echo "El valor ".$w." es igual a ".$value."<br>";
    $w++;
}

function area($a,$b){
    $r = $a * $b;
    echo $r;
}

for ($i=0; $i < ((count($arreglo["producto"]))/2); $i++) { 
    echo area($_REQUEST("producto[$i]"),$_REQUEST("producto[($i + 1)]"));
}

