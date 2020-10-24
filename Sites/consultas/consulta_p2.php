<?php include('../templates/header.html');   ?>

<body>
<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");
  require("../config/data.php");

 	$query = "SELECT DISTINCT rut, nombre FROM personal;";
	$result = $db85 -> prepare($query);
	$result -> execute();
	$personas = $result -> fetchAll();
  ?>
  
    <br/><br/>
	<h2 class="font-weight-bolder" >Aquí podrá ver lista con los nombres de todas las $personas:</h2>
    <br/><br/>
  <table class="table table-striped table-hover">
    
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
    </tr>
  <?php
	foreach ($personas as $persona) {
      echo "<tr> <td>$persona[0]</td> <td>$persona[1]</td> </tr>";
    }
      ?>
</table>


<?php include('../templates/footer.html'); ?>