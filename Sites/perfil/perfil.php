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
  print_r($db36->errorInfo());
  $result -> execute();
  $user = $result -> fetchAll();


  foreach ($user as $u) {
      echo "Nombre: $u[0]<br>Edad: $u[1]<br>Sexo: $u[2]<br>Pasaporte: $u[3]<br>Nacionalidad: $u[4]";
  }
?>
</div>
</body>

</html>