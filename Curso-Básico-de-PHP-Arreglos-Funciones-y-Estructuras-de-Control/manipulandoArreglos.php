<?php

$edades = [18, 22, 40,34];

//count cuentavalores

echo count($edades);
echo "<br>";


//array_push agrega valores

array_push($edades,13);
echo "<br>";
var_dump($edades);
echo "<br>";

//array_push para validar si es un arreglo

$esto_no_es_array = "";
echo "<br>";
var_dump(is_array ($esto_no_es_array));
echo "<br>";
var_dump(is_array ($edades));
echo "<br>";


//explode convierte un string en un arreglo
echo "<br>";
$lista_de_frutas = "fresa, cereza,manzana";
$lista_de_frutas_array = explode(",",$lista_de_frutas);
var_dump($lista_de_frutas_array);

echo "<br>";

//implode convierte un string en un arreglo
echo "<br>";
$lista_de_frutas_array2 = ["fresa", "cereza","manzana"];
$lista_de_frutas2 = implode(", ",$lista_de_frutas_array2);
var_dump($lista_de_frutas2);

echo "<br>";

