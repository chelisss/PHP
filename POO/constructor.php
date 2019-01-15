<?php 

class Persona {

    public $nombre;
    public $edad;
    public $pais;


    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad .' y es de ' . $this->pais;
    }

    function __construct($nombre, $edad, $pais){
        $this->nombre= $nombre;
        $this->edad= $edad;
        $this->pais= $pais;
    }

}
$carlos = new Persona('Carlos', 23, 'Mexico');
// $carlos -> nombre = 'Carlos Arturo';
// $carlos -> edad = 23;
// $carlos -> pais = 'México';
$carlos -> mostrarInformacion();

echo '<br>';

$alejandra = new Persona('Alejandra', 22, 'España');
// $alejandra -> nombre = 'Alejandra';
// $alejandra -> edad = 22;
// $alejandra -> pais = 'México';
$alejandra -> mostrarInformacion();

?>