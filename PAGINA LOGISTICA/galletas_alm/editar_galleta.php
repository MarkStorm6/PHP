<?php

include('../articulos_config/conexion_articulos.php');
$conect = connection();


$id=$_POST["id"];
$descripcion_galleta = $_POST['descripcion_galleta'];
$precio_galleta = $_POST['precio_galleta'];
$fecha_galleta = $_POST['fecha_galleta'];
$stock_galleta = $_POST['stock_galleta'];
$proveedor_galleta = $_POST['proveedor_galleta'];

$sql="UPDATE galletas SET descripcion_galleta='$descripcion_galleta', precio_galleta='$precio_galleta',
 fecha_galleta='$fecha_galleta', stock_galleta='$stock_galleta', proveedor_galleta='$proveedor_galleta' WHERE id='$id'";
$query = mysqli_query($conect, $sql);

if($query){
    Header("Location: galletas_almacen.php");
}else{

}

?>