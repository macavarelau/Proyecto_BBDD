<?php 
  session_start();
  include('../templates/header.html');
  $user_passport = $_SESSION['user_passport'];
?>

<body>
<div class="container">

<h1>ESTE ES JEFE</h1>

<?php
    require("../config/conexion.php");

    $query_muelle = "SELECT puertos.puerto_id as puerto_id_muelle, puertos.nombre from puertos, instalaciones, muelles, trabajaen where trabajaen.trut = '$user_passport' and muelles.instalacion_id = instalaciones.instalacion_id and instalaciones.puerto_id = puertos.puerto_id and trabajaen.instalacion_id = muelles.instalacion_id;";
    $result_muelle = $db85 -> prepare($query_muelle);
    $result_muelle -> execute();
    $muelle = $result_muelle -> fetchAll();

    $query_astillero = "SELECT puertos.puerto_id as puerto_id_astillero, puertos.nombre from puertos, instalaciones, astilleros, trabajaen where trabajaen.trut = '$user_passport' and astilleros.instalacion_id = instalaciones.instalacion_id and instalaciones.puerto_id = puertos.puerto_id and trabajaen.instalacion_id = astilleros.instalacion_id;";
    $result_astillero = $db85 -> prepare($query_astillero);
    $result_astillero -> execute();
    $astillero = $result_astillero -> fetchAll();
?>

    <h1>Puerto del muelle en el que trabaja:</h1>

    <table>
      <tr>
        <th>id</th>
        <th>Puerto</th>
      </tr>
      <?php
        foreach ($muelle as $m) {
          echo "<tr><td>$m[0]</td><td>$m[1]</td></tr>";
        }
      ?>
    </table>

    <h1>Puerto del astillero en el que trabaja:</h1>

    <table>
      <tr>
        <th>id</th>
        <th>Puerto</th>
      </tr>
      <?php
        foreach ($astillero as $a) {
          echo "<tr><td>$a[0]</td><td>$a[1]</td></tr>";
        }
      ?>
    </table>
</body>
