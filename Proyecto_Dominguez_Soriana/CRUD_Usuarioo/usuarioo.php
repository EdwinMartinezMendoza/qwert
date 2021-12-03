<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM usuarioo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA usuarioo</title>
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

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre">
                                    <input type="text" class="form-control mb-3" name="correo_electronico" placeholder="correo_electronico">
                                    <input type="text" class="form-control mb-3" name="contrasena" placeholder="contrasena">
                                    <input type="text" class="form-control mb-3" name="curp" placeholder="curp">
                                    <input type="text" class="form-control mb-3" name="edad" placeholder="edad">
                                    
                                    <input type="submit" class="btn btn-primary">
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>nombre</th>
                                        <th>correo electronico</th>
                                        <th>contrasena</th>
                                        <th>curp</th>
                                        <th>edad</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['correo_electronico']?></th>
                                                <th><?php  echo $row['contrasena']?></th>
                                                <th><?php  echo $row['curp']?></th> 
                                                <th><?php  echo $row['edad']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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