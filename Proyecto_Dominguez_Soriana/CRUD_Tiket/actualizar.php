<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM tiket WHERE sucursal'$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="sucursal" value="<?php echo $row['sucursal']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="cobro" placeholder="cobro" value="<?php echo $row['cobro']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_de_producto" placeholder="nombre_de_producto" value="<?php echo $row['nombre_de_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="cantidad_de_producto" placeholder="cantidad_de_producto" value="<?php echo $row['cantidad_de_producto']  ?>">
                                <input type="text" class="form-control mb-3" name="numero_de_codigo_de_barras" placeholder="numero_de_codigo_de_barras" value="<?php echo $row['numero_de_codigo_de_barras']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>