<?php
//se modifica el arreglo original
$pre_caf = [18, 29, 16, 48, 54];

usort($pre_caf, function($a, $b){
    return ($a <=> $b);
});

print_r($pre_caf);
echo "<br>";