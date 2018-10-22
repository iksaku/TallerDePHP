<?php

/**
 * == Igualación en Valor
 * === Igualación en Valor y Tipo
 * != No igual en Valor
 * !== No igual en Valor y Tipo
 * > Mayor que
 * < Menor que
 * >= Mayor o Igual que
 * <= Menor o Igual que
 */

/*$x = 3;
$y = 3;

if (($x + $y) > 8) {
    echo "La suma es mayor a 8.\n";
}
elseif (($x + $y) === 8) {
    echo "La suma es igual a 8.\n";
}
elseif (($x + $y) === 7) {
    echo "La suma es igual a 7.\n";
}
else {
    echo "La suma es menor a 7.\n";
}*/

$n = 6;

/*if ($n === 0) {
    echo "Cero";
} elseif($n === 1) {
    echo "Uno";
} elseif($n === 2) {
    echo "Dos";
} elseif($n === 3) {
    echo "Tres";
}else {
    echo "Desconocido";
}*/

switch($n) {
    case 0:
        echo "Cero";
        break;
    case 1:
        echo "Uno";
        break;
    case 2:
        echo "Dos";
        break;
    case 3:
        echo "Tres";
        break;
    default:
        echo "Desconocido";
        break;
}

echo "\n";

