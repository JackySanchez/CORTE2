<?php
class Caja {
    // Propiedades 
    private float $ancho; 
    private float $alto; 
    private float $largo; 

    /** 
     * Constructor
     * @param float $ancho 
     * @param float $alto 
     * @param float $largo 
     */ 
    public function __construct(float $ancho, float $alto, float $largo) { 
        $this->ancho = $ancho; 
        $this->alto = $alto; 
        $this->largo = $largo; 
    } 

    /**  
     * Calcula el volumen de la caja 
     * @return float 
     */
    public function volumen(): float { 
        return $this->ancho * $this->alto * $this->largo; 
    } 

    /** 
     * Calcula el área total de la caja 
     * @return float 
     */ 
    public function areaTotal(): float { 
        return 2 * ( 
            ($this->ancho * $this->alto) + 
            ($this->ancho * $this->largo) + 
            ($this->alto * $this->largo) 
        ); 
    } 

    // --- Getters y Setters ---
    public function getAncho(): float { 
        return $this->ancho; 
    } 

    public function setAncho(float $ancho): void { 
        $this->ancho = $ancho; 
    } 

    public function getAlto(): float { 
        return $this->alto; 
    } 

    public function setAlto(float $alto): void { 
        $this->alto = $alto; 
    } 

    public function getLargo(): float { 
        return $this->largo; 
    } 

    public function setLargo(float $largo): void { 
        $this->largo = $largo; 
    }
}
?>