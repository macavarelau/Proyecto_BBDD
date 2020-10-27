<?php 
  session_start();
  include('../templates/header.html');
  $user_passport = $_SESSION['user_passport'];   ?>
  
<body>
<div class="container">

<h1>ESTE ES JEFE</h1>

<?php
    require("../config/conexion.php");

    $query = "";
    $result = $db36 -> prepare($query);
    $result -> execute();
    $user = $result -> fetchAll();

    
?>
</body>
