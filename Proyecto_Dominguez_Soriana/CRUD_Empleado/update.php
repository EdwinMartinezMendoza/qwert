<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre_empleado'];
$apellido=$_POST['apellido_paterno'];
$apellido=$_POST['apellido_materno'];
$numero=$_POST['numero_de_trabajador'];
$curp=$_POST['curp'];

$sql="UPDATE articulos SET apellido_paterno='$apellido',apellido_materno='$apellido',numero_de_trabajador='$numero',curp='$curp' WHERE nombre_empleado='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>