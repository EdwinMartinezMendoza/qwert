<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM articulos WHERE id='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>
