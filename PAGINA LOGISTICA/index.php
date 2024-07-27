<?php
  session_start();
  if(isset($_SESSION['usuario_user'])){
    header("location: pagina.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://kit.fontawesome.com/5ac8442d37.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="img/warehouse_2897818.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Logistic | Iniciar Sesión</title>
</head>
<body>
    <div class="card bg-dark">
      <div class="card-body">
        <form action="config/login_user.php" class="form" method="POST">
            <span class="input-span">
              <label for="text" class="label">Usuario</label>
              <input type="text" name="usuario_user" 
            /></span>
            <span class="input-span">
              <label for="password" class="label">Contraseña</label>
              <input type="password" name="password_user"  
            /></span>
            <input class="submit" type="submit" value="Iniciar Sesión" />
            <span class="span">¿No estas registrado? <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrarse</a></span>
        </form>
      </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Registrarse</h1>
          </div>
          <div class="modal-body">
            <form action="config/register_user.php" class="form" method="POST">
              <span class="input-span">
                <label for="text" class="label">Nombres y Apellidos</label>
                <input type="text" name="nombre_user" 
              /></span>
              <span class="input-span">
                <label for="password" class="label">Correo Electronico</label>
                <input type="email" name="correo_user"  
              /></span>
              <span class="input-span">
                <label for="text" class="label">Usuario</label>
                <input type="text" name="usuario_user" 
              /></span>
              <span class="input-span">
                <label for="text" class="label">Contraseña</label>
                <input type="password" name="password_user" 
              /></span>
              <input class="submit" type="submit" value="Registrarse" />
            </form>
            <br>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>