<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$mejoraInterna=$_POST['mejoraInterna'];
$involucrados=$_POST['involucrados'];
$efectoEsperado=$_POST['efectoEsperado'];


$sql="UPDATE recomendaciones SET mejoraInterna='$mejoraInterna', involucrados='$involucrados',efectoEsperado='$efectoEsperado' WHERE id='$id'";
//echo $sql;
//return(0);
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: recomendaciones.php");
}
?>