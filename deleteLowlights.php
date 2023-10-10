<?php
include("conexion.php");
$con=conectar();

$clave=$_GET['id'];
$sql="DELETE FROM lowlights WHERE id='$clave'";
$query=mysqli_query($con,$sql);

if ($query){
    Header("Location: lowlights.php");
}
?>