<?php

function est_legeng($platzi_rank){
    if ($platzi_rank >= 20000){
        echo "<br>\n¡Eres un estudiante Legend!<br>\n";
    }else{
        echo "<br>\nLo sentimos, aun no eres el nivel legend<br>\n";
    }
}

do{
    $platzi_rank_user = (int) readline("<br>\nPor favor,indica tu platzi rank <br>\n");

    est_legeng ($platzi_rank_user);
}while(true);
