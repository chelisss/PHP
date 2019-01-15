<?php

//if(condicion){
    //Instrucciones
//}

$edad = 18;
$nombre = "Luis";
if($edad >= 18 or $nombre == "Luis"){
    echo '<h1> Bienvenido, ' .$nombre.' </h1>';
}

if ($edad < 18) {
    echo "<h1> No eres mayor de 18 años </h1>";
}

?>