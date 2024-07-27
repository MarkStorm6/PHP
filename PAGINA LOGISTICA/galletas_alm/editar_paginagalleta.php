<?php
include('../articulos_config/conexion_articulos.php');

$conect = connection();
$id = $_GET['id'];

$sql = "SELECT * FROM galletas WHERE id='$id'";
$query = mysqli_query($conect,$sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/warehouse_2897818.png" type="image/x-icon">
        <script src="https://kit.fontawesome.com/5ac8442d37.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <title>Logystic | Editar | Galletas</title>
        
    </head>
    <body class="bg-dark">
    <div class="card bg-dark">
  <div class="card-body">
  <div class="users-form">
        <h1>Registro</h1>
        <form action="editar_galleta.php" method="POST">
            <div class="input-group flex-nowrap">
                <input type="hidden" name="id" value="<?= $row['id']?>" class="form-control" placeholder="id" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary text-light" id="basic-addon1"><i class="fa-regular fa-clipboard"></i></span>
              <input type="text" class="form-control" name="descripcion_galleta"  value="<?= $row['descripcion_galleta']?>" placeholder="Descripción Del Producto" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-success text-light" id="basic-addon1"><i class="fa-solid fa-dollar-sign"></i></span>
              <input type="text" class="form-control"  name="precio_galleta"  value="<?= $row['precio_galleta']?>" placeholder="Precio Unitario" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-danger" id="basic-addon1"><i class="fa-solid fa-calendar-days text-light"></i></span>
              <input type="date" class="form-control" name="fecha_galleta"  value="<?= $row['fecha_galleta']?>" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-warning text-light" id="basic-addon1"><i class="fa-solid fa-boxes-packing"></i></span>
              <input type="number" class="form-control" name="stock_galleta"  value="<?= $row['stock_galleta']?>" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-secondary text-light" id="basic-addon1"><i class="fa-solid fa-industry"></i></span>
              <input type="text" class="form-control" name="proveedor_galleta"  value="<?= $row['proveedor_galleta']?>" placeholder="Proveedo / Empresa" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Actualizar">
            <a href="galletas_almacen.php" class="btn btn-danger" type="submit" value="Cancelar">Cancelar</a>
        </form>
    </div>
  </div>
</div>

                


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>