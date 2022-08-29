<?php

function freddy (){

    $num_ale = rand(1,4);

    $frase_de_freddy = "";

    switch ($num_ale){

        case 1:
            $frase_de_freddy = "Nunca pares de aprender <br>";
        break;
        case 2:
            $frase_de_freddy = "Las empresas no son familia <br>";
        break;
        case 3:
            $frase_de_freddy = "La tecnologia es el futuro <br>";
        break;
        case 4:
            $frase_de_freddy = "AMO PHP <br>";
        break;
    }

    return $frase_de_freddy; //aqui le pides el resultado de la funcion.
}
echo freddy();