<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Buquepedia Puertopedia</title>
    <meta name="description" content="Una aplicación web para saber toda la info importante de los bos buques, navieras y puertos."/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>

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

  ?>
  <body id="top">
    <div class="page-content">
      <div>
<div class="da-section da-work bg-secondary" id="learn">
  <div class="container">
    <div class="h3 pb-3 text-white" data-aos="fade-up">PERFIL</div>
    <p class="px-5 pb-5 text-white" data-aos="fade-up">Toda la info importante:</p>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3" data-aos="flip-left">
          <table class="table">
              <thead>
                <tr>
                  <?php
                  foreach ($user as $u) {
                      echo "Nombre: $u[0]<br>Edad: $u[1]<br>Sexo: $u[2]<br>Pasaporte: $u[3]<br>Nacionalidad: $u[4]<br><br>";
                  }
                  ?>
                </tr>
              </thead>
              <tbody>
            </table>
      </div>
    </div>
  </div>
</div>
<footer class="bg-primary da-section">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-4">
            <div class="h2">Hello!</div>
            <p class="mb-0">info@digitalagency.com</p>
            <p>+1 502-257-1157</p>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Team</div>
            <ul>
              <li><a class="da-social-link" >Benja Guiloff</a></li>
              <li><a class="da-social-link" >Maca Varela</a></li>
              <li><a class="da-social-link" >Sam Weinstein</a></li>
              <li><a class="da-social-link" >Lucas Zalaquett</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Copyright</div>
            <p>&copy; Grupo 38&85 Co. All rights reserved.</p>
            <p>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
          </div>
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
  <?php
  $query_cap = "SELECT distinct buques.bid as id_buque, buques.patente as patente_buque, buques.nombre as nombre_buque, buques.giro as tipo_buque, navieras.nombre as nombre_naviera from buques, navieras, tiene, posee, personal, usuarios where buques.bid = posee.bid and posee.bid = tiene.bid and posee.nid = navieras.nid and personal.pid = tiene.pid and lower(personal.cargo) like '%cap%' and personal.pasaporte = '$user_passport';";
  $result_cap = $db36 -> prepare($query_cap);
  $result_cap -> execute();
  $info_caps = $result_cap -> fetchAll();
  $query_jefe = "SELECT trabajaen.trut, trabajaen.instalacion_id from trabajaen where trabajaen.trut = '$user_passport' and trabajaen.jefe = '1';";
  $result_jefe = $db85 -> prepare($query_jefe);
  $result_jefe -> execute();
  $info_jefes = $result_jefe -> fetchAll();
  
  $cargo = 0; # 0 si no es nada, 1 si es cap y 2 si es jefe;
  
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
</html>