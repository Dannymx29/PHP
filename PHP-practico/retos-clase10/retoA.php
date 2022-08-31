<?php

$estudiantes = array(
    "charly" => 3,
    "rober" => 5,
    "gerry" => 6,
    "isaac" => 8,
    "niko" => 12
);

function gabeta($estudiante){
    if ($estudiante <= 5){
        echo "el estudiante tiene $estudiante años le corresponde la gabeta inferior<br>";
    }elseif($estudiante >= 8){
        echo "el estudiante tiene $estudiante años le corresponde la gabeta suerior<br>";
    }elseif($estudiante <= 7){
        echo "el estudiante tiene $estudiante años le corresponde la gabeta intermedia<br>";
    }elseif($estudiante >= 6){
        echo "el estudiante tiene $estudiante años le corresponde la gabeta inferior<br>";
    }else{
        echo "Favor de checar el registro";
    }
}

foreach ($estudiantes as $estudiante){

    gabeta($estudiante);
    
}


function arbol(int $altura){
    $hoja = "";
    for ($i=0; $i < $altura; $i++) { 
        $hoja .= "*";
        echo $hoja."<br>";
    }
}
arbol(25);
