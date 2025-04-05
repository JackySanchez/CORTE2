<?php
require 'ejercicio5.php';

echo "=== PRUEBAS DE LA CLASE CAJA (CON MÉTODOS DE ESCALADO) ===\n\n";

// Crear caja base
$base = new Caja(4.0, 5.0, 6.0);
echo "[Caja Base 4x5x6]\n";
echo "Volumen: " . $base->volumen() . " (120)\n";
echo "Área: " . $base->areaTotal() . " (148)\n\n";

// Test : Caja más grande
$grande = $base->cajaMasGrande();
echo "[Caja 25% más grande]\n";
echo "Dimensiones esperadas: 5x6.25x7.5\n";
echo "Ancho: " . $grande->getAncho() . "\n";
echo "Alto: " . $grande->getAlto() . "\n";
echo "Largo: " . $grande->getLargo() . "\n";
echo "Volumen: " . $grande->volumen() . " (234.375)\n";
echo "Área: " . $grande->areaTotal() . " (231.25)\n\n";
?>