<?php include('../templates/header.html');   ?>

<body>
<?php
  require("../config/conexion.php");
  $nid = $_POST("nid");
  $nid = intval($nid);

  $query = "SELECT DISTINCT buques.bid, buques.nombre, buques.patente, buques.pais, buques.giro, buques.personal FROM navieras, posee, buques WHERE navieras.nid = $nid AND buques.bid = posee.bid AND navieras.nid = posee.nid ORDER BY buques.giro;";
  $result = $db36 -> prepare($query);
  $result -> execute();
  $buques = $result -> fetchAll();
?>

<table>
  <tr>
    <th>bid</th>
    <th>Nombre</th>
    <th>Patente</th>
    <th>Pais</th>
    <th>Giro</th>
    <th>Cantidad personal</th>
  </tr>

  <?php
    foreach ($buques as $b) {
      echo "<tr><td>$b[0]</td><td>$b[1]</td><td>$b[2]</td><td>$b[3]</td><td>$b[4]</td><td>$b[5]</td></tr>"
    }
  ?>
</table>
<?php include('../templates/footer.html'); ?>