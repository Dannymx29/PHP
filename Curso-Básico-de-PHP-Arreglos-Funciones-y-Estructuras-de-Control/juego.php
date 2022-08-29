<?php

function clear(){
    if(PHP_OS === "WINNT"){
        system("cls");
    }else{
        system("clear");
    }
}

$possible_words = ["mercurio","venuz","tierra","marte","saturno","neptuno","urano","jupiter","pluton","namecusei","planetavegeta","elicium",];

define ("MAX_ATTEMPS", 6);

echo "¡Juego del ahorcado! <br><br>\n\n";

$choosen_word = $possible_words[rand(0,11)];
$choosen_word = strtolower($choosen_word);
$word_latters = strlen($choosen_word);
$discoverd_letters = str_pad("", $word_latters, "_");
$attemps = 0;

do{

echo "Palabra de $word_latters letras. \n\n";
echo $discoverd_letters . "\n\n";

//pedimos al usuario la palabra

$player_letter = readline ("Escribe una letra: ");
$player_letter = strtolower($player_letter);

if (str_contains($choosen_word, $player_letter)){
    //verificamos todas las ocurencias de la letra para remplazar
    $offser = 0;
    while(($letter_position = strpos($choosen_word, $player_letter, $offser)) !== false){

        $discoverd_letters[$letter_position] = $player_letter;
        $offser = $letter_position + 1;
    }
}else{
    clear();
    $attemps++;
    echo "Letra incorrecta. Te quedan: " . (MAX_ATTEMPS - $attemps) . " intentos\n\n";
    sleep(2);
}
clear();
}while ($attemps < MAX_ATTEMPS && $discoverd_letters != $choosen_word);
clear();
if ($attemps < MAX_ATTEMPS){
echo "Felicidaades adivinaste la palabra.\n\n";
}else{
    echo "Suerte para la proxima.\n\n";
}
echo "La palabra es: $choosen_word\n";
echo "Tu descubriste: $discoverd_letters\n";
echo "\n";