<?php
// Clase Estudiante
class Estudiante {

    // Atributos
    private $nombre;
    private $matricula;
    private $carrera;

    // Constructor
    public function __construct($nombre, $matricula, $carrera) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
    }

    // Método para mostrar información
    public function mostrarDatos() {
        return "Nombre: $this->nombre <br>
                Matrícula: $this->matricula <br>
                Carrera: $this->carrera <br><br>";
    }
}
?>
