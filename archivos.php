<?php

  // $resultado = file_exists('contenido.txt');
  // var_dump($resultado);
  //

//echo file_get_contents('contenido.txt');

//file_put_contents('contenido.txt', ' ¿Cómo anda joven?', FILE_APPEND);
//
// file_put_contents("contenido.txt", '');
// for ($i=1; $i <= 10; $i++) {
//   file_put_contents('contenido.txt', "$i \n", FILE_APPEND);
// }


$archivo = file('contenido.txt');
print_r($archivo);
?>
