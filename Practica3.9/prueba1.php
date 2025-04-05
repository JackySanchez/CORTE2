<?php
require 'ejercicio1.php'; // Asegúrate de que el archivo Caja.php esté en la misma carpeta

// Crear una caja de 2x3x4
$caja = new Caja(2.0, 3.0, 4.0);

// Prueba: Volumen ---
$volumenEsperado1 = 24.0; // 2 * 3 * 4 = 24
$volumenReal1 = $caja->volumen();

echo "Prueba 1 (Volumen 2x3x4): ";
if ($volumenReal1 == $volumenEsperado1) {
    echo "PASÓ (Volumen: $volumenReal1)\n";
} else {
    echo "FALLÓ. Esperado: $volumenEsperado1, Obtenido: $volumenReal1\n";
}
?>