<?php
require 'Automovil.php'; // Incluimos la clase Automovil

// Crear instancias de Automovil
$auto1 = new Automovil("Rojo", "Toyota", 4, false, "deportivo", 5);
$auto2 = new Automovil("Negro", "Ford", 2, true, "familiar", 4);
$auto3 = new Automovil("Azul", "Chevrolet", 4, false, "deportivo", 3);
$auto4 = new Automovil("Blanco", "Nissan", 5, true, "familiar", 4);
?>
<hr>
<?php
// Mostrar información de los autos
echo "<h2>Información del Automóvil 1</h2>";
echo $auto1->mostrarDatos();
// Modificar el color del automóvil
echo "<h3>El color del Automóvil modificado: </h3>";
echo $auto1->modificarColor("Verde"). "<br>";
?>
<hr>
<?php
// Mostrar información de los autos
echo "<h2>Información del Automóvil 2</h2>";
echo $auto2->mostrarDatos();
// Modificar el color del automóvil
echo "<h3>El color del Automóvil modificado: </h3>";
echo $auto2->modificarColor("Rosa"). "<br>";
?>
<hr>
<?php
// Mostrar información de los autos
echo "<h2>Información del Automóvil 3</h2>";
echo $auto3->mostrarDatos();
// Modificar el color del automóvil
echo "<h3>El color del Automóvil modificado: </h3>";
echo $auto3->modificarColor("Gris"). "<br>";
?>
<hr>
<?php
// Mostrar información de los autos
echo "<h2>Información del Automóvil 4</h2>";
echo $auto4->mostrarDatos();
// Modificar el color del automóvil echo "<h3>El color del Automóvil modificado: </h3>";
echo $auto4->modificarColor("Amarillo"). "<br>";
?>