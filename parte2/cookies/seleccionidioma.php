<?php
if(isset($_COOKIE["sel_idioma"])){
    if($_COOKIE["sel_idioma"]=="sp"){
        header("Location: pag_español.php");
    }else if($_COOKIE["sel_idioma"]=="en"){
        header("Location: pag_ingles.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selección de Idioma</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <div class="titulo">
            <h1>SELECIONE UN IDIOMA PARA LA VISUALIZACION DEL CONTENIDO</h1>
        </div>
        <div class="imagenes">
            <div class="idioma">
                <a href="crearcookie.php?idioma=sp"><img src="img/español.jpg" alt="Español"></a>
            </div>
            <div class="idioma">
                <a href="crearcookie.php?idioma=en">
                <img src="img/ingles.jpg" alt="ingles">
                </a>
            </div>
        </div>
    </div>
</body>
</html>