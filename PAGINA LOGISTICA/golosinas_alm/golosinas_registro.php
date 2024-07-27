<?php
include('../articulos_config/conexion_articulos.php');
$con = connection();

$id = null;
$descripcion_golosina = $_POST['descripcion_golosina'];
$precio_golosina = $_POST['precio_golosina'];
$fecha_golosina = $_POST['fecha_golosina'];
$stock_golosina = $_POST['stock_golosina'];
$proveedor_golosina = $_POST['proveedor_golosina'];

if (!empty($descripcion_golosina) && !empty($precio_golosina) && !empty($fecha_golosina) && !empty($stock_golosina) && !empty($proveedor_golosina)) {
    $sql = "INSERT INTO golosinas (id, descripcion_golosina, precio_golosina, fecha_golosina, stock_golosina, proveedor_golosina) VALUES ('$id','$descripcion_golosina','$precio_golosina','$fecha_golosina','$stock_golosina','$proveedor_golosina')";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: golosinas_almacen.php");
    }else{
        // Mostrar mensaje de error en caso de fallo en la consulta
        echo "Error al registrar los datos. Por favor, intenta nuevamente.";
    }
} else {
    // Mostrar mensaje de error si los campos no están llenos
    echo '<script>alert("Todos los campos son requeridos. Por favor, completa todos los campos.");</script>';
    echo '<script>window.location.href = "golosinas_almacen.php";</script>';
}

?>