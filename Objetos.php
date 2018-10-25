<?php

class Pelicula {
    private $nombre;
    private $genero;
    private $clasificacion;
    private $duracion;
    private $añoDeLanzamiento;

    public function __construct($nombre, $genero, $clasificacion, $duracion, $añoDeLanzamiento) {
        $this->nombre = $nombre;
        $this->genero = $genero;
        $this->clasificacion = $clasificacion;
        $this->duracion = $duracion;
        $this->añoDeLanzamiento = $añoDeLanzamiento;
    }

    public function __toString() {
        return "Nombre: " . $this->obtenerNombre() . ", Clasificacion: " . $this->obtenerClasificacion();
    }

    public function obtenerNombre() {
        return $this->nombre;
    }

    public function obtenerClasificacion() {
        return $this->clasificacion;
    }

    public function cambiarClasificacion($nuevaClasificacion) {
        $this->clasificacion = $nuevaClasificacion;
    }
}

$iw = new Pelicula("Avengers: Infinity War", "Action", "B", "2 Horas", 2017);
echo $iw->obtenerNombre() . "\n";

echo $iw->obtenerClasificacion() . "\n";
$iw->cambiarClasificacion("B15") . "\n";
echo $iw->obtenerClasificacion() . "\n";


$tl = new Pelicula("Naruto: The Last", "Fantasy", "B", "1:30 Horas", 2015);
echo $tl->obtenerNombre() . "\n";

echo $tl . "\n";
