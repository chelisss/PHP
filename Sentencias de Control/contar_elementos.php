<?php 
$meses= array(
    'Enero','Febrero','Marzo',
    'Abril','Mayo','Junio',
    'Julio','Agosto','Septiembre',
    'Octubre','Noviembre','Diciembre'
);

#Count nos permite saber la cantidad de elemntos del arreglo
//echo count($meses);

$ultimo_mes = count($meses)-1;
echo $meses[$ultimo_mes];
?>