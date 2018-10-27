<?php

echo "Comienza ciclo\n";

try {
    for ($i = 0; $i < 10; $i++) {
        if ($i == 5) {
            throw new Exception("El valor ha alcanzado 5");
        }
        echo $i . "\n";
    }
} catch (Exception $e) {
    echo "Se ha atrapado una excepcion. El mensaje es:\n" . $e->getMessage() . "\n";
}

echo "Ciclo terminado\n";