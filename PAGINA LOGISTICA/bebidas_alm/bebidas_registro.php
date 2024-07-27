<?php
include('../articulos_config/conexion_articulos.php');
$conex = connection();

$id = null;
$descripcion_bebida = $_POST['descripcion_bebida'];
$precio_bebida = $_POST['precio_bebida'];
$fecha_bebida = $_POST['fecha_bebida'];
$stock_bebida = $_POST['stock_bebida'];
$proveedor_bebida = $_POST['proveedor_bebida'];

if (!empty($descripcion_bebida) && !empty($precio_bebida) && !empty($fecha_bebida) && !empty($stock_bebida) && !empty($proveedor_bebida)) {
    $sql = "INSERT INTO bebidas (id, descripcion_bebida, precio_bebida, fecha_bebida, stock_bebida, proveedor_bebida) VALUES ('$id','$descripcion_bebida','$precio_bebida','$fecha_bebida','$stock_bebida','$proveedor_bebida')";
    $query = mysqli_query($conex, $sql);

    if($query){
        Header("Location: bebidas_almacen.php");
    }else{
        // Mostrar mensaje de error en caso de fallo en la consulta
        echo "Error al registrar los datos. Por favor, intenta nuevamente.";
    }
} else {
    // Mostrar mensaje de error si los campos no están llenos
    echo '<script>alert("Todos los campos son requeridos. Por favor, completa todos los campos.");</script>';
    echo '<script>window.location.href = "bebidas_almacen.php";</script>';
}

?>