<?php
include("conexion.php");
$con=conectar();

$sucursal=$_POST['sucursal'];
$cobro=$_POST['cobro'];
$nombre=$_POST['nombre_de_producto'];
$produc=$_POST['cantidad_de_producto'];
$numero=$_POST['numero_de_codigo_de_barras'];

$sql="INSERT INTO tiket VALUES('$sucursal','$cobro','$nombre','$produc','$numero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: tiket.php");
    
}else {
}
?>