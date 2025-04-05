<?php 
// Incluir la clase Persona
require_once 'persona.php'; 

// Crear un objeto de la clase Persona 
$persona1 = new Persona(); 

// Intentar acceder a las propiedades directamente 
echo "Accediendo directamente a las propiedades:<br>"; 
echo "Nombre: " . $persona1->nombre . "<br>"; // Si se puede acceder 
echo "DNI: " . $persona1->dni . "<br>"; // Ahora si se puede acceder porque es publica

// Intentar acceder a una propiedad privada (esto generaria un error si no usamos un getter)
// echo "Edad: " . $persona1->edad . "<br>"; // Esto generaria error

// Acceder a la edad usando el metodo getter
echo "Edad (usando getter): " . $persona1->getEdad() . "<br>";

// Modificar la edad usando el metodo setter
$persona1->setEdad(30);
echo "Nueva Edad: " . $persona1->getEdad() . "<br>";

// Modificar el DNI directamente (porque ahora es publico)
$persona1->dni = "98765432Y";
echo "Nuevo DNI: " . $persona1->dni . "<br>";

// Mostrar datos desde el metodo dentro de la clase 
echo "<br>Accediendo a las propiedades mediante el metodo mostrarDatos():<br>"; 
$persona1->mostrarDatos(); 
?>