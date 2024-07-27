<?php

include("conection.php");
$conection = connection();

$id=$_POST["id"];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];

$sql="UPDATE register SET nombres='$nombres', apellidos='$apellidos', dni='$dni', fecha='$fecha', correo='$correo' WHERE id='$id'";
$query = mysqli_query($conection, $sql);

if($query){
    Header("Location: usuarios.php");
}else{

}

?>