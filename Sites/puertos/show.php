<?php include('../templates/header.html'); ?>

<?php
$puerto_id = $_POST["puerto"];
echo "<h1>$puerto_id</h1>"
?>

<form action="consulta1.php" method="post">
    <label>Ingrese la fecha de inicio</label>
    <input type="date" name="inicio">
    <br>
    <br>
    <label>Ingrese la fecha de termino</label>
    <input type="date" name="termino">
    <br>
    <br>
    <?php
    echo "<input type='hidden' name='puerto' value=$puerto_id>"
    ?>
    <input type="submit" value="Mostrar datos">
</form>
<br><br><br><br><br>
<form action="consulta2.php" method="post">
    <label>Ingrese tipo de instalación</label>
    <select name="instalacion">
        <option value="muelle">Muelle</option>
        <option value="astillero">Astillero</option>
    </select>
    <br>
    <br>
    <label>Si seleccionó muelle ingrese fecha de atraque</label>
    <input type="date" name="atraque_muelle">
    <br>
    <br>
    <label>Si seleccionó astillero ingrese fechas de llegada y salida</label>
    <input type="date" name="atraque_astillero">
    <input type="date" name="salida_astillero">
    <br>
    <br>
    <label>Ingrese patente del barco</label>
    <input type="text" name="barco">
    <?php
    echo "<input type='hidden' name='puerto' value=$puerto_id>"
    ?>
    <input type="submit" value="Mostrar datos">
</form>
<br>
<br>
<form action="index.php" method="get">
    <button type="submit" class="btn btn-secondary" align= "center">Volver</button>
    <br>
<br><br>
<br>
</form>
</div>
</body>

</html>