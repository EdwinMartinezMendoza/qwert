<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM empleado";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA empleado</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre_empleado" placeholder="nombre empleado">
                                    <input type="text" class="form-control mb-3" name="apellido_paterno" placeholder="apellido paterno">
                                    <input type="text" class="form-control mb-3" name="apellido_materno" placeholder="apellido materno">
                                    <input type="text" class="form-control mb-3" name="numero_de_trabajador" placeholder="numero de trabajador">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="curp">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>nombre empleado</th>
                                        <th>apellido paterno</th>
                                        <th>apellido materno</th>
                                        <th>numero de trabajador</th>
                                        <th>curp</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre_trabajador']?></th>
                                                <th><?php  echo $row['apellido_paterno']?></th>
                                                <th><?php  echo $row['apellido_materno']?></th>
                                                <th><?php  echo $row['numero_de_trabajador']?></th> 
                                                <th><?php  echo $row['curp']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['nombre_empleado'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['nombre_empleadp'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>