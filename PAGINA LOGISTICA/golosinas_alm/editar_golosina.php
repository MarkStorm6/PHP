<?php

include('../articulos_config/conexion_articulos.php');
$con = connection();


$id=$_POST["id"];
$descripcion_golosina = $_POST['descripcion_golosina'];
$precio_golosina = $_POST['precio_golosina'];
$fecha_golosina = $_POST['fecha_golosina'];
$stock_golosina = $_POST['stock_golosina'];
$proveedor_golosina = $_POST['proveedor_golosina'];

$sql="UPDATE golosinas SET descripcion_golosina='$descripcion_golosina', precio_golosina='$precio_golosina',
 fecha_golosina='$fecha_golosina', stock_golosina='$stock_golosina', proveedor_golosina='$proveedor_golosina' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: golosinas_almacen.php");
}else{

}

?>