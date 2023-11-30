<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="stylesheet" href="style/estilosform.css">
</head>
<body>
<h4>ACCESO AL SISTEMA</h4>
<div>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label>Usuario:</label>
        <input name="correo" type="email" require>
        <label>Contraseña:</label>
        <input name="password" type="password" require><br><br>
        <input type="checkbox" name="recordar"><br>
        <label> Recordarme en este equipo</label>
        <input type="submit" name="enviar" value="ENVIAR">
    </form>
</div>
</body>
</html>