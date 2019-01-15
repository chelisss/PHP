<?php 

class Persona{
    public $edad;
    public $nombre;
    public $pais;

    public function mostrarInformación(){
        echo 'Hola Mundo';
    } 
}


//creando varible de referencia y objeto
$carlos = new Persona;
$carlos->nombre= 'Carlos Arturo';
$carlos->edad = 23;
$carlos->pais = 'México';

//$carlos->mostrarInformación();
echo $carlos->nombre .' tiene '. $carlos->edad .' años de edad';

$alejandro = new Persona;
$alejandro->nombre ='Luis Enrique';
$alejandro->edad = 24;
$alejandro->pais = 'Cuba';

?>
