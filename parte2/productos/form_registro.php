<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1 class="titulo">Gestion de Productos</h1>
    <div class="content">
        <form action="insertar_producto.php" method="get" class="form-reg">
            <div>
                <h1 class="titulo_form"> Agregar Producto</h1>
            </div>
            <div class="form_row">
                <label> Codigo de Producto</label>
                <input type="text" name="c_prod" id="c_prod">
            </div>
            <div class="form_row">
                <label> Seccion</label>
                <input type="text" name="seccion" id="seccion">
            </div>
            <div class="form_row">
                <label> nombre Producto</label>
                <input type="text" name="codigo" >
            </div>
            <div class="form_row">
                <label> Pais Origen</label>
                <input type="text" name="codigo" >
            </div>
            <div class="form_row">
                <label>El Producto es Importado</label>
                <select name="importado" id="importado">
                    <option> VERDADERO</option>
                    <option>FALSO</option>
                </select>
            </div>
            <div class="form_row">
                <label>Precio</label>
                <input type="num" name="" >
            </div>
            <div class="form_row">
                <label> enviar</label>
                <input type="submit" name="codigo" >
            </div>
            <div class="form_row">
                <label> Resetear formulario</label>
                <input type="reset" name="codigo" >
            </div>
        </form>
    </div>
</body>
</html>