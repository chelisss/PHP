<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
    
    <title>Formulario de contacto</title>
</head>
<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <input type="text" class="form_control" name="nombre" placeholder="Nombre: " value="" id="nombre">
            <input type="text" class="form_control" name="correo" placeholder="Correo: " value="" id="correo">

            <textarea name="mensaje" class="form_control" id="mensaje" placeholder="Mensaje:"></textarea>
            
            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores ?>
                </div>
            <?php elseif ($enviado): ?>
                <div class="alert success">
                    <p> Enviado correctamente </p>
                </div>
            <?php endif ?>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>