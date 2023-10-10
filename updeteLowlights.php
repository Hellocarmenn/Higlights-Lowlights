<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$incidente=$_POST['incidente'];
$impacto2=$_POST['impacto2'];
$accionMejora=$_POST['accionMejora'];


$sql="UPDATE lowlights SET incidente='$incidente', impacto2='$impacto2',accionMejora='$accionMejora' WHERE id='$id'";
//echo $sql;
//return(0);
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: lowlights.php");
}
?>