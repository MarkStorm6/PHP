<?php

include('../articulos_config/conexion_articulos.php');
$con = connection();

$id=$_GET["id"];

$sql="DELETE FROM golosinas WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: golosinas_almacen.php");
}else{

}

?>