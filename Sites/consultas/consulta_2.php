<?php include('../templates/header.html');   ?>

<body>
<div class="container">

<?php
  require("../config/conexion.php");

    $nombre_naviera = $_POST["nombre_naviera"];
    
    $query = "SELECT buques.bid, buques.nombre, buques.patente, buques.pais, buques.giro, buques.personal 
    FROM navieras, posee, buques WHERE UPPER(navieras.nombre) LIKE UPPER('%$nombre_naviera%')
    AND buques.bid = posee.bid AND navieras.nid = posee.nid;";
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

  <br/><br/>
	<h2 class="font-weight-bolder" >Aquí podrá ver lista con los nombres de todas las navieras:</h2>
    <br/><br/>

	<table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>PATENTE</th>
      <th>PAÍS</th>
      <th>GIRO</th>
      <th>N° PERSONAL</th>
    </tr>
  <?php
	foreach ($buques as $buque) {
  		echo "<tr> <td>$buque[0]</td> <td>$buque[1]</td> <td>$buque[2]</td> <td>$buque[3]</td> <td>$buque[4]</td> <td>$buque[5]</td> </tr>";
	}
  ?>
	</table>


<?php include('../templates/footer.html'); ?>
