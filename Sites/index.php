<?php include('templates/header.html');   ?>

<body>
<div class="jumbotron p-3 my-3 bg-info text-white">
  <br/>
  <h1>Buquepedia</h1>
  <p >En esta página podras encontrar toda la información que desees respecto a los buques registrados en la ACMB.</p>
</div>
<div class="container">

  <br>
<!-- CONSULTA 1-->

<div class="container p-5 my-5 bg-primary-50 text-white">
  <h3 >Ver todas las Navieras</h3>

  <form  action="consultas/consulta_1.php" method="post">
    <br/>
    <br>
    <button type="submit" class="btn btn-primary">Ver</button>

  </form>
  </div>
  
  <br>
  <br>
  <!-- CONSULTA 2-->
  <h3 >Buscar Buques según Naviera</h3>

  <form  action="consultas/consulta_2.php" method="post">
    <br/>
    <label for="naviera">Naviera:</label>
    <input class="form-control" id="naviera" placeholder="nombre naviera" type="text" name="nombre_naviera">
    <br/>
    <button type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>
  

  <!-- CONSULTA 3-->
  <h3 >Buscar Buques según Puerto</h3>

  <form  action="consultas/consulta_3.php" method="post">
    <br/>
    <label for="puerto">Puerto:</label>
    <input class="form-control" id="puerto" placeholder="nombre puerto" type="text" name="nombre_puerto">
    <br>
    <label for="año">Año:</label>
    <select class="form-control" id="año" name="año">
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
    <button  type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>
  

  <!-- CONSULTA 4-->

  <h3 >Buscar Buques que comparten tiempos y puertos</h3>

<form  action="consultas/consulta_4.php" method="post">
  <br/>
  Buque:
  <input class="form-control"type="text" name="nombre_buque">
  <br>
  Puerto:
  <input class="form-control"type="text" name="nombre_puerto">
  <br/>
  <button  type="submit" class="btn btn-primary">Ver</button>

</form>

<br>
<br>

  <!-- CONSULTA 5-->

  <h3 >Buscar personal por cargo, género y puerto</h3>

<form  action="consultas/consulta_5.php" method="post">
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
  <input class="form-control"type="text" name="puerto">
  <br/>
  <button  type="submit" class="btn btn-primary">Ver</button>

</form>

<br>
<br>

  <!-- CONSULTA 6-->
  <h3 >Buscar buques de algún tipo con mayor cantidad de personal</h3>

  <form  action="consultas/consulta_6.php" method="post">
    <br/>
    Tipo:
    <select class="form-control" id="sel1" name="tipo">
        <option>pesquero</option>
        <option>carga</option>
        <option>petrolero</option>
      </select>
    <br/>
    <button  type="submit" class="btn btn-primary">Ver</button>

  </form>

  <br>
  <br>
  <br>
</body>

</html>
