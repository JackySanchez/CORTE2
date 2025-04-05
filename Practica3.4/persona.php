<?php 
class Persona 
{ 
    // Propiedades con diferentes niveles de acceso 
    public $nombre = "Carlos"; 
    private $edad = 25; 
    public $dni = "12345678X"; // Cambio de protegido a publico

    // Metodo para acceder a las propiedades dentro de la clase 
    public function mostrarDatos() { 
        echo "Nombre: " . $this->nombre . "<br>"; 
        echo "Edad: " . $this->edad . "<br>"; 
        echo "DNI: " . $this->dni . "<br>"; 
    } 

    // Metodo para obtener la edad
    public function getEdad() {
        return $this->edad;
    }

    // Metodo para modificar la edad
    public function setEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }
}
?>