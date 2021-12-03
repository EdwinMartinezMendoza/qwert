<?php

include("conexion.php");
$con=conectar();

$nombre=$_GET['id'];

$sql="DELETE FROM tiket  WHERE sucursal='$sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tiket.php");
    }
?>
