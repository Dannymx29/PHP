<?php

for ($i = 0 ; $i < 10; $i++ ){
    echo "estamos en la interacion: $i <br>";
}

for ($i = 10 ; $i > 0; $i-- ){
    echo "estamos en la interacion: $i <br>";
}

for ($i = 0, $j = 0 ; $i < 10; $i++, $j += 2){
    echo "i = $i , j = $j <br>";
}
