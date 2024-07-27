<?php

    session_start();
    include 'conexion.php';

    $usuario_user = $_POST['usuario_user'];
    $password_user= $_POST['password_user'];
    $password_user= hash('sha512', $password_user);

   

    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE usuario_user='$usuario_user' and password_user='$password_user'");

    if(mysqli_num_rows($validar_login) > 0 ){
        $_SESSION['usuario_user'] = $usuario_user;
        header("location: ../pagina.php");
        exit;
    }else{
        echo '
            <script>
                alert("No existe este usuario o la contraseña o usuario estan incorrextos.")
                window.location = "../index.php";
            </script>
        ';
        exit;
    }
?>