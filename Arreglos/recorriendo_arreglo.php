<?php 
$meses = array(
    'Enero','Febrero','Marzo','Abril',
    'Mayo','Junio','Julio','Agosto',
    'Septiembre','Octubre','Noviembre','Diciembre'
);


for($i = 0 ; $i <= count($meses)-1; $i++){

    echo "Mes: " . $meses[$i] . '</br>';

}
?>