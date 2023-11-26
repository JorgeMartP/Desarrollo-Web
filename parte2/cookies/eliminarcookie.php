<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar cookie</title>
</head>
<body>
    <?php
    setcookie("sel_idioma", "LOS DATOS DE LA COOKIE", time()-1);
    ?>
</body>
</html>