<?php

require_once("Objetos.php");

$venom = new Pelicula("Venom", "Accion", "B", "1 hora", 2018);
echo $venom->obtenerNombre() . "" . "\n";

 