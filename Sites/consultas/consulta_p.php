<?php include('../templates/header.html');   ?>

<body>

<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $nombre_buque = $_POST["nombre_buque"];
  $nombre_puerto = $_POST["nombre_puerto"];
  $año = $_POST["año"];

  #Se construye la consulta como un string
  $query = "SELECT distinct puertos.puerto_id, puertos.nombre, count(astilleros.instalacion_id) as cant_astilleros FROM puertos, instalaciones, astilleros where puertos.puerto_id = instalaciones.puerto_id and instalaciones.instalacion_id = astilleros.instalacion_id group by puertos.puerto_id having count(astilleros.instalacion_id) >= $x order by puertos.puerto_id; 
  ";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db85 -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<br/><br/>
	<h2 class="font-weight-bolder" >Tabla de buques que han estado en "<?php echo "$nombre_puerto" ?>" al mismo tiempo que el buque "<?php echo "$nombre_buque" ?>":</h2>
<br/><br/>


<table class="table table-striped table-hover">
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>N° astilleros</th>
    </tr>
  
      <?php
        foreach ($buques as $buque) {
          echo "<tr><td>$buque[0]</td><td>$buque[1]</td><td>$buque[2]</td></td></tr>";
      }
      ?>
      
  </table>


<?php include('../templates/footer.html'); ?>
