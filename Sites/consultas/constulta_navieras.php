<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$país = $_POST["tipo_elegido"];
	$nombre = $_POST["nombre_naviera"];

 	$query = "SELECT nombre, país FROM navieras WHERE UPPER(país) LIKE UPPER('%$país%') AND nombre LIKE '%$nombre%';";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>

	<table class="table">
    <tr>
      <th>NOMBRE</th>
      <th>PAÍS</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
  		echo "<tr> <td>$naviera[0]</td> <td>$naviera[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>