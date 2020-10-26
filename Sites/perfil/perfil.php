<?php 
  session_start();
  include('../templates/header.html');
  $user_passport = $_SESSION['user_passport'];   ?>
  
<body>
<div class="container">

<?php

  $query = "SELECT nombre, edad, sexo, pasaporte, nacionalidad from usuarios where pasaporte = '$user_passport';";
  require("../config/conexion.php");
  
  $result = $db36 -> prepare($query);
  $result -> execute();
  $user = $result -> fetchAll();


  foreach ($user as $u) {
      echo "Nombre: $u[0]<br>Edad: $u[1]<br>Sexo: $u[2]<br>Pasaporte: $u[3]<br>Nacionalidad: $u[4]<br><br>";
  }

  $query_cap = "SELECT distinct info_caps.bid as id_info_cap, info_caps.patente as patente_info_cap, info_caps.nombre as nombre_info_cap, info_caps.giro as tipo_info_cap, navieras.nombre as nombre_naviera from info_caps, navieras, tiene, posee, personal, usuarios where info_caps.bid = posee.bid and posee.bid = tiene.bid and posee.nid = navieras.nid and personal.pid = tiene.pid and lower(personal.cargo) like '%cap%' and personal.pasaporte = '$user_passport';";
  $result_cap = $db36 -> query($query_cap);
  $result_cap -> execute();
  $info_caps = $result -> fetchAll();
  $query_jefe = "SELECT trabajaen.trut, trabajaen.instalacion_id from trabajaen where trabajaen.trut = '$user_passport' and trabajaen.jefe = '1';";
  $result_jefe = $db85 -> query($query_jefe);
  $result_jefe -> execute();
  $info_jefes = $result -> fetchAll();
  
  $cargo = 0; # 0 si no es nada, 1 si es cap y 2 si es jefe;
  echo $query_cap;
  echo $query_jefe;
  echo $info_cap[0];
  echo $info_jefe[0];
  if ($info_caps[0]){
    $cargo = 1;
    echo "es capitan";
    include('capitan.php');
  }
  if ($info_jefes[0]){
    $cargo = 2;
    echo "es jefe";
    include('jefe.php');
  }
  if (!$info_caps[0]){
    if (!$info_jefes[0]){
      echo "no es ni jefe ni cap";
    }
  }

?>
<table class="table table-striped table-hover">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>N° astilleros</th>
    </tr>
  
      <?php
        foreach ($info_caps as $info_cap) {
          echo "<tr><td>$info_cap[0]</td><td>$info_cap[1]</td><td>$info_cap[2]</td></td></tr>";
      }
      ?><table class="table table-striped table-hover">
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>N° astilleros</th>
      </tr>
    
        <?php
          foreach ($info_jefes as $info_jefe) {
            echo "<tr><td>$info_jefe[0]</td><td>$info_jefe[1]</td><td>$info_jefe[2]</td></td></tr>";
        }
        ?>
</div>
</body>

</html>