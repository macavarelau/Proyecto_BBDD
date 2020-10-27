<?php 
  session_start();
  $user_passport = $_SESSION['user_passport'];   ?>
  
<body>
<div class="container">
<h1>ESTE ES CAPITAN</h1>

<?php
    require("../config/conexion.php");

    $query_buque = "SELECT distinct buques.bid as id_buque, buques.patente as patente_buque, buques.nombre as nombre_buque, buques.giro as tipo_buque, navieras.nombre as nombre_naviera from buques, navieras, tiene, posee, personal where buques.bid = posee.bid and posee.bid = tiene.bid and posee.nid = navieras.nid and personal.pid = tiene.pid and lower(personal.cargo) like '%cap%' and personal.pasaporte = '$user_passport';";
    $result_buque = $db36 -> prepare($query_buque);
    $result_buque -> execute();
    $buques = $result_buque -> fetchAll();

    $query_itinerario = "SELECT distinct prox_itinerario.bid, prox_itinerario.puerto, prox_itinerario.llegada from prox_itinerario, (select distinct buques.bid as id_buque, buques.patente as patente_buque, buques.nombre as nombre_buque, buques.giro as tipo_buque, navieras.nombre as nombre_naviera from buques, navieras, tiene, posee, personal, usuarios where buques.bid = posee.bid and posee.bid = tiene.bid and posee.nid = navieras.nid and personal.pid = tiene.pid and lower(personal.cargo) like '%cap%' and personal.pasaporte = '$user_passport') as foo where prox_itinerario.bid = foo.id_buque order by llegada limit 1;";
    $result_itinerario = $db36 -> prepare($query_itinerario);
    $result_itinerario -> execute();
    $itinerarios = $result_itinerario -> fetchAll();

    $query_lugares = "SELECT puertos.pnombre, atraques.ingreso, atraques.salida from puertos, atraques, (select buques.bid as id_buque, buques.patente as patente_buque, buques.nombre as nombre_buque, buques.giro as tipo_buque, navieras.nombre as nombre_naviera from buques, navieras, tiene, posee, personal where buques.bid = posee.bid and posee.bid = tiene.bid and posee.nid = navieras.nid and personal.pid = tiene.pid and lower(personal.cargo) like '%cap%' and personal.pasaporte = '$user_passport') as foo where atraques.abid = foo.id_buque and puertos.ptid = atraques.puerto order by salida desc limit 5;";
    $result_lugares = $db36 -> prepare($query_lugares);
    $result_lugares -> execute();
    $lugares = $result_lugares -> fetchAll();
?>

    <h1>Información de Buque:</h1>

    <table>
      <tr>
        <th>id</th>
        <th>Patente</th>
        <th>Nombre</th>
        <th>Giro</th>
        <th>Naviera</th>
      </tr>
      <?php
        foreach ($buques as $b) {
          echo "<tr><td>$b[0]</td><td>$b[1]</td><td>$b[2]</td><td>$b[3]</td><td>$b[4]</td></tr>";
        }
      ?>
    </table>

    <h1>Próximo Itinerario:</h1>

    <table>
      <tr>
        <th>id</th>
        <th>Puerto</th>
        <th>Llegada</th>
      </tr>
      <?php
        foreach ($itinerarios as $i) {
          echo "<tr><td>$i[0]</td><td>$i[1]</td><td>$i[2]</td></tr>";
        }
      ?>
    </table>

    <h1>Últimos puertos visitados:</h1>

    <table>
      <tr>
        <th>Puerto</th>
        <th>Ingreso</th>
        <th>Salida</th>
      </tr>
      <?php
        foreach ($lugares as $l) {
          echo "<tr><td>$l[0]</td><td>$l[1]</td><td>$l[2]</td></tr>";
        }
      ?>
    </table>

</body>
