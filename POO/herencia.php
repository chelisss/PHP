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


class Estudiante extends Persona {
    //Con Programación Orientada a Objetos

    //debemos sobreescribir nuestros métodos. 
    function __construct($nombre, $edad, $pais, $carrera){
        parent::__construct($nombre, $edad, $pais); 
        $this->carrera = $carrera;
    }

    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad .', es de ' . $this->pais . ' y estudia ' . $this->carrera;
     }

    //SIn POO

    // public $nombre;
    // public $edad;
    // public $pais;
    // public $carrera;


    // public function mostrarInformacion(){
    //     echo $this->nombre . ' tiene ' . $this->edad .', es de ' . $this->pais . ' y estudia ' . $this->carrera;
    // }public function mostrarInformacion(){
    //     echo $this->nombre . ' tiene ' . $this->edad .', es de ' . $this->pais . ' y estudia ' . $this->carrera;
    // }

    // function __construct($nombre, $edad, $pais, $carrera){
    //     $this->nombre= $nombre;
    //     $this->edad= $edad;
    //     $this->pais= $pais;
    //     $this->carrera = $carrera;
    // }
}


class Trabajador extends Persona {
    function __construct($nombre, $edad, $pais, $trabajo){
        parent:: __construct($nombre, $edad, $pais);
        $this->trabajo = $trabajo;
    }
    public function mostrarInformacion(){
        echo $this->nombre . ' tiene ' . $this->edad .', es de ' . $this->pais . ' y su trabajo es ' . $this->trabajo;
    }
}

$luis = new Estudiante('Luis Enrique', 23, 'México', 'Ingeniería en Computación');
$luis->mostrarInformacion();

echo '<br>';

$diana = new Trabajador('Diana', 45, 'México', 'Desarrolladora');
$diana->mostrarInformacion();
?>