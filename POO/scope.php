<?php 
/**SCOPES
 * PUBLIC
 * Pueden ser accedidos desde cuaalqueir parte, ya sea dento o fuera de nuestra clase.
 * 
 * PROTECTED
 * Puedes ser accedidos dentro de la clase y otras clases que geredadron, pero no fuera de estas.
 * 
 * PRIVATE
 * Solo pueden ser accedidos desde dentrod e al calse en la quwe 
 * fueron creados. 
 * Es decir, que no podemos accceder a ellos desde otra clase que heredo y tampoco podemos acceder
 * desde fuera de las clases. 
 */



class Usuario {
    public $nombre;
    //protected $correo;
    protected $correo;


    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }


    public function mostrarInfo(){
        return $this->correo;
    }
}

class Miembro extends Usuario {
    public function mostrarCorreo(){
        return 'Este es el correo: '. $this->correo;
    }
}


$luis = new Miembro('Luis', 'correo@gmail.com');
echo $luis->mostrarCorreo();


?>