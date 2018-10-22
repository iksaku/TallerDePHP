<?php

$x = 40355;
/*$residuoX = $x % 2;
if ($residuoX === 0) {
    echo "La variable X es par.\n";
} else {
    echo "La variable X es impar.\n";
}*/

$y = 298572;
/*$residuoY = $y % 2;
if ($residuoY === 0) {
    echo "La variable Y es par.\n";
} else {
    echo "La variable Y es impar.\n";
}*/

/*function es_par(int $numero) {
    if ($numero % 2 === 0) {
        echo "El numero " . $numero . " es par.\n";
    } else {
        echo "El numero " . $numero . " es impar.\n";
    }
}*/

function es_par(int $numero): bool {
    return $numero % 2 === 0;
}

echo es_par($x);
echo es_par($y);
echo es_par(34346356);
echo es_par(436363);
echo es_par(85498);
echo es_par(6498);