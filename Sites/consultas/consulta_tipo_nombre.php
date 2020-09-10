<?php include('../templates/header.html');   ?>

<body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

	$tipo = $_POST["tipo_elegido"];
	$nombre = $_POST["nombre_naviera"];

 	$query = "SELECT nombre, pais FROM navieras WHERE pais LIKE '%$pais%' AND nombre LIKE '%$nombre%';";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>

	<table>
    <tr>
      <th>NOMBRE</th>
      <th>PAIS</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
  		echo "<tr> <td>$naviera[0]</td> <td>$naviera[1]</td> </tr>";
	}
  ?>
	</table>

<?php include('../templates/footer.html'); ?>
