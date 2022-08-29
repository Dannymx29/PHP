<?php

function get_auto()

{
    $num_ram = rand(1,5);

    switch($num_ram)
    {
        case 1:
            echo "ferrari <br>";
        break;
        case 2:
            echo "mazda <br>";
        break;
        case 3:
            echo "cheyene <br>";
        break;
        default:
            echo "te toco bochito <br>";
    }
}

for ($i=0; $i < 20; $i++) { 
    get_auto();
}
