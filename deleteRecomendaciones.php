<?php
include("conexion.php");
$con=conectar();

$clave=$_GET['id'];
$sql="DELETE FROM recomendaciones  WHERE id='$clave'";
$query=mysqli_query($con,$sql);

if ($query){
    Header("Location: recomendaciones.php");
}
?>