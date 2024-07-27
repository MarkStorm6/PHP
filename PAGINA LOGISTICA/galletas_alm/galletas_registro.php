<?php
include('../articulos_config/conexion_articulos.php');
$conect = connection();

$id = null;
$descripcion_galleta = $_POST['descripcion_galleta'];
$precio_galleta = $_POST['precio_galleta'];
$fecha_galleta = $_POST['fecha_galleta'];
$stock_galleta = $_POST['stock_galleta'];
$proveedor_galleta = $_POST['proveedor_galleta'];

if (!empty($descripcion_galleta) && !empty($precio_galleta) && !empty($fecha_galleta) && !empty($stock_galleta) && !empty($proveedor_galleta)) {
    $sql = "INSERT INTO galletas (id, descripcion_galleta, precio_galleta, fecha_galleta, stock_galleta, proveedor_galleta) VALUES ('$id','$descripcion_galleta','$precio_galleta','$fecha_galleta','$stock_galleta','$proveedor_galleta')";
    $query = mysqli_query($conect, $sql);

    if($query){
        Header("Location: galletas_almacen.php");
    }else{
        // Mostrar mensaje de error en caso de fallo en la consulta
        echo "Error al registrar los datos. Por favor, intenta nuevamente.";
    }
} else {
    // Mostrar mensaje de error si los campos no están llenos
    echo '<script>alert("Todos los campos son requeridos. Por favor, completa todos los campos.");</script>';
    echo '<script>window.location.href = "galletas_almacen.php";</script>';
}

?>