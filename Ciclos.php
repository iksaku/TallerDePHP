<?php

/**
 * x = x + 1
 * x += 1
 * x++
 * ++x
 */

 /**
  * n = x
  * x += 1
  *         n = x++
  **********************************
  * x += 1
  * n = x
  *         n = ++x
  */


// Forma iterativa
/*for ($i = 0; $i <= 10; ++$i) {
    echo $i . "\n";
}*/

// Forma recursiva
/*function contar($i, $limite) {
    echo ++$i . "\n";
    if ($i <= $limite) {
        contar($i, $limite);
    }
}

contar(0, 10);*/


/*$x = $y = 0;
echo $x . " | " . $y . "\n";
echo $x++ . " | " . ++$y . "\n";
echo $x . " | " . $y . "\n";*/

/*function fibonacci($i) {
    if ($i <= 0) return 0;
    else if ($i == 1) return 1;
    
    return fibonacci($i - 1) + fibonacci($i - 2);
}

echo fibonacci(0) . " - " . fibonacci(1) . " - " . fibonacci(2) . " - " . fibonacci(3) . "\n";
echo fibonacci(8) . "\n";*/


/*$i = 0;
while ($i <= 10) {
    echo $i++ . "\n";
}

$i = 0;
do {
    echo $i . "\n";
    $i++;
} while($i <= 10);*/

$camino = ["| |", "| |", "|-|", "| |", "| |", "| |"];

for($i = 0; $i < count($camino); ++$i) {
    echo $camino[$i] . "\n";
    if ($camino[$i] == "| |")
        continue;
    else
        break;
}

for ($i = 1; $i < 50; $i += 2) {
    if ($i % 3 !== 0) continue;
    echo $i . " es multiplo de 3 :D\n";
}