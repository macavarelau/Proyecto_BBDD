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
  $query = "SELECT DISTINCT newtable2.bid, newtable2.nombre, newtable2.patente, newtable2.pais, newtable2.giro, newtable2.personal 
            FROM(SELECT * FROM buques, atraques, puertos WHERE UPPER(buques.nombre) = UPPER('$nombre_buque') AND buques.bid = atraques.abid AND puertos.ptid = atraques.puerto
            AND UPPER(puertos.pnombre) = UPPER('$nombre_puerto')) AS newtable, (SELECT * FROM buques, atraques, puertos WHERE buques.bid = atraques.abid AND
            puertos.ptid = atraques.puerto) AS newtable2 WHERE (newtable2.salida > newtable.ingreso AND newtable2.salida <= newtable.salida) 
            OR (newtable.salida > newtable2.ingreso AND newtable.salida < newtable2.salida AND newtable2.pnombre = newtable.pnombre)";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<br/><br/>
	<h2 class="font-weight-bolder" >Tabla de buques que han estado en "<?php echo "$nombre_puerto" ?>" al mismo tiempo que el buque <?php echo "$nombre_buque" ?>:</h2>
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
        foreach ($buques as $buque) {
          echo "<tr><td>$buque[0]</td><td>$buque[1]</td><td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td><td>$buque[5]</td></tr>";
      }
      ?>
      
  </table>


<?php include('../templates/footer.html'); ?>
