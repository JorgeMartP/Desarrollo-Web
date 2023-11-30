<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="login-box">
        <h1>Registrate Aqui</h1>
        <hr>
        <form action="validacion_contraseña.php" id="myform" class="form-registre" role="form" method="POTS" autocomplete="off">
            <div id="signupalert" style="display:none" class="alert alert-danger">
                <p>Error:</p>
                <span></span>
            </div>
            <div class="con1">
                <div class="con2">
                    <div class="divicion1">
                        <div class="form-row">
                            <label for="FirstName">Nombre</label>
                            <input type="text" name="nombre" placehorder="Nombres" requiere>
                        </div>
                        <div class="form-row">
                            <label for="Apellido">Apellido</label>
                            <input type="text" name="nombre" placehorder="Nombres" requiere>
                        </div>
                        <div class="form-row" name="tipodocumento">
                            <label for="FirstName">Nombre</label>
                            <input type="text" name="nombre" placehorder="Nombres" requiere>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>