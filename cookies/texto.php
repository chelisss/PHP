<?php

if (isset($_COOKIE['font-size'])) {
    $tamaño =  htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamaño = '15px';
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p {
            font-size:  <?php echo $tamaño; ?>;
        }
    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere a, iusto, ei
    us exercitationem possimus at saepe vitae laborum eaque laudantium odit 
    harum dolor tempora ullam eligendi quaerat repellendus non facilis vel 
    temporibus sapiente, ex nihil et consectetur? Libero officia molestias 
    possimus error culpa quam itaque soluta. Aliquam deleniti illo, reiciendis
     officia quod ducimus unde autem, quam obcaecati, ea repellendus sed!</p>
</body>
</html>