<?php
  session_start();
  if(isset($_SESSION['usuario'])){
    header("location: inicio.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles-login.css">
  <title>Mark Site | Iniciar Sesión</title>
</head>
<body>


<div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
<!--Login-->
               <div class="flip-card__inner">
                  <div class="flip-card__front">
                     <div class="title">Iniciar Sesión</div>
                     <form class="flip-card__form" action="php/login.php" method="POST">
                        <input class="flip-card__input" name="correo" placeholder="Correo" type="email">
                        <input class="flip-card__input" name="contrasena" placeholder="Contraseña" type="password">
                        <button class="flip-card__btn">Iniciar</button>
                     </form>
                  </div>

<!--Registro-->
                  <div class="flip-card__back">
                     <div class="title">Registrarse</div>
                     <form class="flip-card__form" action="php/registro.php" method="POST">
                        <input class="flip-card__input" name="nombre_completo" placeholder="Nombres Completos" type="name">
                        <input class="flip-card__input" name="correo" placeholder="Correo Electronico" type="email">
                        <input class="flip-card__input" name="usuario" placeholder="Usuario" type="name">
                        <input class="flip-card__input" name="contrasena" placeholder="Contraseña" type="password">
                        <button class="flip-card__btn">Registrarse</button>
                     </form>
                  </div>
               </div>
            </label>
        </div>   
   </div>
</body>
</html>