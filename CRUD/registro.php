<?php
include("conexion.php");
$conexion = connection();

$id = null;
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$dni = $_POST['dni'];
$fecha = $_POST['fecha'];
$correo = $_POST['correo'];

if (!empty($nombres) && !empty($apellidos) && !empty($dni) && !empty($fecha) && !empty($correo)) {
    $sql = "INSERT INTO register (id, nombres, apellidos, dni, fecha, correo) VALUES ('$id','$nombres','$apellidos','$dni','$fecha','$correo')";
    $query = mysqli_query($conexion, $sql);

    if($query){
        Header("Location: index.php");
    }else{
        // Mostrar mensaje de error en caso de fallo en la consulta
        echo "Error al registrar los datos. Por favor, intenta nuevamente.";
    }
} else {
    // Mostrar mensaje de error si los campos no están llenos
    echo '<script>alert("Todos los campos son requeridos. Por favor, completa todos los campos.");</script>';
    echo '<script>window.location.href = "index.php";</script>';
}

?>