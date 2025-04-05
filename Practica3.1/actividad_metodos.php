<?php
class Calculadora
{
// Método de instancia para sumar public function sumar($a, $b)
public function sumar ($a, $b)
{
return $a + $b;
}
// Método de instancia para restar public function restar($a, $b)
public function restar ($a, $b)
{
return $a - $b;
}
// Método de instancia para multiplicar public function multiplicar ($a, $b)
public function multiplicar ($a, $b){
return $a * $b;
}
public function dividir($a, $b) {
if ($b == 0)
{
return "No se puede dividir por cero.";
}
return $a / $b;
}
// Método de clase (estático) para mostrar un mensaje
public static function mostrarMensaje()
{
return "<h2>Bienvenido a la Calculadora en PHP<h2>";
}
}
?>