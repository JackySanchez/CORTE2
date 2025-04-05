<?php
require 'ejercicio4.php';

echo "=== PRUEBAS DE LA CLASE CAJA (CON MÉTODO DE COPIA) ===\n\n";

// Crear caja original
$original = new Caja(2.0, 3.0, 4.0);
echo "[Caja Original 2x3x4]\n";
echo "Volumen: " . $original->volumen() . "\n";
echo "Área: " . $original->areaTotal() . "\n\n";

//Copiar la caja
$copia = Caja::copiarCaja($original);
echo "[Caja Copiada]\n";
echo "Volumen: " . $copia->volumen() . " (Debe ser igual al original: 24)\n";
echo "Área: " . $copia->areaTotal() . " (Debe ser igual al original: 52)\n\n";
?>