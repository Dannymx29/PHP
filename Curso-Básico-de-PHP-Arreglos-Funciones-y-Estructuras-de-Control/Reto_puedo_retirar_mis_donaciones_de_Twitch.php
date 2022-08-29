<?php

$efectivo = readline("Cuanto dinero en dolares tienes en tu cuenta de Twitch: ");

if ($efectivo >= 100)
{
    echo "Puedes retirar efectivo.";
}else{
    echo "No puedes retirar efectivo.";
}