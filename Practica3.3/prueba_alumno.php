<?php
// Incluir la clase Alumno
require_once 'alumnos.php';
// Crear un objeto de la clase Alumno
$alumno1 = new Alumno();
// Asignar valores usando los métodos setters
$alumno1->setNombre("Jacqueline");
$alumno1->setApellidos ("Sanchez Gonzalez");
$alumno1->setNumeroControl("242310048");
// Mostrar los datos del alumno
$alumno1->mostrarDatos();
// Crear otro objeto de la clase Alumno
$alumno2 = new Alumno();
// Asignar valores usando el método asignarDatos
$alumno2->asignarDatos ("Cristina", "Gonzalez Rodriguez", "242317845");
// Mostrar los datos del segundo alumno
$alumno2->mostrarDatos();
// Generar y mostrar el correo electrónico del segundo alumno 
echo "Correo Electrónico:". $alumno2->generarCorreo() . "<br>";
?>