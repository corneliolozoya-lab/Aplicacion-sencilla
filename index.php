<?php
include "Estudiante.php";

// Instanciación de objetos
$estudiante1 = new Estudiante("Juan Pérez", "A12345", "Ingeniería");
$estudiante2 = new Estudiante("María López", "B67890", "Sistemas");

echo "<h2>Lista de Estudiantes</h2>";
echo $estudiante1->mostrarDatos();
echo $estudiante2->mostrarDatos();
?>
