<?php
include('conexion.php');

$conexion = connection();
$sql = "SELECT * FROM register";
$query = mysqli_query($conexion, $sql);
?>

<!doctype html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5ac8442d37.js" crossorigin="anonymous"></script>
    <title>Registro De Datos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="card">
  <div class="card-body">
  <div class="users-form">
        <h1>Registro</h1>
        <form action="registro.php" method="POST">
            <div class="input-group mb-3">
              <span class="input-group-text bg-primary" id="basic-addon1"><i class="fa-solid fa-address-book text-light"></i></span>
              <input type="text" class="form-control" name="nombres" placeholder="Nombres" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-success" id="basic-addon1"><i class="fa-regular fa-address-book text-light"></i></span>
              <input type="text" class="form-control"  name="apellidos" placeholder="Apellidos" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-danger" id="basic-addon1"><i class="fa-regular fa-address-card text-light"></i></span>
              <input type="text" class="form-control" name="dni" placeholder="DNI" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-warning" id="basic-addon1"><i class="fa-solid fa-calendar-days text-light"></i></span>
              <input type="date" class="form-control" name="fecha" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <div class="input-group mb-3">
              <span class="input-group-text bg-secondary" id="basic-addon1"><i class="fa-solid fa-envelope text-light"></i></span>
              <input type="email" class="form-control" name="correo" placeholder="Correo Electronico" aria-label="Username" aria-describedby="basic-addon1" maxlength="50" style="max-width: 300px;">
            </div>
            <br>
            <input type="submit" class="btn btn-success" value="Agregar">
        </form>
    </div>
  </div>
</div>
    
    <br>


    <div class="tabla-datos">
    <table class="table table-hover">
    <thead>
    <tr class="table-dark">
      <th class="text-light" scope="col">#</th>
      <th class="text-light" scope="col">NOMBRES</th>
      <th class="text-light" scope="col">APELLIDOS</th>
      <th class="text-light" scope="col">DNI</th>
      <th class="text-light" scope="col">FECHA DE NACIMIENTO</th>
      <th class="text-light" scope="col">CORREO</th>
      <th class="text-light" scope="col"></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
  <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th  class="table-success"><?= $row['id'] ?></th>
                        <th><?= $row['nombres'] ?></th>
                        <th><?= $row['apellidos'] ?></th>
                        <th><?= $row['dni'] ?></th>
                        <th><?= $row['fecha'] ?></th>
                        <th><?= $row['correo'] ?></th>
                        <th><a href="editar.php?id=<?= $row['id'] ?>" class="users-table--edit btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></th>
                        <th><a href="borrar.php?id=<?= $row['id'] ?>" class="users-table--delete btn btn-danger" ><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                <?php endwhile; ?>
  </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>