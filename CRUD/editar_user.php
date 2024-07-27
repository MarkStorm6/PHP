<?php

include("conexion.php");
$conexion = connection();

$id=$_POST["id"];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];

$sql="UPDATE register SET nombres='$nombres', apellidos='$apellidos', dni='$dni', fecha='$fecha', correo='$correo' WHERE id='$id'";
$query = mysqli_query($conexion, $sql);

if($query){
    Header("Location: index.php");
}else{

}

?>