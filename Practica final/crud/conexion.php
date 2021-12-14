<?php
function conectar(){
    $host="crud-db";
    $user="root";
    $pass="root";

    $bd="crud";

    $con=new mysqli($host,$user,$pass,$bd);

    return $con;
}
?>
