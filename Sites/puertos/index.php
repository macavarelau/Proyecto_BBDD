<?php include('../templates/header.html'); ?>

<body>

  <?php
  require("../config/conexion.php");
  $result = $db85 -> prepare("SELECT puertos.puerto_id, puertos.nombre FROM puertos;"); #####85
  $result -> execute();
  $puertosCollected = $result -> fetchAll();
  ?>

  <table class="table table-hover" align="center">
  <thead class="thead-light" align="center">
    <tr>
      <th> id Puerto </th>
      <th> Nombre Puerto </th>
      <th> Ver </th>
    </tr>
  </thead>

  <tbody>
    <?php
      foreach ($puertosCollected as $d) {
        echo " <tr> <td>$d[0]</td> <td>$d[1]</td> <td><form action='show.php' method='post'><input type='hidden' name='puerto' value=$d[0] /><input type='submit' value='Ver'></form></td> </tr> ";
      }
    ?>
  </tbody>
  </table>

</body>

<?php include('../templates/footer.html'); ?>