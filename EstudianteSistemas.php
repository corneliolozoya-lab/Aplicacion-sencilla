<?php
include "Estudiante.php";

// Clase derivada
class EstudianteSistemas extends Estudiante {

    private $lenguajeFavorito;

    public function __construct($nombre, $matricula, $carrera, $lenguajeFavorito) {
        parent::__construct($nombre, $matricula, $carrera);
        $this->lenguajeFavorito = $lenguajeFavorito;
    }

    // Sobrescritura del método
    public function mostrarDatos() {
        return parent::mostrarDatos() .
               "Lenguaje Favorito: {$this->lenguajeFavorito} <br><br>";
    }
}
?>
