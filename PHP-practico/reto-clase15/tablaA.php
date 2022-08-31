<?php

$num = ($_REQUEST["canpro"]);

echo "<form action='./totales.php'>";

for ($i=0; $i < $num; $i++) { 
    echo "Introduce el valor de tu producto: " . "<input type='text' name='producto".$i."' id='prosucto".$i."'><br>";
}
echo "<br><button type='submit'>Sigiente.</button>";
echo "</form>";
?>