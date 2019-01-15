<?php
//Para quitar la cookie, solo debemos poner una fecha que ya pasó.
setcookie('font-size', '40px', time() + 60 * 60 * 24 * 365, '/');

//Una vez que la eliminamos, debemos comprobar en nuestro texto.php
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cookie Seteada</h1>
</body>
</html>
