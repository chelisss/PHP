<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="recibe.php" method="post">

    <input type="text" placeholder = "Nombre: " name="nombre">
    <br>
    
    <label for="hombre">Hombre</label>
    <input type="radio" value="Hombre" name="sexo" id="hombre"/>

    <label for="mujer">Mujer</label>
    <input type="radio" value="mujer" name="sexo" id="mujer"/>

    <br>

    <select name="year" id="year">
        <option value="2000">2000</option>
        <option value="2001">2001</option>
        <option value="2002">2002</option>
    </select><br>

    <label for="terminos">¿Aceptas los términos y condiciones?</label>
    <input type="checkbox" name="terminos" id="terminos" value="Acepto">
    <br>


    <input type="submit" value="Enviar"/>
    </form>
</body>
</html>