<?php
class Automovil
{
public $color; //Almacena el color del automóvil.
public $marca; //Almacena la marca del automóvil.
public $numeroPuertas; //Almacena el número de puertas que tiene el automóvil.
private $esCamioneta; //Indica si el automóvil es una camioneta o no.
public $tipo; //Almacena el tipo de automóvil (por ejemplo, "deportivo" o "familiar").
public $numeroAsientos; // Almacena el número de asientos que tiene el automóvil.
// Constructor para inicializar atributos
public function _construct($color, $marca, $numeroPuertas, $esCamioneta, $tipo, $numeroAsientos ) 
{
$this->color = $color;
$this->marca = $marca;
$this->numeroPuertas = $numeroPuertas;
$this->esCamioneta = $esCamioneta;
$this->tipo = $tipo; // el tipo de automóvil
$this->numeroAsientos = $numeroAsientos;
}
// Método para verificar si es camioneta
public function esCamioneta()
{
return $this->esCamioneta ? "Si, es una camioneta": "No, no es una camioneta";
}
// Método para verificar si es deportivo o familiar
public function esDeportivo0Familiar()
{
return $this->tipo === "deportivo" ? "Es un automóvil deportivo": "Es un automóvil familiar";
}
// Método para mostrar información del automóvil
public function mostrarDatos()
{
return
"Marca: $this->marca<br>
Color: $this->color<br>
Número de Puertas: $this->numeroPuertas<br>
Número de Asientos: $this->numeroAsientos<br>
¿Es camioneta?:".  $this->esCamioneta(). "<br>
Tipo:" .  $this->esDeportivo0Familiar();
}
// Método para verificar si cambia de color
public function modificarColor ($nuevoColor)
{
$this->color = $nuevoColor; // Asignamos el nuevo color directamente
return "El color ha sido cambiado a: $this->color";
}
}
?>