<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400" rel="stylesheet">

    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="contenedor">
        <h1 class="titulo">Iniciar Sesión</h1>
        <hr class='border'>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method='POST' class='formulario' name='login'>
            <div class="form-group">
                <i class='icono izquierda fa fa-user'></i><input type="text" name="usuario" class="usuario" placeholder= "Usuario">
            </div>

            <div class="form-group">
                <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder= "Contraseña">
                <i class="submit-btn fa fa-arrow-right"  onclick="login.submit()"></i>
            </div>

            <?php if(!empty($errores)):?>
                <div class="error">
                <ul>
                    <li><?php echo $errores; ?></li>
                </ul>
                </div>
            <?php endif;?>
        </form>



        <p class="texto-registrate">
            ¿ Aún no tienes cuenta ?
            <a href="registrate.php">Regístrate</a>
    </div>

</body>
