<?php include('../templates/header.html');   ?>

<body>
<div class="container">
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $tipo = $_POST["tipo"];

  #Se construye la consulta como un string
  $query = "SELECT * FROM buques WHERE giro = '$tipo' AND personal = (SELECT max(personal) FROM buques WHERE giro = '$tipo');";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<br/><br/>
	<h2 class="font-weight-bolder" >Tabla de buques <?php echo "$tipo" ?>s que poseen más personas trabajando:</h2>
<br/><br/>

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
    

<?php include('../templates/footer.html'); ?>
