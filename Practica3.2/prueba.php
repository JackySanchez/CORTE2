<?php
// Incluir la clase Operaciones 
require_once 'operaciones.php';
// Crear un objeto de la clase Operaciones 
$operacion = new Operaciones();
// Llamar al método sin parámetros (suma)
echo "Suma sin parámetros (usando propiedades de la clase)= " . $operacion->sumarSinParametros().
"<br>";
// Llamar al método con parámetros (suma)
echo "Suma con parámetros (12 + 25)= " . $operacion->sumarConParametros (12, 25). "<br>";
// Llamar al método sin parámetros (multiplicacion)
echo "Multiplicacion sin parámetros (usando propiedades de la clase)= " . $operacion->multiplicarSinParametros().
"<br>"; 
// Llamar al método con parámetros (multiplicacion)  
echo "Multiplicacion con parámetros (10 * 45)= ". $operacion->multiplicarConParametros (10, 45). "<br>";
?>S