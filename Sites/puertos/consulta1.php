<?php include('../templates/header.html'); ?>

<?php
  require("../config/conexion.php");

  $puerto_id = $_POST["puerto"];
  echo "<h1>$puerto_id</h1>";

  $inicio = $_POST["inicio"];
  $termino = $_POST["termino"];
  echo "<h1>$inicio</h1><h2>$termino</h2>";
  
  #$query = "SELECT instalaciones.instalacion_id, permisos.atraque from permisos, instalaciones where instalaciones.instalacion_id = permisos.instalacion_id and permisos.atraque between '2018-08-10' and '2020-08-31' and instalaciones.puerto_id = 1 group by instalaciones.instalacion_id, permisos.atraque having count(permisos.permiso_id) < instalaciones.capacidad order by instalaciones.instalacion_id;";
  $query = "SELECT instalaciones.instalacion_id, permisos.atraque from permisos, instalaciones where instalaciones.instalacion_id = permisos.instalacion_id and permisos.atraque between '$inicio' and '$termino' and instalaciones.puerto_id = $puerto_id group by instalaciones.instalacion_id, permisos.atraque having count(permisos.permiso_id) < instalaciones.capacidad order by instalaciones.instalacion_id;";
  $result = $db85 -> prepare($query);
  $result -> execute();
  $dias = $result -> fetchAll();
?>

<h1>DIAS:</h1>
<?php
echo $query;
echo "\nPDO::errorInfo():\n";
print_r($db36->errorInfo());
if ($dias[0]){
  echo 'la wea funciona';
}
if (!$dias[0]){
  echo 'sam es wn';
}
  echo "<h1>$dias[0]</h1><h1>$dias[1]</h1>";
?>

<table>
  <tr>
    <th>instalacion_id</th>
    <th>fecha atraque</th>
  </tr>

    <?php
      foreach ($dias as $d) {
        echo "<tr><td>$d[0]</td><td>$d[1]</td></tr>";
    }
    ?>

</table>

<?php include('../templates/footer.html'); ?>