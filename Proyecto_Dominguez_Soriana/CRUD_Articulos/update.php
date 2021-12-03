<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre_articulo'];
$precio=$_POST['precio'];
$proveedor=$_POST['proveedor'];
$produc=$_POST['nombre_productos'];
$serie=$_POST['numero_de_serie'];

$sql="UPDATE articulos SET nombre_articulo='$nombre', precio='$precio',proveedor='$proveedor',nombre_productos='$produc',numero_de_serie='$serie' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: articulos.php");
    }
?>