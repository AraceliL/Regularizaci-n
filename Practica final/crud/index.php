<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> CRUD PRODUCTOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="./estilos.css" rel="stylesheet" >

    </head>
    <body>
            <div class="container mt-5">
                    <div class="row">

                        <div class="formulario">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form1" name="Id" placeholder="Id">
                                    <input type="text" class="form1" name="Nombre" placeholder="Nombre">
                                    <input type="text" class="form1" name="Descripcion" placeholder="Descripcion">
                                    <input type="text" class="form1" name="Categoria" placeholder="Categoria">
                                    <input type="text" class="form1" name="Cantidad" placeholder="Cantidad">
                                    <input type="text" class="form1" name="Precio" placeholder="Precio">


                                    <input type="submit" class="boton">
                                </form>
                        </div>

                        <div class="formulario">
                            <table class="table" >
                            <thead class="table-encabezado" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Descripción</th>
                                        <th>Categoría</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['descripcion']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                <th><?php  echo $row['cantidad']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="boton">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="boton">Eliminar</a></th>                                   >                                            </tr>
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