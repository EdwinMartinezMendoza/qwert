<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre_empleado'];
$apellido=$_POST['apellido_paterno'];
$apellido=$_POST['apellido_materno'];
$numero=$_POST['numero_de_empleado'];
$curp=$_POST['curp'];

$sql="INSERT INTO empleado VALUES('$nombre','$apellido','$apellido','$numero','$curp')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>