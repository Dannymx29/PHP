<?php

function suma($a, $b){
    echo "<br>La suma de $a mas $b es: " . $a + $b . "<br>";
}

suma (7,5);
suma (8,9);
suma (5,6);
suma (7,3);

//valores por defecto por si el usuario no lo asigna
function suma2($a = 1, $b = 1){
    echo "<br>La suma de $a mas $b es: " . $a + $b . "<br>";
}

suma2 (0,2);

//este es un metodo para concatenar los datos de un array

$arreglo1 = [3, 2, 1];
$arreglo2 = [6, 5, 4];

$resultado = [...$arreglo1, ...$arreglo2];

echo  "<br>";
print_r($resultado);
echo  "<br>";

//se usa array impaquin (...$nombre del arreglo) 
function suma3($a, $b){
    echo "<br>La suma de $a mas $b es: " . $a + $b . "<br>";
}
$numeros = [6,9];
$numeros2 = [70,86];
$numeros3 = [575,42];

suma3(...$numeros);
suma3(...$numeros2);
suma3(...$numeros3);

//suma infinita

function suma_inf(...$param){

    $sum4 = 0;

    foreach($param as $num){
        $sum4 += $num;
    }
    echo "<br>El resultadocde la suma es: $sum4 <br>";

}

suma_inf(1, 2);
suma_inf (1, 2, 3);
suma_inf (100, 40, 2, 9, 3);