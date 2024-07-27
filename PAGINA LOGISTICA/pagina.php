<?php
    session_start();
    if(!isset($_SESSION['usuario_user'])){
        echo '
            <script>
                alert("Inicia sesión para comenzar");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="img/warehouse_2897818.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/5ac8442d37.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Logystic | Principal</title>
</head>
<body class="bg-dark">

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid ">
        <span class="text-success" style="margin-right: 30px; font-weight: bold;"><img src="img/user.png" alt=""> <?php echo $_SESSION['usuario_user']; ?></span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
                <h2 class="text-secondary">|</h2>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="conf/usuarios.php">Lista de Empleados</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Inventario
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="bebidas_alm/bebidas_almacen.php">Bebidas</a></li>
                <li><a class="dropdown-item" href="galletas_alm/galletas_almacen.php">Galletas</a></li>
                <li><a class="dropdown-item" href="golosinas_alm/golosinas_almacen.php">Golosinas</a></li>
              </ul>
            </li>
            <a class="btn btn-danger text-light" href="config/cerrar_user.php">Cerrar Sesión</a>
          </ul>
        </div>
      </div>
    </nav>
    <br>
  <!--Carousel------------------------------------------------------------------------------------------------------------------------------------------------->
    
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/inkakola.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/oreo.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/trident.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!----Table------------------------------------------------------------------------------------------------------------------------------------------------->

    <br>
    <div class="text-light" style="margin-left: 20px;"><h2>Lista de Empleados Autorizados</h2></div>
    <br>

    <div class="tabla-datos" style="width: 80%; margin-left: 140px;">
    <table class="table table-hover">
    <thead>
    <tr class="table-dark">
      <th class="text-light" scope="col">#</th>
      <th class="text-light" scope="col">NOMBRES Y APELLIDOS</th>
      <th class="text-light" scope="col">CORREO</th>
      <th class="text-light" scope="col">USUARIO</th>
      <th class="text-light" scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
include('config/conexion.php');

$sql = "SELECT * FROM users";
$query = mysqli_query($conexion, $sql);
?>
  <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th  class="table-success"><?= $row['id'] ?></th>
                        <th><?= $row['nombre_user'] ?></th>
                        <th><?= $row['correo_user'] ?></th>
                        <th><?= $row['usuario_user'] ?></th>
                        <th><a href="config/borrar_user.php?id=<?= $row['id'] ?>" class="users-table--delete btn btn-danger" ><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                <?php endwhile; ?>
  </tbody>
    </table>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>