<?php include('../templates/header.html'); ?>

<body>

  <?php
    require("../config/conexion.php");
    $result = $db36 -> prepare("SELECT DISTINCT nid, nombre FROM navieras;");
    $result -> execute();
    $navierasCollected = $result -> fetchAll();
  ?>

  <table class="table table-hover" align="center">
    <thead>
      <tr>
        <th>ID Naviera</th>
        <th>Nombre</th>
      </tr>
    </thead>

    <tbody>
      <?php
        foreach ($navierasCollected as $d) {
          echo " <tr><td>$d[0]</td><td>$d[1]</td><td><form action='show.php' method='post'><input type='hidden' name='nid' value=$d[0]/><input type='submit' value='Ver'></form></td></tr> ";
        }
      ?>
    </tbody>
  </table>
<br>
<br>
<form action="../home.php" method="get">
    <button type="submit" class="btn btn-secondary" align= "center">Volver</button>
    <br>
<br><br>
<br>
</form>
</div>
</body>

</html>