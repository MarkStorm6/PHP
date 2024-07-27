<?php

include("conection.php");
$conection = connection();

$id=$_GET["id"];

$sql="DELETE FROM register WHERE id='$id'";
$query = mysqli_query($conection, $sql);

if($query){
    Header("Location: usuarios.php");
}else{

}

?>