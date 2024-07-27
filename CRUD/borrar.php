<?php

include("conexion.php");
$conexion = connection();

$id=$_GET["id"];

$sql="DELETE FROM register WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>