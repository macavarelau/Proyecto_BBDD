<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $tipo = $_POST["tipo"];

  #Se construye la consulta como un string
  $query = "SELECT * from buques where giro = '%$tipo%' and personal = (select max(personal) from buques where giro = '%$tipo%');";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<table class="table">
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

<?php include('../templates/footer.html'); ?>
