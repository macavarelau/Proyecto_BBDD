<?php 
  session_start();
  include('../templates/header.html');
  $user_passport = $_SESSION['user_passport'];   ?>
  
<body>
<div class="container">

<?php

  #$query = "SELECT nombre, edad, sexo, pasaporte, nacionalidad from usuarios where pasaporte = '$user_passport';";
  require("../config/conexion.php");
  $query = "SELECT * FROM navieras;";
  
  $result = $db36 -> prepare($query);
  echo "\nPDO::errorInfo():\n";
  print_r($db36->errorInfo());
  $result -> execute();
  $user = $result -> fetchAll();


  foreach ($user as $u) {
      echo "<h1>$u[0]</h1><h2>$u[1]</h2><h1>$u[2]</h1><h2>$u[3]</h2><h1>$u[4]</h1>";
  }
?>
</div>
</body>

</html>