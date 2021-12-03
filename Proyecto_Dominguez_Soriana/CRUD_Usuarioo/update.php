<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$correo_electronico=$_POST['correo_electronico'];
$contrasena=$_POST['contrasena'];
$curp=$_POST['curp'];
$edad=$_POST['edad'];

$sql="UPDATE usuarioo SET  correo_electronico='$correo_electronico',contrasena='$contrasena',curp='$curp',edad='$edad' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarioo.php");
    }
?>