<?php

#Primera forma de crear arreglo
$semana = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sábado','Domingo');
$semana[10] = 'Luis';

#Segunda forma de crear arreglo
$arreglo = ['Lunes','Martes','Meircoles','Jueves','Viernes','Sábado','Domingo'];
echo $arreglo[1]."<br>";

# Podemos usar cualqueir tipo de valor
$MuchasValores = array('CAdena de texto', 1, array('asd', 123), true);
echo $MuchasValores[1];

echo '<br>' . $semana[0] . '<br>';
echo $semana[1] . '<br/>';
echo $semana[2] . '<br/>';
echo $semana[3] . '<br/>';
echo $semana[4] . '<br/>';
echo $semana[5] . '<br/>';
echo $semana[6] . '<br/>';

?>