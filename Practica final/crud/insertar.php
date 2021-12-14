<?php
include("conexion.php");
$con=conectar();


$id=$_POST['Id'];
$nombre=$_POST['Nombre'];
$descripcion=$_POST['Descripcion'];
$categoria=$_POST['Categoria'];
$cantidad=$_POST['Cantidad'];
$precio=$_POST['Precio'];



$sql="INSERT INTO productos VALUES('$id','$nombre','$descripcion','$categoria','$cantidad','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
    
}else {
}
?>