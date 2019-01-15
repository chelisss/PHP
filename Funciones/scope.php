<?php
$numero = 10;


#Lo de afuera no puede ver lo de adentro de la función.
#Ni tampoco podemos acceder a una variable que está dentro de una función
function mostrar(){
    //echo $numero;
    $numero = 10;
    return $numero;
}

//mostrar($numero);
echo mostrar();
?>