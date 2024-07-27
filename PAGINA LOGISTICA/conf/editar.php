<?php
include('conection.php');

$conection = connection();
$id = $_GET['id'];

$sql = "SELECT * FROM register WHERE id='$id'";
$query = mysqli_query($conection,$sql);
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
        <title>Logystic | Editar usuarios</title>
        
    </head>
    <body class="bg-dark">
        <div class="card bg-dark">
            <div class="card-body">
            <form action="editar_user.php" method="POST">
            <div class="input-group flex-nowrap">
                <input type="hidden" name="id" value="<?= $row['id']?>" class="form-control" placeholder="id" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap">
            <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-address-book text-light"></i></span>
                <input type="text" name="nombres" placeholder="Nombres" value="<?= $row['nombres']?>" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-regular fa-address-book text-light"></i></span>
                <input type="text" name="apellidos" placeholder="Apellidos" value="<?= $row['apellidos']?>" class="form-control"  aria-label="Username" aria-describedby="addon-wrapping" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text bg-danger" id="basic-addon1"><i class="fa-regular fa-address-card text-light"></i></span>
                <input type="text" name="dni" placeholder="DNI" value="<?= $row['dni']?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-calendar-days text-light"></i></span>
                <input type="date" name="fecha" value="<?= $row['fecha']?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group flex-nowrap">
                <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-envelope text-light"></i></span>
                <input type="email" name="correo" placeholder="Correo ELectronico" value="<?= $row['correo']?>" class="form-control" aria-label="Username" aria-describedby="addon-wrapping" maxlength="50" style="max-width: 300px;">
            </div>
            <br>

                <input type="submit" class="btn btn-success" value="Actualizar">
                <a href="usuarios.php" class="btn btn-danger" type="submit" value="Cancelar">Cancelar</a>
            </form>
        </div>
            </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>