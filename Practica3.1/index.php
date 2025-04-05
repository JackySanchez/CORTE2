<hr>
<?php
// Incluir la clase
require_once 'actividad_metodos.php';
// Llamar al método de clase (estático)
require_once 'conversor.php';
// Llamar al método de clase (estático)
echo Calculadora:: mostrarMensaje(). "<br>";
// Crear una instancia de la clase $miCalculadora = new Calculadora();
// Usar los métodos de instancia
echo "Suma de 8+4= " .$miCalculadora->sumar (8, 4) ."<br>"; 
echo "Restar de 5 + 6= ". $miCalculadora->restar (5, 6). "<br>"; 
echo "Multiplicación de 4 * 2=". $miCalculadora->multiplicar(4, 2) ."<br>"; 
echo "Division de 56/6=" .$miCalculadora->dividir (56, 8). "<br>";
// Probar el método de conversión
echo "Conversión de 25°C a Fahrenheit:".Conversor::celsiusFahrenheit (25) ."<br>";
?>
