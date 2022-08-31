<?php

$nombre = "camila";
$apellido = "rojas";

echo $nombre . " " . $apellido . "<br><br>";

echo "funcion de concatenacion<br>";
//funcion para concatenar
function concatenar($nombre, $apellido){
    echo $nombre . " " . $apellido . "<br><br><br>";
}

concatenar("pedro", "perez");

echo "funcion de suma<br>";
//funcion para sumar numeros
function sumaNum($numeros){
    $suma = 0;
    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i];
    }
    echo "el resultado de la suma es: $suma<br><br><br>";
}
$numeros = array(1,2,3,4);
sumaNum($numeros);

echo "is_array<br>";
$nombres = array("Ana","Juan","Camila");
var_dump (is_array($nombres));
echo "<br>";
$nombre = "Camila";
var_dump (is_array($nombre));


?>