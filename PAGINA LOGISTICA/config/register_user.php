<?php

    include 'conexion.php';

    $nombre_user= $_POST['nombre_user'];
    $correo_user = $_POST['correo_user'];
    $usuario_user = $_POST['usuario_user'];
    $password_user = $_POST['password_user'];
    //Ocultar contraseña.
    $password_user= hash('sha512', $password_user);

    $query = "INSERT INTO users(nombre_user, correo_user, usuario_user, password_user) 
              VALUES ('$nombre_user','$correo_user','$usuario_user','$password_user')";

     /*Verificar nombres*/
     $verificar_nombres = mysqli_query($conexion, "SELECT * FROM users WHERE nombre_user='$nombre_user'");

     if(mysqli_num_rows($verificar_nombres) > 0){
         echo '
             <script>
                 alert("Este nombre ya tiene una cuenta registrada intente con otra.");
                 window.location = "../index.php";
             </script>
         ';
         exit();
     }

    /*Verificar correo*/
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM users WHERE correo_user='$correo_user'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya existe, intente con otro correo.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

    /*Verificar usuarios*/
    $verificar_users = mysqli_query($conexion, "SELECT * FROM users WHERE usuario_user='$usuario_user'");

    if(mysqli_num_rows($verificar_users) > 0){
        echo '
            <script>
                alert("Este usuario ya existe, intente con otro usuario.");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }

   

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                window.location = "../index.php";
            </script>
        ';
        
    }else{
        '
            <script>
                alert("Usuario no adquirido");
                window.location = "../index.php";
            </script>
        ';
    }

    mysqli_close($conexion);
?>