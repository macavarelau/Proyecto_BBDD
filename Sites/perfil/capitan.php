<?php 
  session_start();
  $user_passport = $_SESSION['user_passport'];   ?>
  
<body>
<div class="container">
<h1>ESTE ES CAPITAN</h1>

<?php
    require("../config/conexion.php");

    $query = "";
    $result = $db36 -> prepare($query);
    $result -> execute();
    $user = $result -> fetchAll();

    
?>
</body>
