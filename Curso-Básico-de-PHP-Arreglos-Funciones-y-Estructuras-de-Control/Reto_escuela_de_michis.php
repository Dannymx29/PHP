<?php

$michis = 
[
    [
            "Nombre" => "Garfiel",
            "ocupacion" => "dev",
            "color" => "naranja",
            "comida" => [
                                "gusta" => "lasaña,atun",
                                "nogusta" => "picadillo"
                            ]
        ],
    [
            "Nombre" => "Felix",
            "ocupacion" => "productor",
            "color" => "negro",
            "comida" => [
                                "gusta" => "leche,atun",
                                "nogusta" => "vegetales"
                            ] 
        ],
    [
            "Nombre" => "tom",
            "ocupacion" => "estudiante",
            "color" => "gris",
            "comida" => [
                                "gusta" => "lasaña,leche",
                                "nogusta" => "brocoli"
                            ] 
        ]
];

//esto se hace por el nivel de arreglos es mas grande para poder llegar a el. con esto identificamos el usuario en el arreglo principal.
$garfiel = $michis[0]; 
$felix = $michis[1];
$tom = $michis[2];

//aqui logramos tener los distintos campos 
echo "Las comidas favoritas de garfiel son: " . $garfiel["comida"]["gusta"];
echo "<br>";
echo "Las comidas que no le gustan a garfiel son: " . $garfiel["comida"]["nogusta"];
echo "<br>";
echo "el color de garfiel es: " . $garfiel["color"];
echo "<br>";
echo "el gato garfiel se dedica a: " . $garfiel["ocupacion"];
echo "<br>";

echo "Las comidas favoritas de felix son: " . $felix["comida"]["gusta"];
echo "<br>";
echo "Las comidas que no le gustan a felix son: " . $felix["comida"]["nogusta"];
echo "<br>";
echo "el color de felix es: " . $felix["color"];
echo "<br>";
echo "el gato felix se dedica a: " . $felix["ocupacion"];
echo "<br>";

echo "Las comidas favoritas de tom son: " . $tom["comida"]["gusta"];
echo "<br>";
echo "Las comidas que no le gustan a tom son: " . $tom["comida"]["nogusta"];
echo "<br>";
echo "el color de tom es: " . $tom["color"];
echo "<br>";
echo "el gato tom se dedica a: " . $tom["ocupacion"];
echo "<br>";