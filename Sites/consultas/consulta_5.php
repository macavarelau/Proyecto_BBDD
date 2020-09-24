<?php include('../templates/header.html');   ?>

<body>

<div class="container">

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");

  #Se obtiene el valor del input del usuario
  $cargo = $_POST["cargo"];
  $genero = $_POST["genero"];
  $puerto = $_POST["puerto"];

  #Se construye la consulta como un string
  $query = "SELECT DISTINCT personal.pid, personal.nombre, personal.edad, personal.cargo, personal.genero, personal.nacionalidad, personal.pasaporte from personal, tiene, buques, atraques, puertos where personal.genero = '$genero' and personal.cargo = '$cargo' and personal.pid = tiene.pid and buques.bid = tiene.bid and atraques.abid = buques.bid and puertos.ptid = atraques.puerto and UPPER(puertos.pnombre) like UPPER('%$puerto%');";
 
  #Se prepara y ejecuta la consulta. Se obtienen TODOS los resultados
	$result = $db -> prepare($query);
	$result -> execute();
	$buques = $result -> fetchAll();
  ?>

<br/><br/>
	<h2 class="font-weight-bolder" >Tabla de personal que son <?php echo "$cargo" ?>, <?php echo "$genero" ?> y han estado en el puerto "<?php echo "$puerto" ?>":</h2>
<br/><br/>

<table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>NOMBRE</th>
      <th>EDAD</th>
      <th>CARGO</th>
      <th>GÉNERO</th>
      <th>NACIONALIDAD</th>
      <th>PASAPORTE</th>
    </tr>
  
      <?php
        // echo $pokemones;
        foreach ($buques as $buque) {
          echo "<tr><td>$buque[0]</td><td>$buque[1]</td><td>$buque[2]</td><td>$buque[3]</td><td>$buque[4]</td><td>$buque[5]</td><td>$buque[6]</td></tr>";
      }
      ?>
      
  </table>


<?php include('../templates/footer.html'); ?>
