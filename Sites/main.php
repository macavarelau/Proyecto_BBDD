<?php include('templates/header.html');   ?>

<body>
<div class="container-fluid" style="position: relative;padding-left: 0px;padding-right: 0px;">
  
  <div class="container-fluid middle center" style="background: rgba(255, 255, 255, 0.9); position: absolute; margin-top: 15%; padding: 5%;">
    
      <h1 align="center"><b>B U Q U E P E D I A</b></h1>
      <p align="center">En esta página podras encontrar toda la información que desees respecto a los buques registrados en la ACMB.</p>
  
  </div>
  <?php
  echo ' 
  <img class="img-fluid mx-auto d-block" src="buque_2.jpg" title="Buque" style="width:200%" />
  ';
  ?>
</div>


<div class="container">
  <br>
<!-- CONSULTA 1-->

<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
  <h3 >Ver todas las <b>navieras</b></h3>

  <form  action="consultas/consulta_1.php" method="post">
    <br/>
    <br>
    <button type="submit" class="btn btn-dark">Ver</button>

  </form>
  </div>
 
  <br>
  <!-- CONSULTA 2-->
  <div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
    <h3 >Buscar <b>buques</b> según <b>naviera</b></h3>

  <form  action="consultas/consulta_2.php" method="post">
    <br/>
    <label for="naviera">Naviera:</label>
    <input class="form-control" id="naviera" placeholder="Nombre naviera" type="text" name="nombre_naviera">
    <br/>
    <button type="submit" class="btn btn-dark">Ver</button>

  </form>
  </div>

  <br>
  
  <!-- CONSULTA 3-->
  <div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
    <h3 >Buscar <b>buques</b> según <b>puerto</b></h3>

  <form  action="consultas/consulta_3.php" method="post">
    <br/>
    <label for="puerto">Puerto:</label>
    <input class="form-control" id="puerto" placeholder="Nombre puerto" type="text" name="nombre_puerto">
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
    <button  type="submit" class="btn btn-dark">Ver</button>

  </form>
  </div>

  <br>
  
  <!-- CONSULTA 4-->
<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
  <h3 >Buscar <b>buques</b> que comparten tiempos y <b>puerto</b></h3>

<form  action="consultas/consulta_4.php" method="post">
  <br/>
  <label for="buque">Buque:</label>
  <input class="form-control" id="buque" placeholder="Nombre buque" type="text" name="nombre_buque">
  <br>
  <label for="puerto">Puerto:</label>
  <input class="form-control"  id="puerto" placeholder="Nombre puerto" type="text" name="nombre_puerto">
  <br/>
  <button  type="submit" class="btn btn-dark">Ver</button>

</form>
</div>

<br>

  <!-- CONSULTA 5-->
<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
  <h3 >Buscar <b>personal</b> por <b>cargo</b>, <b>género</b> y <b>puerto</b></h3>

<form  action="consultas/consulta_5.php" method="post">
  <br/>
  <label for="cargo">Cargo:</label>
  <select class="form-control" id="cargo" name="cargo">
      <option>marinero</option>
      <option>capitán</option>
    </select>
    <br>
  <label for="genero">Género:</label>
  <select class="form-control" id="genero" name="genero">
      <option>hombre</option>
      <option>mujer</option>
    </select>
    <br>
  <label for="puerto">Puerto:</label>
  <input class="form-control"  id="puerto" placeholder="Nombre puerto" type="text" name="puerto">
  <br/>
  <button  type="submit" class="btn btn-dark">Ver</button>

</form>
</div>

<br>

  <!-- CONSULTA 6-->
  <div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
<h3 >Buscar <b>buques</b> según <b>tipo</b>, con mayor cantidad de personal</h3>

<form  action="consultas/consulta_6.php" method="post">
  <br/>
  <label for="tipo">Tipo:</label>
  <select class="form-control" id="tipo" name="tipo">
      <option>pesquero</option>
      <option>carga</option>
      <option>petrolero</option>
    </select>
  <br/>
  <button  type="submit" class="btn btn-dark">Ver</button>
  </form>
</div>
<br>
    
<!-- CONSULTA de prueba-->
<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
<h3 >Buscar <b>buques</b> según <b>tipo</b>, con mayor cantidad de personal</h3>

<form  action="consultas/consulta_p.php" method="post">
  <br/>
  <label for="tipo">Tipo:</label>
  <select class="form-control" id="tipo" name="tipo">
      <option>xxxxxxx</option>
      <option>carga</option>
      <option>petrolero</option>
    </select>
  <br/>
  <button  type="submit" class="btn btn-dark">Ver</button>

</form>
</div>

<!-- CONSULTA prueba 2-->

<div class="container p-5 my-5 text-black " style="background: rgba(214, 213, 208, 95);">
  <h3 >Ver todas las <b>personas</b></h3>

  <form  action="consultas/consulta_p2.php" method="post">
    <br/>
    <br>
    <button type="submit" class="btn btn-dark">Ver</button>

  </form>
  </div>
 

  <br>
  <br>
</body>

</html>
