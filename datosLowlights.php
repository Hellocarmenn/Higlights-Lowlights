<?php
$id=rand(10000000,999999999);
$incidente = $_POST['incidente'];
$impacto2 = $_POST['impacto2'];
$accionMejora = $_POST['accionMejora'];

echo "<h2>$id</h2>";
echo "<h2>$incidente</h2>";
echo "<h2>$impacto2</h2>";
echo "<h2>$accionMejora</h2>";


$con = mysqli_connect("localhost", "root", "", "higlights&lowlights");
$sql = "INSERT INTO lowlights(id,incidente,impacto2,accionMejora)
VALUES('$id','" . $_POST["incidente"] . "','" . $_POST["impacto2"] . "','" . $_POST["accionMejora"] . "')";

mysqli_query($con, $sql) or die(mysqli_error($con));
?>
<script language="javascript">
    window.location.href = "lowlights.php"
</script>

<?php





