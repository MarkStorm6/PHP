<?php

    include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    //Ocultar contraseña.
    $contrasena= hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
              VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";

     /*Verificar nombres*/
     $verificar_nombres = mysqli_query($conexion, "SELECT * FROM usuarios WHERE nombre_completo='$nombre_completo'");

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
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");

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
    $verificar_users = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");

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
                alert("Usuario adquirido");
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