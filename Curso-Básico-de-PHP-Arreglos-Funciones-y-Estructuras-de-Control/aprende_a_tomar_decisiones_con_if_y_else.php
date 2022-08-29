<?php

$asientos_disponibles = 0;
$es_hijo_de_tom_holland = false;
$conoce_a_tony_stark = true;

if ($asientos_disponibles > 0){
    echo "puedes ver la pelicula de spider-man";
}else if ($es_hijo_de_tom_holland == true){
    echo "No te creo, pero puedes ver la pelicula";
}else if ($conoce_a_tony_stark == true){
    echo "Bueno, te creo, adelante";
}else{
    echo "Lo sentimos tendras que spoilearte";
};
?>