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

    public function obtenerGenero() {
        return $this->genero;
    }

    public function obtenerClasificacion() {
        return $this->clasificacion;
    }

    public function cambiarClasificacion($nuevaClasificacion) {
        $this->clasificacion = $nuevaClasificacion;
    }

    public function obtenerDuracion() {
        return $this->duracion;
    }

    public function obtenerAño() {
        return $this->añoDeLanzamiento;
    }
}

class PeliculaDeTerror extends Pelicula {
    public function __construct($name, $clasificacion, $duracion, $añoDeLanzamiento) {
        parent::__construct($name, "Terror", $clasificacion, $duracion, $añoDeLanzamiento);
    }

    public function obtenerAño() {
        return "El terror no se crea ni se destruye... Pero salió en " . parent::obtenerAño();
    }
}

/*$iw = new Pelicula("Avengers: Infinity War", "Action", "B", "2 Horas", 2017);
echo $iw->obtenerNombre() . "\n";

echo $iw->obtenerClasificacion() . "\n";
$iw->cambiarClasificacion("B15") . "\n";
echo $iw->obtenerClasificacion() . "\n";*/


/*$tl = new Pelicula("Naruto: The Last", "Fantasy", "B", "1:30 Horas", 2015);
echo $tl->obtenerNombre() . "\n";
echo $tl . "\n";
echo $tl->obtenerAño() . "\n";*/

$ft = new PeliculaDeTerror("Viernes 13", "B15", "1 Hora y Media", 1980);
echo $ft->obtenerNombre() . "\n";
echo $ft->obtenerGenero() . "\n";
echo $ft->obtenerAño() . "\n";