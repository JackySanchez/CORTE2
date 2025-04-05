<?php
// Esto es como una plantilla para crear perros
class Perrito //// Propiedades y métodos irán aquí
{
    // Cada perro tendrá:
    public $nombre;  // Un nombre
    public $raza;    // Una raza
    
    // Cómo hace sonidos:
    function ladrar_normal($sonido) //Devuelve el sonido tal cual se recibe
    {
        return $sonido;  // Así tal cual
    }
    
    function ladrar_fuerte($sonido) //Devuelve el sonido en MAYÚSCULAS
    {
        return strtoupper($sonido);  // En MAYÚSCULAS
    }
    
    function ladrar_suave($sonido) //Devuelve el sonido en minúsculas
    {
        return strtolower($sonido);  // en minúsculas
    }
}
// Vamos a crear 3 perritos
$perro1 = new Perrito();
$perro1->nombre = "Pincesa"; //Asignar Datos
$perro1->raza = "Chihuahua";

$perro2 = new Perrito();
$perro2->nombre = "Cuqui";
$perro2->raza = "Dalmata";

$perro3 = new Perrito();
$perro3->nombre = "Kiara";
$perro3->raza = "Pastor Aleman";

// Ahora los hacemos "hablar"
echo $perro1->nombre . " dice: " . $perro1->ladrar_normal("Guauuuuuu Guauuuuuu!") . "<br>";
echo $perro2->nombre . " dice: " . $perro2->ladrar_fuerte("Grrr..!  guau?") . "<br>";
echo $perro3->nombre . " dice: " . $perro3->ladrar_suave("Yip yip guauuuu guauuuuu") . "<br>";
?>

