<?php
require 'ejercicio2.php';

echo "=== PRUEBAS DE LA CLASE CAJA ===\n\n";

//Creación y cálculos iniciales
$caja1 = new Caja(2.0, 3.0, 4.0);
echo "[Caja 2x3x4]\n";
echo "Volumen: " . $caja1->volumen() . " (Esperado: 24)\n";
echo "Área: " . $caja1->areaTotal() . " (Esperado: 52)\n\n";
?>