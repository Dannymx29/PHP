<?php

$valorA = true;
$valorB = false;

$resultado = $valorA and $valorB;

var_dump ($resultado);

$resultado1 = $valorA && $valorB;

var_dump ($resultado1);

$valorAo = false;
$valorBo = true;

$resultado2 = $valorAo or $valorBo;

var_dump ($resultado2);

$resultado3 = $valorAo || $valorBo;

var_dump ($resultado3);

$valorAox = false;
$valorBox = false;

$resultado4 = $valorAox or $valorBox;

var_dump ($resultado4);

$resultado5 = $valorAox || $valorBox;

var_dump ($resultado5);

$valorAnot = false;

$resultado6 = !$valorAnot;

var_dump ($resultado6);
?>