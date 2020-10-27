<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digital Agency</title>
    <meta name="description" content="A Digital Agency Website landing page template built by TemplateFlip.com"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" rel="stylesheet">
    <link href="css/aos.css" rel="stylesheet">
    <link href="css/ekko-lightbox.css" rel="stylesheet">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link href="styles/main.css" rel="stylesheet">
  </head>
  <body id="top">
    <header>
      <div class="container pt-4">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent px-0"><a class="text-white navbar-brand" href="#">Digital Agency</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#">Home</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
          <div class="col-md-10 col-sm-12 px-0 mx-0">
            <h2 class="display-3" style="margin-left:-6px;">Buquepedia</h2>
            <h3 class="h5 mt-3">Inicia sesión para navegar en el este paraiso digital</h3><a class="smooth-scroll btn btn-outline-light mt-4" href="#learn">GO!</a>
          </div>
        </div>
      </div>
    </header>
    <div class="page-content">
      <div>
<div class="da-section da-work bg-secondary" id="learn">
  <div class="container">
    <div class="h3 pb-3 text-center text-white" data-aos="fade-up">Logéate</div>
    <div class="center" data-aos="flip-left">
      <div class="card py-4 px-4">
      <form aling="center" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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
            <td>¿No tienes una cuenta? Regístrate <a class="smooth-scroll mt-4" href= "#contact">aquí</a>.</td>
            <td>
              <input type='submit' value='Iniciar Sesión' name='login' class='btn btn-primary' />
            </td>
          </tr>
          
        </table>
      </form>
      </div>
    </div>
  </div>
</div>
<div class="da-contact" id="contact">
  <div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container">
      <div class="card py-4 px-4">
        <div class="h4 pb-4">Contact Us</div>
          <div class="col-md-7 col-sm-12 mb-3">
            <div class="da-contact-message">
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
              <table class='table table-hover table-bordered table-center'>
                  <tr>
                      <td>Nombre</td>
                      <td><input type='text' name='user_name' class='form-control' /></td>
                  </tr>
                  <tr>
                      <td>Edad</td>
                      <td><input type='number' name='user_age' class='form-control' /></td>
                  </tr>
                  <tr>
                      <td>Sexo</td>
                      <td><select name="user_gender">
                          <option value="">-- Selecciona tu sexo --</option>
                          <option value="hombre">Hombre</option>
                          <option value="mujer">Mujer</option>
                      </select>
                      </td>
                  </tr>
                  <tr>
                      <td>Número de pasaporte</td>
                      <td><input type='text' name='user_passport' class='form-control' /></td>
                  </tr>
                  <tr>
                      <td>Nacionalidad</td>
                      <td>
                      <!--<input type='option' name='nacionalidad' class='form-control' />-->
                      <select name="user_nationality">
                          <option value="">-- Selecciona tu nacionalidad --</option>
                          <option value="AFGANA">AFGANA</option>
                          <option value="ALEMANA">ALEMANA</option>
                          <option value="AMERICANA">AMERICANA</option>
                          <option value="ANGOLESA">ANGOLESA</option>
                          <option value="ARABE">ARABE</option>
                          <option value="ARGELIANA">ARGELIANA</option>
                          <option value="ARGENTINA">ARGENTINA</option>
                          <option value="AUSTRALIANA">AUSTRALIANA</option>
                          <option value="AUSTRIACA">AUSTRIACA</option>
                          <option value="BAHAMEÑA">BAHAMEÑA</option>
                          <option value="BELGA">BELGA</option>
                          <option value="BELICEÑA">BELICEÑA</option>
                          <option value="BHUTANESA">BHUTANESA</option>
                          <option value="BIRMANA">BIRMANA</option>
                          <option value="BOLIVIANA">BOLIVIANA</option>
                          <option value="BOTSWANESA">BOTSWANESA</option>
                          <option value="BRASILEÑA">BRASILEÑA</option>
                          <option value="BRITANICA">BRITANICA</option>
                          <option value="BULGARA">BULGARA</option>
                          <option value="BURKINA FASO">BURKINA FASO</option>
                          <option value="BURUNDESA">BURUNDESA</option>
                          <option value="CAMBOYANA">CAMBOYANA</option>
                          <option value="CAMERUNESA">CAMERUNESA</option>
                          <option value="CANADIENSE">CANADIENSE</option>
                          <option value="CHADIANA">CHADIANA</option>
                          <option value="CHECOSLOVACA">CHECOSLOVACA</option>
                          <option value="CHILENA">CHILENA</option>
                          <option value="CHINA">CHINA</option>
                          <option value="CHIPRIOTA">CHIPRIOTA</option>
                          <option value="COLOMBIANA">COLOMBIANA</option>
                          <option value="COMORENSE">COMORENSE</option>
                          <option value="CONGOLESA">CONGOLESA</option>
                          <option value="COSTARRICENSE">COSTARRICENSE</option>
                          <option value="CUBANA">CUBANA</option>
                          <option value="DANESA">DANESA</option>
                          <option value="DE BAHREIN">DE BAHREIN</option>
                          <option value="DE BARBADOS">DE BARBADOS</option>
                          <option value="DE BENNIN">DE BENNIN</option>
                          <option value="DE CABO VERDE">DE CABO VERDE</option>
                          <option value="DEL QATAR">DEL QATAR</option>
                          <option value="DE SANTO TOME">DE SANTO TOME</option>
                          <option value="DE SEYCHELLES">DE SEYCHELLES</option>
                          <option value="DE ZIMBAWI">DE ZIMBAWI</option>
                          <option value="DOMINICA">DOMINICA</option>
                          <option value="DOMINICANA">DOMINICANA</option>
                          <option value="EGIPCIA">EGIPCIA</option>
                          <option value="ESLOVACA">ESLOVACA</option>
                          <option value="ESLOVAQUIA">ESLOVAQUIA</option>
                          <option value="ESLOVENIA">ESLOVENIA</option>
                          <option value="ESPAÑOLA">ESPAÑOLA</option>
                          <option value="ESTADOUNIDENSE">ESTADOUNIDENSE</option>
                          <option value="ESTONIA">ESTONIA</option>
                          <option value="ETIOPE">ETIOPE</option>
                          <option value="FIJIANA">FIJIANA</option>
                          <option value="FILIPINA">FILIPINA</option>
                          <option value="FINLANDESA">FINLANDESA</option>
                          <option value="FRANCESA">FRANCESA</option>
                          <option value="GABONESA">GABONESA</option>
                          <option value="GAMBIANA">GAMBIANA</option>
                          <option value="GHANATA">GHANATA</option>
                          <option value="GRANADINA">GRANADINA</option>
                          <option value="GRIEGA">GRIEGA</option>
                          <option value="GUINEA">GUINEA</option>
                          <option value="GUINEA ECUATORIANA">GUINEA ECUATORIANA</option>
                          <option value="GUYANESA">GUYANESA</option>
                          <option value="HAITIANA">HAITIANA</option>
                          <option value="HINDU">HINDU</option>
                          <option value="HOLANDESA">HOLANDESA</option>
                          <option value="HONDUREÑA">HONDUREÑA</option>
                          <option value="HUNGARA">HUNGARA</option>
                          <option value="INDONESA">INDONESA</option>
                          <option value="IRANI">IRANI</option>
                          <option value="IRAQUI">IRAQUI</option>
                          <option value="IRLANDESA">IRLANDESA</option>
                          <option value="ISLANDESA">ISLANDESA</option>
                          <option value="ISRAELI">ISRAELI</option>
                          <option value="ITALIANA">ITALIANA</option>
                          <option value="JAMAIQUINA">JAMAIQUINA</option>
                          <option value="JAPONESA">JAPONESA</option>
                          <option value="JORDANA">JORDANA</option>
                          <option value="KENIANA">KENIANA</option>
                          <option value="KIRGUISTAN">KIRGUISTAN</option>
                          <option value="KUWAITI">KUWAITI</option>
                          <option value="LAOSIANA">LAOSIANA</option>
                          <option value="LESOTHENSE">LESOTHENSE</option>
                          <option value="LIBANESA">LIBANESA</option>
                          <option value="LIBERIANA">LIBERIANA</option>
                          <option value="LIBIA">LIBIA</option>
                          <option value="LIECHTENSTENSE">LIECHTENSTENSE</option>
                          <option value="LITUANIA">LITUANIA</option>
                          <option value="MACEDONIA">MACEDONIA</option>
                          <option value="MALASIA">MALASIA</option>
                          <option value="MALAWIANA">MALAWIANA</option>
                          <option value="MALDIVA">MALDIVA</option>
                          <option value="MALIENSE">MALIENSE</option>
                          <option value="MALTESA">MALTESA</option>
                          <option value="MARFILEÑA">MARFILEÑA</option>
                          <option value="MARROQUI">MARROQUI</option>
                          <option value="MAURICIANA">MAURICIANA</option>
                          <option value="MAURITANA">MAURITANA</option>
                          <option value="MEXICANA">MEXICANA</option>
                          <option value="MICRONECIA">MICRONECIA</option>
                          <option value="MOLDOVIA">MOLDOVIA</option>
                          <option value="MONEGASCA">MONEGASCA</option>
                          <option value="MONGOLESA">MONGOLESA</option>
                          <option value="MOZAMBIQUEÑA">MOZAMBIQUEÑA</option>
                          <option value="NAMIBIANA">NAMIBIANA</option>
                          <option value="NAURUANA">NAURUANA</option>
                          <option value="NEPALESA">NEPALESA</option>
                          <option value="NICARAGUENSE">NICARAGUENSE</option>
                          <option value="NIGERIANA">NIGERIANA</option>
                          <option value="NIGERINA">NIGERINA</option>
                          <option value="NORCOREANA">NORCOREANA</option>
                          <option value="NORVIETNAMITA">NORVIETNAMITA</option>
                          <option value="OMANESA">OMANESA</option>
                          <option value="PAKISTANI">PAKISTANI</option>
                          <option value="PANAMEÑA">PANAMEÑA</option>
                          <option value="PAPUENSE">PAPUENSE</option>
                          <option value="PARAGUAYA">PARAGUAYA</option>
                          <option value="PORTUGUESA">PORTUGUESA</option>
                          <option value="PUERTORRIQUEÑA">PUERTORRIQUEÑA</option>
                          <option value="REINO UNIDO">REINO UNIDO</option>
                          <option value="REINO UNIDO(BRIT. DEL EXT.)">REINO UNIDO(BRIT. DEL EXT.)</option>
                          <option value="RUMANA">RUMANA</option>
                          <option value="RWANDESA">RWANDESA</option>
                          <option value="SALOMONESA">SALOMONESA</option>
                          <option value="SALVADOREÑA">SALVADOREÑA</option>
                          <option value="SAMOANA">SAMOANA</option>
                          <option value="SAN MARINENSE">SAN MARINENSE</option>
                          <option value="SANTA LUCIENSE">SANTA LUCIENSE</option>
                          <option value="SENEGALESA">SENEGALESA</option>
                          <option value="SIERRA LEONESA">SIERRA LEONESA</option>
                          <option value="SINGAPORENSE">SINGAPORENSE</option>
                          <option value="SIRIA">SIRIA</option>
                          <option value="SOVIETICA UCRANIANA">SOVIETICA UCRANIANA</option>
                          <option value="SUDAFRICANA">SUDAFRICANA</option>
                          <option value="SUDANESA">SUDANESA</option>
                          <option value="SUDCOREANA">SUDCOREANA</option>
                          <option value="SUECA">SUECA</option>
                          <option value="SUIZA">SUIZA</option>
                          <option value="SURINAMENSE">SURINAMENSE</option>
                          <option value="SWAZI">SWAZI</option>
                          <option value="TAILANDESA">TAILANDESA</option>
                          <option value="TAIWANESA">TAIWANESA</option>
                          <option value="TANZANIANA">TANZANIANA</option>
                          <option value="TOGOLESA">TOGOLESA</option>
                          <option value="TRINITARIA">TRINITARIA</option>
                          <option value="TUNECINA">TUNECINA</option>
                          <option value="TURCA">TURCA</option>
                          <option value="UGANDESA">UGANDESA</option>
                          <option value="URUGUAYA">URUGUAYA</option>
                          <option value="VATICANA">VATICANA</option>
                          <option value="VENEZOLANA">VENEZOLANA</option>
                          <option value="YEMENI">YEMENI</option>
                          <option value="YUGOSLAVA">YUGOSLAVA</option>
                          <option value="ZAIRANA">ZAIRANA</option>
                          <option value="ZAMBIANA">ZAMBIANA</option>                
                          </select>
                          </td>
                  </tr>
                  <tr>
                      <td>Contraseña</td>
                      <td><input type='password' name='password' class='form-control' /></td>
                  </tr>
                  <tr>
                      <td>Confirma contraseña</td>
                      <td><input type='password' name='cpassword' class='form-control' /></td>
                  </tr>
                  <tr>
                      <td></td>
                      <td>
                          <input type='submit' value='Registrarse' name='signin' class='btn btn-primary' />
                          <!-- <a href='index.php' class='btn btn-danger'>Back to read products</a> -->
                      </td>
                  </tr>
              </table>
          </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
    </div>
    <footer class="bg-secondary da-section">
      <div class="container text-white">
        <div class="row">
          <div class="col-md-4">
            <div class="h2">Hello!</div>
            <p class="mb-0">info@digitalagency.com</p>
            <p>+1 502-257-1157</p>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Follow Us</div>
            <ul>
              <li><a class="da-social-link" href="#">Twitter</a></li>
              <li><a class="da-social-link" href="#">Facebook</a></li>
              <li><a class="da-social-link" href="#">Instagram</a></li>
              <li><a class="da-social-link" href="#">Google</a></li>
              <li><a class="da-social-link" href="#">Behance</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <div class="h6 pb-2">Copyright</div>
            <p>&copy; 2018 Digital Agency. All rights reserved.</p>
            <p>Design - <a class="credit" href="https://templateflip.com" target="_blank">TemplateFlip</a></p>
          </div>
        </div>
      </div>
    </footer>
    <div id="scrolltop">
      <button class="btn btn-primary"><span class="icon"><i class="fas fa-angle-up fa-2x"></i></span></button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/ekko-lightbox.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>
</html>

<?php
  #Llama a conexión, crea el objeto PDO y obtiene la variable $db
  require("../config/conexion.php");
  if(isset($_POST['login']))
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
            echo '<script type="text/javascript">location.href = "../home.php";</script>';
            exit();
         }
        if($usuarios_2[0][6] != $user_password){
            echo '<script type="text/javascript"> alert("Contraseña incorrecta. Intente nuevamente.")</script>';
        }
     }         
  }
?>