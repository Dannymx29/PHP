<?php

if ( isset($_POST["nombre"]) && !empty($_POST["nombre"]) ) {
    echo "Hola " . $_POST["nombre"];
}else{
    echo "No mandaste nada";
}
echo "<br>";
if ( isset($_POST["form"])){
    echo "Todo el formulaio se envio";
}else{
    echo "No se envio nada";
}