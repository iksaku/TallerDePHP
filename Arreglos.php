<?php

//$a = array();
$a = [];
$a[] = "Jorge";
$a[] = "Hiram";
$a[] = "David";
$a["Saludo"] = "Hola";
$a[] = "Liliana";

var_dump($a);

/*for ($i = 0; $i < count($a); ++$i) {
    echo $a[$i] . "\n";
}*/

/*foreach ($a as $v) {
    echo $v . "\n";
}*/


/**
 * shift -> Obtiene el primer elemento del arreglo y lo elimina.
 * pop   -> Obitene el ultimo elemento del arreglo y lo elimina.
 */
while (count($a) > 0) {
    //echo array_shift($a) . "\n";
    echo array_pop($a) . "\n";
}

var_dump($a);