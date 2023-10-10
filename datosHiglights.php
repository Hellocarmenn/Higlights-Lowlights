<?php
$id=rand(10000000,999999999);
$puntoDestacar = $_POST['puntoDestacar'];
$impacto = $_POST['impacto'];
$mejoraContinua = $_POST['mejoraContinua'];

echo "<h2>$id</h2>";
echo "<h2>$puntoDestacar</h2>";
echo "<h2>$impacto</h2>";
echo "<h2>$mejoraContinua</h2>";




$con = mysqli_connect("localhost", "root", "", "higlights&lowlights");
$sql = "INSERT INTO higlights(id,puntoDestacar,impacto,mejoraContinua)
VALUES('$id','" . $_POST["puntoDestacar"] . "','" . $_POST["impacto"] . "','" . $_POST["mejoraContinua"] . "')";

mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<script language="javascript">
    window.location.href = "index.php"
</script>