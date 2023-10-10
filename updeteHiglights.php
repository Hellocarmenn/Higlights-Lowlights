<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$puntoDestacar=$_POST['puntoDestacar'];
$impacto=$_POST['impacto'];
$mejoraContinua=$_POST['mejoraContinua'];


$sql="UPDATE higlights SET puntoDestacar='$puntoDestacar', impacto='$impacto',mejoraContinua='$mejoraContinua' WHERE id='$id'";
//echo $sql;
//return(0);
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>