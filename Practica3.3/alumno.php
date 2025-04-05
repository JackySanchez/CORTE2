<?php
class Alumno {
// Propiedades privadas
private $nombre;
private $apellidos;
private $numeroControl;
// Método Setter para asignar valores (Asigna un valor a la propiedad)
public function setNombre ($nombre) 
{
    $this->nombre = $nombre;}

public function setApellidos ($apellidos)
{
    $this->apellidos = $apellidos;}

public function setNumeroControl($numeroControl) {
    $this->numeroControl = $numeroControl;
}
// Método para asignar todos los datos en una sola instrucción
public function asignarDatos ($nombre, $apellidos, $numeroControl){
$this->nombre = $nombre;
$this->apellidos = $apellidos;
$this->numeroControl = $numeroControl;
}
// Método para mostrar los datos del alumno
public function mostrarDatos() {
echo "Nombre:" . $this->nombre. "<br>";
echo "Apellidos:" . $this->apellidos. "<br>";
echo "Número de Control: ". $this->numeroControl. "<br>";}

// Método para generar un correo electrónico basado en el nombre y número de control
public function generarCorreo(){
// Convertir el nombre a minúsculas y quitar espacios
$nombreMinusculas = strtolower($this->nombre); //Usa strtolower para convertir el nombre a minúsculas.
$nombreSinEspacios = str_replace('','', $nombreMinusculas); // Usa str_replace para eliminar los espacios del nombre.
// Tomar los últimos 4 dígitos del número de control
$ultimosCuatroDigitos = substr($this->numeroControl, -4); //Usa substr para obtener los últimos 4 caracteres del número de
// Crear el correo electrónico
$correo = $nombreSinEspacios. $ultimosCuatroDigitos. "@universidad.com";
return $correo;
}
}
?>