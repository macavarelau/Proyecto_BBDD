<?php include('../templates/header.html'); ?>

<?php
require("../config/conexion.php");
$result = $db85 -> prepare("SELECT puertos.puerto_id, puertos.nombre FROM puertos;"); #####85
$result -> execute();
$puertosCollected = $result -> fetchAll();
?>

<?php
$puerto_id = $_POST["puerto"];
echo "<h1>$puerto_id</h1>"
?>

<?php
$instalacion = $_POST["instalacion"];
$atraque_muelle = $_POST["atraque_muelle"];
$atraque_astillero = $_POST["atraque_astillero"];
$salida_astillero = $_POST["salida_astillero"];
$barco = $_POST["barco"];
echo "<h1>$instalacion</h1><h2>$atraque_muelle</h2><h1>$atraque_astillero</h1><h2>$salida_astillero</h2><h1>$barco</h1>"
?>

<?php include('../templates/footer.html'); ?>