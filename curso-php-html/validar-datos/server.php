<?php

$is_float = filter_var("Esto no es un float", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_int = filter_var("Esto no es un numero", FILTER_VALIDATE_INT);

$is_ip = filter_var("0.0.0", FILTER_VALIDATE_IP);

$is_url = filter_var("platzi.com", FILTER_VALIDATE_URL);

$is_email = filter_var("esto no es un email", FILTER_VALIDATE_EMAIL);

$is_floatV = filter_var("0.57", FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);

$is_intV = filter_var("45", FILTER_VALIDATE_INT);

$is_ipV = filter_var("127.0.0.1", FILTER_VALIDATE_IP);

$is_urlV = filter_var("http://platzi.com", FILTER_VALIDATE_URL);

$is_emailV = filter_var("MrMichi@michisancio.com", FILTER_VALIDATE_EMAIL);

echo "invalidas";
echo "<br>1 ";
var_dump($is_float);
echo "<br>2 ";
var_dump($is_int);
echo "<br>3 ";
var_dump($is_ip);
echo "<br>4 ";
var_dump($is_url);
echo "<br>5 ";
var_dump($is_email);
echo "<br>validas";
echo "<br>1 ";
var_dump($is_floatV);
echo "<br>2 ";
var_dump($is_intV);
echo "<br>3 ";
var_dump($is_ipV);
echo "<br>4 ";
var_dump($is_urlV);
echo "<br>5 ";
var_dump($is_emailV);