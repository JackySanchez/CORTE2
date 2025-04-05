<?php 
class Caja 
{ 
//propiedades 
private float $ancho; 
private float $alto; 
private float $largo; 
/** 
* Summary of __construct 
* @param float $ancho 
* @param float $alto 
* @param float $largo 
*/ 
public function __construct(float $ancho, float $alto,float $largo) { $this->ancho = $ancho; 
$this->alto = $alto; 
$this->largo = $largo; 
} 
/**  
* funcion para calcular el volumen de la caja 
* @return float 
*/
public function volumen(): float { 
return $this->ancho * $this->alto * $this->largo; 
} 
/** 
* funcion para calcular el area total de la caja 
* @return float 
*/ 
public function areaTotal(): float { 
return 2 * ( 
($this->ancho * $this->alto) + 
($this->ancho * $this->largo) + 
($this->alto * $this->largo) 
); 
} 
} 
?>