<?php
require 'ejercicio3.php';

echo "=== PRUEBAS DE LA CLASE CAJA (VERSIÓN MEJORADA) ===\n\n";

// Test : Creación y cálculos básicos
$caja = new Caja(2.0, 3.0, 4.0);
echo "[Caja 2x3x4]\n";
echo "Volumen: " . $caja->volumen() . " (Esperado: 24)\n";
echo "Área Total: " . $caja->areaTotal() . " (Esperado: 52)\n\n";
?>