<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
<input type='password' name='password' class='form-control'>
<input type="submit" name='contrasena' value='Cambiar Contraseña' class='btn btn-primary' />
</form>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("config/conexion.php");
  if(isset($_POST['contrasena']))
  {
    $user_passport = $_POST["user_passport"];
    $user_password = $_POST["password"];
    $_SESSION['user_passport'] = $user_passport;

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
        if($usuarios_2[0][6] == $user_password){
            echo '<script type="text/javascript"> alert("¡Bienvenido/a!")</script>';
            echo '<script type="text/javascript">location.href = "home.php";</script>';
            exit();
         }
        if($usuarios_2[0][6] != $user_password){
            echo '<script type="text/javascript"> alert("Contraseña incorrecta. Intente nuevamente.")</script>';
        }
     }         
  }

  ?>