<?php
$cod_Producto = $_POST['c_prod'];
$seccion = $_POST['seccion'];
$nombreP = $_POST['nom_Producto'];
$paisP = $_POST['Pais'];
$importado = $_POST['importado'];
$precio = $_POST['precio'];

require('conexion.php');
$conexion = mysqli_connect($db_host, $db_usuario, $db_contra,$db_nombre );
if(mysqli_connect_errno()){
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}
mysqli_select_db($conexion,$db_nombre) or die("NO SE ENCUENTRA LA BASE DE DATOS");
$consulta = "INSERT INTO productos (id_producto, seccion, producto, origen, importado, precio) VALUES ('$cod_Producto', '$seccion', '$nombreP', '$paisP', '$importado',$precio);";
$resultado= mysqli_query($conexion,$consulta);
if ($resultado == FALSE){
    echo "ERROR NO SE PUEDE INSERTAR LOS DATOS";
}else {
    echo "LOS DATOS INSERTADOS FUERON" ."<br>";
    echo "CODIGO PRODUCTO: ". $cod_Producto."<br>";
    echo "SESSION PRODUCTO: " . $seccion."<br>";
    echo "NOMBRE PRODUCTO: ". $nombreP."<br>";
    echo "PAIS DE ORIGEN: ". $paisP."<br>";
    echo "ES IMPORTADO: ". $importado."<br>";
    echo "PRECIO DEL PRODUCTO: ". $precio;
}
?>