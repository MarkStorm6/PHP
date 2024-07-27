<?php

include('../articulos_config/conexion_articulos.php');
$conex = connection();

$id=$_GET["id"];

$sql="DELETE FROM bebidas WHERE id='$id'";
$query = mysqli_query($conex, $sql);

if($query){
    Header("Location: bebidas_almacen.php");
}else{

}

?>