<?php include('../templates/header.html');   ?>

<body>
<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT nombre, país FROM navieras;";
	$result = $db -> prepare($query);
	$result -> execute();
	$navieras = $result -> fetchAll();
  ?>
  
    <br/><br/>
	<h2 class="font-weight-bolder" >Aquí podrá ver lista con los nombres de todas las navieras:</h2>
    <br/><br/>
	<table class="table table-striped">
    <tr>
      <th>NOMBRE</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
      echo "<tr> <td>$naviera[0]</td> </tr>";
    }
      ?>
</table>

</div>
<?php include('../templates/footer.html'); ?>