<?php include('../templates/header.html');   ?>

<body>
<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT DISTINCT pid, nombre FROM dblink('host=localhost user=grupo85 dbname=grupo85e3 password=pieza312 port=5432', 'SELECT rut as pid, nombre FROM personal') UNION SELECT DISTINCT pid, nombre FROM personal;";
	$result = $db36 -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>
  
    <br/><br/>
	<h2 class="font-weight-bolder" >Aquí podrá ver lista con los nombres de todas las navieras:</h2>
    <br/><br/>
  <table class="table table-striped table-hover">
    
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
      echo "<tr> <td>$naviera[0]</td> <td>$naviera[1]</td> </tr>";
    }
      ?>
</table>


<?php include('../templates/footer.html'); ?>