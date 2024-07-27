<?php
include('conexion.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta para eliminar el usuario con el ID especificado
    $sql = "DELETE FROM users WHERE id = $id";
    $query = mysqli_query($conexion, $sql);

    // Redirige de vuelta a la página de usuarios después de eliminar
    header("Location: ../pagina.php");
    exit();
}
?>