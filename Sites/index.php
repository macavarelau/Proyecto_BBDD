<?php include('templates/header.html');   ?>

<body>
  <h1 class="font-weight-bolder" align="center">Buquepedia</h1>
  <p style="text-align:center;">En esta página podras encontrar toda la información que desees respecto a los buques registrados en la ACMB.</p>

  <br>
<<<<<<< HEAD
<!-- CONSULTA 1-->
=======

  <!-- CONSULTA 1-->
>>>>>>> 41889fc33c9ada2922b398914311e2d877f260ab
  <h3 align="center">Ver todas las Navieras</h3>

  <form align="center" action="consultas/consulta_1.php" method="post">
    <br/>
    <br>
    <button type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>

<<<<<<< HEAD
<!-- CONSULTA 2-->
  <h3 align="center">Buscar buques según naviera</h3>
=======
>>>>>>> 41889fc33c9ada2922b398914311e2d877f260ab

  <!-- CONSULTA 2-->
  <h3 align="center">Buscar Buques según Naviera</h3>

  <form align="center" action="consultas/consulta_2.php" method="post">
    <br/>
    Naviera:
    <input type="text" name="nombre_naviera">
    <br/>
    <button type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>
<<<<<<< HEAD
  <!-- CONSULTA 3-->


  <!-- CONSULTA 4-->


  <!-- CONSULTA 5-->


  <!-- CONSULTA 6-->


  <!-- Consultas viejas-->
  <h3 align="center"> ¿Quieres buscar un Pokemón por tipo y/o nombre?</h3>
=======
  

  <!-- CONSULTA 3-->
  <h3 align="center">Buscar Buques según Puerto</h3>

  <form align="center" action="consultas/consulta_3.php" method="post">
    <br/>
    Puerto:
    <input type="text" name="nombre_puerto">
    <br>
    Año:
    <select class="form-control" id="sel1" name="año">
        <option>2010</option>
        <option>2011</option>
        <option>2012</option>
        <option>2013</option>
        <option>2014</option>
        <option>2015</option>
        <option>2016</option>
        <option>2017</option>
        <option>2018</option>
        <option>2019</option>
        <option>2020</option>
        <option>2021</option>
      </select>
    <br/>
    <button align= "center" type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>
  

  <!-- CONSULTA 4-->

  <!-- CONSULTA 5-->

  <h3 align="center">Buscar personal por cargo, género y puerto</h3>

<form align="center" action="consultas/consulta_5.php" method="post">
  <br/>
  Cargo:
  <select class="form-control" id="sel1" name="cargo">
      <option>marinero</option>
      <option>capitán</option>
    </select>
  Género
  <select class="form-control" id="sel1" name="genero">
      <option>hombre</option>
      <option>mujer</option>
    </select>
  Puerto:
  <input type="text" name="puerto">
  <br/>
  <button align= "center" type="submit" class="btn btn-primary">Ver</button>

</form>

<br>
<br>

  <!-- CONSULTA 6-->
  <h3 align="center">Buscar buques de algún tipo con mayor cantidad de personal</h3>

  <form align="center" action="consultas/consulta_6.php" method="post">
    <br/>
    Tipo:
    <select class="form-control" id="sel1" name="tipo">
        <option>pesquero</option>
        <option>carga</option>
        <option>petrolero</option>
      </select>
    <br/>
    <button align= "center" type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>


>>>>>>> 41889fc33c9ada2922b398914311e2d877f260ab

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
