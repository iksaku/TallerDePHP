<?php

$nombre = "Jorge";
$edad = 19;

echo $nombre . " " . $edad . "\n";
//echo "$nombre $edad\n";

/*
    Comentario
    De
    Muchas
    Lineas
*/

echo "Suma: " . (2 + 3) . "\n";


/**
 * Operadociones Aritmeticas
 * + - * /
 * Residuo: %
 */
$x = 2;
$y = 3;
echo $x . " + " . $y . " = " . ($x + $y) . "\n";
echo $x . " - " . $y . " = " . ($x - $y) . "\n";

$x += 8; // $x = $x + 8
echo $x . " * " . $y . " = " . ($x * $y) . "\n";
echo $x . " / " . $y . " = " . ($x / $y) . "\n";

echo "El residuo de " . $x . " / " . $y . " = " . ($x % $y) . "\n";