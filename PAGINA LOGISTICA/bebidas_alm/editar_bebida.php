<?php

include('../articulos_config/conexion_articulos.php');
$conex = connection();


$id=$_POST["id"];
$descripcion_bebida = $_POST['descripcion_bebida'];
$precio_bebida = $_POST['precio_bebida'];
$fecha_bebida = $_POST['fecha_bebida'];
$stock_bebida = $_POST['stock_bebida'];
$proveedor_bebida = $_POST['proveedor_bebida'];

$sql="UPDATE bebidas SET descripcion_bebida='$descripcion_bebida', precio_bebida='$precio_bebida',
 fecha_bebida='$fecha_bebida', stock_bebida='$stock_bebida', proveedor_bebida='$proveedor_bebida' WHERE id='$id'";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: bebidas_almacen.php");
}else{

}

?>