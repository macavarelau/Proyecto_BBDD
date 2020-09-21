<?php include('templates/header.html');   ?>

<body>
  <h1 align="center">Buquepedia</h1>
  <p style="text-align:center;">En esta página podras encontrar toda la información que desees respecto a los buques registrados en la ACMB.</p>

  <br>

  <h3 align="center"> Ver todas las Navieras</h3>

  <form align="center" action="consultas/consulta_navieras.php" method="post">
    Tipo:
    <input type="text" name="tipo_elegido">
    <br/>
    Nombre:
    <input type="text" name="nombre_naviera">
    <br/><br/>
    <!--input type="submit" value="Buscar"-->
    <button type="submit" class="btn btn-primary">Buscar</button>

  </form>

  <h3 align="center"> ¿Quieres buscar un Pokemón por tipo y/o nombre?</h3>

  <form align="center" action="consultas/consulta_tipo_nombre.php" method="post">
    Tipo:
    <input type="text" name="tipo_elegido">
    <br/>
    Nombre:
    <input type="text" name="nombre_naviera">
    <br/><br/>
    <!--input type="submit" value="Buscar"-->
    <button type="submit" class="btn btn-primary">Buscar</button>

  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres buscar un Pokemón por su ID?</h3>

  <form align="center" action="consultas/consulta_stats.php" method="post">
    Id:
    <input type="text" name="id_elegido">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  
  <br>
  <br>
  <br>

  <h3 align="center"> ¿Quieres conocer los Pokemones más altos que: ?</h3>

  <form align="center" action="consultas/consulta_altura.php" method="post">
    Altura Mínima:
    <input type="text" name="altura">
    <br/><br/>
    <input type="submit" value="Buscar">
  </form>
  <br>
  <br>
  <br>

  <h3 align="center">¿Quieres buscar todos los pokemones por tipo?</h3>

  <?php
  #Primero obtenemos todos los tipos de pokemones
  require("config/conexion.php");
  $result = $db -> prepare("SELECT DISTINCT tipo FROM pokemones;");
  $result -> execute();
  $dataCollected = $result -> fetchAll();
  ?>

  <form align="center" action="consultas/consulta_tipo.php" method="post">
    Seleccinar un tipo:
    <select name="tipo">
      <?php
      #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
      foreach ($dataCollected as $d) {
        echo "<option value=$d[0]>$d[0]</option>";
      }
      ?>
    </select>
    <br><br>
    <input type="submit" value="Buscar por tipo">
  </form>

  <br>
  <br>
  <br>
  <br>
</body>
</html>
