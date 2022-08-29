<?php

function obtener_hora(){
    
    return date("h:i:s A e");
}
echo "Hola puedes decirme que hora es: ";
echo "<br>";
echo "Claro la hora es: " . obtener_hora() . "<br>";