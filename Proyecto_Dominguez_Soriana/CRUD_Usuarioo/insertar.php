<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$correo_electronico=$_POST['correo_electronico'];
$contrasena=$_POST['contrasena'];
$curp=$_POST['curp'];
$edad=$_POST['edad'];

$sql="INSERT INTO usuarioo VALUES('$nombre','$correo_electronico','$contrasena','$curp','$edad')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarioo.php");
    
}else {
}
?>