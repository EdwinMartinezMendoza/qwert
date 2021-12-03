<?php

include("conexion.php");
$con=conectar();

$sucursal=$_POST['sucursal'];
$cobro=$_POST['cobro'];
$nombre=$_POST['nombre_de_producto'];
$produc=$_POST['cantidad_de_producto'];
$numero=$_POST['numero_de_codigo_de_barras'];

$sql="UPDATE tiket SET cobro='$cobro',nombre_de_producto='$nombre',cantidad_de_producto='$produc',numero_de_codigo_de_barras='$numero' WHERE sucursal='$sucursal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: tiket.php");
    }
?>