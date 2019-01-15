<?php 
//Static nos permite acceder a propiedad o métodos sin crear una instancia


class Persona {
    public static  $dia = '7 de septiembre';
    
    public static function saludo($nombre = null){
        if($nombre){
            return "Hola, buen día, $nombre";
        }
        else{
            return 'Hola, buen día';
        }
    }
}

$carlos = new Persona;
//echo $carlos->dia; //No podemos acceder asi solamente. 

echo $carlos->saludo('Carlos');
echo '<br/>';
//echo Persona::saludo();

?>