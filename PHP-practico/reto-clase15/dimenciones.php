<?php

$num = $_REQUEST["productos"];

echo "Vamos a ingregar un total de: ".$num . " productos.<br>";

echo "<form action='./orden.php'>";

for ($i=0; $i < $num; $i++) { 

    echo "<label for='ancho'>Indica el Ancho del producto ". ($i + 1)." en centimetros.</label>";
    echo " <input type='number' name='producto[$i]' id='ancho'><br>";
    echo " <label for='alto'>Indica el alto del producto ". ($i + 1)." en centimetros.</label>";
    echo "<input type='number' name='producto[($i + 1)]' id='alto'><br>";
}
echo "<br><button type='submit'>Sigiente.</button>";
echo "</form>";

?>