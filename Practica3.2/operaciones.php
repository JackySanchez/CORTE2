<?php
class Operaciones
{
// Propiedades privadas
private $num1 = 8;
private $num2 = 15;
// Método sin parámetros: usa las propiedades de la clase (suma)
public function sumarSinParametros() {
return $this->num1 + $this->num2;
}
// Método con parámetros: recibe valores en la llamada (suma)
public function sumarConParametros ($a, $b) {
return $a + $b;
}
// Método sin parámetros: usa las propiedades de la clase (multiplicacion)
public function multiplicarSinParametros() {
return $this->num1 * $this->num2;
}
// Método con parámetros: recibe valores en la llamada (multiplicacion)
public function multiplicarConParametros ($a, $b) {
return $a * $b;
}
}
?>