<?php

$palabras = array("sol", "luna", "cielo", "luz", "estrella", "lluvia");

for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra".$i] == $palabras[$i]){
        echo "La palabra ingresada es correcta.<br>";
    }else{
        echo "la palabra es incorrecta, la palabra correcta es: " . $palabras[$i] . ".<br>"; 
    }
}


?>