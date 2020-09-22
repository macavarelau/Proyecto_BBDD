<?php include('../templates/header.html');   ?>

<body>
<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $nombre_puerto = $_POST["nombre_puerto"];
  $año = $_POST["año"];

  #Se construye la consulta como un string
  $query = "SELECT buques.bid, buques.nombre, buques.patente, buques.pais, buques.giro, buques.personal FROM buques, atraques, puertos WHERE atraques.bid = buques.bid AND atraques.puerto = puertos.ptid AND UPPER(puertos.nombre) LIKE UPPER('%$nombre_puerto%') AND Atraques.ingreso BETWEEN '$año-01-01' AND '$año-12-31';";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$pokemones = $result -> fetchAll();
  ?>

  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Altura</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($pokemones as $p) {
          echo "<tr><td>$p[0]</td><td>$p[1]</td><td>$p[2]</td></tr>";
      }
      ?>
      
  </table>

<?php include('../templates/footer.html'); ?>
