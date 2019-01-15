<?php 
function calcular_area_triangulo($base, $altura){
    $resultado = ($base * $altura)/2;
    return $resultado;
}

$area_triangulo = calcular_area_triangulo(4,2);
echo "El área de tu tirangulo es de $area_triangulo metros cuadrados"


?>