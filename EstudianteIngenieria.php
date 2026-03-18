<?php
include "Estudiante.php";

// Clase derivada
class EstudianteIngenieria extends Estudiante {

    private $especialidad;

    public function __construct($nombre, $matricula, $carrera, $especialidad) {
        parent::__construct($nombre, $matricula, $carrera);
        $this->especialidad = $especialidad;
    }

    // Sobrescritura del método
    public function mostrarDatos() {
        return parent::mostrarDatos() .
               "Especialidad: {$this->especialidad} <br><br>";
    }
}
?>
