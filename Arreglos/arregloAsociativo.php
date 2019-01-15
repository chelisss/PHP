<?php 
$luis = array('telefono' => '5513323011','edad' => 23, 'apellido'=> 'Navarrete','pais'=> 'Mexico');

echo $luis['telefono'] . '<br>';
echo $luis['edad'] . '<br>';
echo $luis['apellido'] . '<br>';
echo $luis['pais'] . '<br>';


#Cambiando el valor de una celda:
$luis['edad']= 24;
echo 'La edad de Luis ahora es: ' . $luis['edad'];
?>