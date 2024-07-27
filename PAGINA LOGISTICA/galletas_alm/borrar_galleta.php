<?php

include('../articulos_config/conexion_articulos.php');
$conect = connection();

$id=$_GET["id"];

$sql="DELETE FROM galletas WHERE id='$id'";
$query = mysqli_query($conect, $sql);

if($query){
    Header("Location: galletas_almacen.php");
}else{

}

?>