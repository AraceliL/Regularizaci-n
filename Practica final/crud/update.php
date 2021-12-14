<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripción'];
$categoria=$_POST['categoría'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];


$sql="UPDATE productos SET nombre='$nombre',descripcion='$descripcion', categoria=$categoria, cantidad=$cantidad,precio=$precio WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
?>