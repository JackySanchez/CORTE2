<?php
require 'ejercicio6.php';

echo "=== PRUEBAS DE LA CLASE CAJA (CON REPRESENTACIÓN DE CADENA) ===\n\n";

// Test : Creación básica y representación
$caja1 = new Caja(2.0, 3.0, 4.0);
echo "Test - Representación básica:\n";
echo $caja1 . "\n\n";
// Salida esperada: Caja [Ancho: 2.00, Alto: 3.00, Largo: 4.00, Volumen: 24.00, Área: 52.00]
?>