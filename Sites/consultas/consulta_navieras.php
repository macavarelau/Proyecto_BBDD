<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT nombre, país FROM navieras;";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>
	<h1>Aquí podrá ver lista con los nombres de todas las navieras:</h1>
	<table class="table">
    <tr>
      <th>NOMBRE</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
  		echo "<tr> <td>$naviera[0]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>