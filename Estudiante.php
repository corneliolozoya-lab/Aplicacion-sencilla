<?php
// Clase base Estudiante
class Estudiante {

    // Atributos protegidos para permitir herencia
    protected $nombre;
    protected $matricula;
    protected $carrera;

    // Constructor
    public function __construct($nombre, $matricula, $carrera) {
        $this->nombre = $nombre;
        $this->matricula = $matricula;
        $this->carrera = $carrera;
    }

    // Método para mostrar datos
    public function mostrarDatos() {
        return "Nombre: {$this->nombre} <br>
                Matrícula: {$this->matricula} <br>
                Carrera: {$this->carrera} <br>";
    }
}
?>
    // Método para mostrar información
    public function mostrarDatos() {
        return "Nombre: $this->nombre <br>
                Matrícula: $this->matricula <br>
                Carrera: $this->carrera <br><br>";
    }
}
?>
