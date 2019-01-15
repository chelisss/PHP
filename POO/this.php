<?php 

class Persona {

    public $nombre;
    public $edad;
    public $pais;


    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad .' y es de ' . $this->pais;
    }
}
$carlos = new Persona;
$carlos -> nombre = 'Luis Enrique';
$carlos -> edad = 23;
$carlos -> pais = 'México';
$carlos -> mostrarInformacion();

echo '<br>';

$alejandra = new Persona;
$alejandra -> nombre = 'Alejandra';
$alejandra -> edad = 22;
$alejandra -> pais = 'México';
$alejandra -> mostrarInformacion();

?>