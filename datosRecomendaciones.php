<?php
$id=rand(10000000,999999999);
$mejoraInterna = $_POST['mejoraInterna'];
$involucrados = $_POST['involucrados'];
$efectoEsperado = $_POST['efectoEsperado'];

echo "<h2>$id</h2>";
echo "<h2>$mejoraInterna</h2>";
echo "<h2>$involucrados</h2>";
echo "<h2>$efectoEsperado</h2>";




$con = mysqli_connect("localhost", "root", "", "higlights&lowlights");
$sql = "INSERT INTO recomendaciones(id,mejoraInterna,involucrados,efectoEsperado)
VALUES('$id','" . $_POST["mejoraInterna"] . "','" . $_POST["involucrados"] . "','" . $_POST["efectoEsperado"] . "')";

mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<script language="javascript">
    window.location.href = "recomendaciones.php"
</script>