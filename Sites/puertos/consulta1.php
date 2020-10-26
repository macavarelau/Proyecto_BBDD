<?php include('../templates/header.html'); ?>

<?php
  require("../config/conexion.php");

  $puerto_id = $_POST["puerto"];

  $inicio = $_POST["inicio"];
  $termino = $_POST["termino"];
  
  $query = "SELECT instalaciones.instalacion_id, permisos.atraque from permisos, instalaciones where instalaciones.instalacion_id = permisos.instalacion_id and permisos.atraque between '$inicio' and '$termino' and instalaciones.puerto_id = $puerto_id group by instalaciones.instalacion_id, permisos.atraque having count(permisos.permiso_id) < instalaciones.capacidad order by instalaciones.instalacion_id;";
  $result = $db85 -> prepare($query);
  $result -> execute();
  $dias = $result -> fetchAll();
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