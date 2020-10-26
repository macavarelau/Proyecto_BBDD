<?php include('../templates/header.html');   ?>

<body>
<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

 	$query = "SELECT DISTINCT nombre, país FROM navieras;";
	$result = $db36 -> prepare($query);
	$result -> execute();
  $navieras = $result -> fetchAll();
  ?>
  
    <br/><br/>
	<h2 class="font-weight-bolder" >Aquí podrá ver lista con los nombres de todas las navieras:</h2>
    <br/><br/>
  <table class="table table-striped table-hover">
    
    <tr>
      <th>NOMBRE</th>
    </tr>
  <?php
	foreach ($navieras as $naviera) {
      $link = "chttp://codd.ing.puc.cl/~grupo36/consultas/consulta_2.php";
      echo "<tr> <td>$naviera[0]</td> <td onClick = $link>Ver</td></tr>"; 
      
    }
      ?>
</table>


<?php include('../templates/footer.html'); ?>