<?php include('templates/header.html');   ?>

<body>
<div class="container-fluid" style="position: relative;padding-left: 0px;padding-right: 0px;">

<div class="container-fluid middle center" style="background: rgba(255, 255, 255, 0.9); position: absolute; margin-top: 15%; padding: 5%;">
    
    <h1 align="center"><b>B U Q U E P E D I A</b></h1>
    <p align="center">En esta página podras encontrar toda la información que desees respecto a los buques registrados en la ACMB.</p>

</div>
<?php
echo ' 
<img class="img-fluid mx-auto d-block" src="buque_2.jpg" title="Buque" style="width:200%" />
';
?>
</div>
<h3>INICIA SESIÓN</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-bordered table-center'>
        <tr>
            <td>Número de pasaporte</td>
            <td><input type='text' name='user_passport' class='form-control' /></td>
        </tr>
        <tr>
            <td>Contraseña</td>
            <td><input type='password' name='password' class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Iniciar Sesión' name='login' class='btn btn-primary' />
                <!-- <a href='index.php' class='btn btn-danger'>Back to read products</a> -->
            </td>
        </tr>
    </table>
</form>
</div>
</body>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("config/conexion.php");

  if(isset($_POST['login']))
  {
    $user_passport = $_POST["user_passport"];
    $user_password = $_POST["password"];

    $query = "SELECT * FROM usuarios WHERE pasaporte='$user_passport';";
    $result = $db36 -> query($query);
    $result -> execute();
    $usuarios = $result -> fetchAll();
    if (!$usuarios[0]){
        echo '<script type="text/javascript"> alert("Usted no está registrado.")</script>';
    }
    if ($usuarios[0]){
        $query_2 = "SELECT * FROM usuarios WHERE pasaporte='$user_passport' AND contrasena='$user_password';";
        $result_2 = $db36 -> query($query_2);
        $result_2 -> execute();
        $usuarios_2 = $result_2 -> fetchAll();
        if($usuarios_2[6] == $user_password){
            echo '<script type="text/javascript"> alert("¡Bienvenido/a!")</script>';
         }
        if($usuarios_2[6] != $user_password){
            echo '<script type="text/javascript"> alert("Contraseña incorrecta. Intente nuevamente.")</script>';
        }
     }         
  }
  ?>