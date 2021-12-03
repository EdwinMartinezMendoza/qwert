<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ARTICULO</title>
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

                                    <input type="text" class="form-control mb-3" name="nombre_articulo" placeholder="nombre articulo">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="precio">
                                    <input type="text" class="form-control mb-3" name="proveedor" placeholder="proveedor">
                                    <input type="text" class="form-control mb-3" name="nombre_productos" placeholder="nombre producto">
                                    <input type="text" class="form-control mb-3" name="numero_de_serie" placeholder="numero de serie">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a></li> 
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>ID</th>
                                        <th>nombre articulo</th>
                                        <th>precio</th>
                                        <th>proveedor</th>
                                        <th>nombre producto</th>
                                        <th>numero de serie</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre_articulo']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['proveedor']?></th>
                                                <th><?php  echo $row['nombre_productos']?></th> 
                                                <th><?php  echo $row['numero_de_serie']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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