<?php include('../templates/header.html');   ?>

<body>

<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $nombre_puerto = $_POST["nombre_puerto"];
  $año = $_POST["año"];

  #Se construye la consulta como un string
  $query = "SELECT buques.bid, buques.nombre, buques.patente, buques.pais, buques.giro, buques.personal FROM buques, atraques, puertos WHERE atraques.abid = buques.bid AND atraques.puerto = puertos.ptid AND UPPER(puertos.pnombre) LIKE UPPER('%$nombre_puerto%') AND Atraques.ingreso BETWEEN '$año-01-01' AND '$año-12-31';";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>PATENTE</th>
      <th>PAÍS</th>
      <th>GIRO</th>
      <th>N° PERSONAL</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($buques as $buque) {
          echo "<tr><td>$buque[0]</td><td>$buque[1]</td><td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td><td>$buque[5]</td></tr>";
      }
      ?>
      
  </table>

</div>

<?php include('../templates/footer.html'); ?>
