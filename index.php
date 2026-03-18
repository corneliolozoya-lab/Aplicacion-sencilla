<?php
include "EstudianteIngenieria.php";
include "EstudianteSistemas.php";

// Crear objetos de clases derivadas
$estudiantes = [
    new EstudianteIngenieria("Juan Pérez", "A12345", "Ingeniería", "Industrial"),
    new EstudianteSistemas("María López", "B67890", "Sistemas", "Python")
];

echo "<h2>Lista de Estudiantes</h2>";

// Mostrar datos
foreach ($estudiantes as $estudiante) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>";
    echo $estudiante->mostrarDatos();
    echo "</div>";
}
?>
