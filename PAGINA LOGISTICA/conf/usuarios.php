<?php
include('conection.php');

$conection = connection();
$sql = "SELECT * FROM register";
$query = mysqli_query($conection, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/warehouse_2897818.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5ac8442d37.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Logystic | Usuarios</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid ">
        <span class="text-primary" style="margin-right: 30px;"><img src="../img/user.png" alt=""></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
                <h2 class="text-secondary">|</h2>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../pagina.php">Principal</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventario
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../bebidas_alm/bebidas_almacen.php">Bebidas</a></li>
                <li><a class="dropdown-item" href="../galletas_alm/galletas_almacen.php">Galletas</a></li>
                <li><a class="dropdown-item" href="../golosinas_alm/golosinas_almacen.php">Golosinas</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--Tabla-->
<div class="card bg-dark">
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>