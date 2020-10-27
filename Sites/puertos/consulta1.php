<?php include('../templates/header.html'); ?>

<?php
  require("../config/conexion.php");

  $puerto_id = $_POST["puerto"];

  $inicio = $_POST["inicio"];
  $termino = $_POST["termino"];
  
  $query = "SELECT * from capacidad_instalacion('$inicio', '$termino', $puerto_id) order by instalacion_id;";
  $result = $db36 -> prepare($query);
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