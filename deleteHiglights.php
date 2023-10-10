<?php
include("conexion.php");
$con=conectar();

$clave=$_GET['id'];
$sql="DELETE FROM higlights  WHERE id='$clave'";
$query=mysqli_query($con,$sql);

if ($query){
    Header("Location: index.php");
}
?>