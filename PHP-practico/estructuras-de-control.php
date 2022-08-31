<?php

//if-else
$A = 10;
    echo "if-else<br>";
    if ($A = 10){
        echo "El valor de a es igual a 10<br>";
    }else{
        echo "no es un 10<br>";
    }

//while y do-while

$w = 0;
echo "while<br>";
while ($w <= 10){
    echo "vamos en la interacion $w <br>";
    $w++;
}

$dw = 0;
echo "do-while<br>";

do{
    echo "vamos en la interacion $dw<br>";
    $dw++;
}while($dw <= 10);

//for y foreach
echo "for<br>";
$arr = array(1,2,3,4);
for ($i=0; $i <4 ; $i++) { 
    echo "$arr[$i]<br>";
}

echo "foreach<br>";
$arra = array(1,2,3,4);
foreach($arra as $value){
    echo "$value<br>";
}

//swich

$valorAs = 2;
switch($valorAs){
    case 1:
        echo "El valor es 1";
    break;
    case 2:
        echo "El valor es 2";
    break;
    case 3:
        echo "El valor es 3";
    break;
    default:
        echo "no es ninguno delos valores predeterminados";
    break;
}
?>