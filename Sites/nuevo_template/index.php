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
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#services">Services</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#projects">Projects</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#gallery">Gallery</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <div class="da-home-page-text" data-aos="fade-right" data-aos-duration="1000">
        <div class="container">
          <div class="col-md-10 col-sm-12 px-0 mx-0">
            <h2 class="display-3" style="margin-left:-6px;">Buquepediaa</h2>
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
    <p class="px-5 pb-5 text-center text-white" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    <div class="row" data-aos="flip-left">
      <form aling="center" class="px-5 pb-5 text-center text-whiteaction=" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class='table table-hover table-bordered table-center'>
            <tr>
                <td class="px-5 pb-5 text-center text-white">Número de pasaporte</td>
                <td><input type='text' name='user_passport' class='form-control' /></td>
            </tr>
            <tr>
                <td class="px-5 pb-5 text-center text-white">Contraseña</td>
                <td><input type='password' name='password' class='form-control' /></td>
            </tr>
            <tr>
                <td class="px-5 pb-5 text-center text-white">¿No tienes una cuenta? Regístrate <a href= "../sign_in.php">aquí</a>.</td>
                <td>
                    <input type='submit' value='Iniciar Sesión' name='login' class='btn btn-primary' />
                    <!-- <a href='index.php' class='btn btn-danger'>Back to read products</a> -->
                </td>
            </tr>
        </table>
      </form>
      
    </div>
  </div>
</div>
<div class="da-contact" id="contact">
  <div class="da-contact-detail" data-aos="zoom-in" data-aos-duration="1000">
    <div class="container">
      <div class="card py-4 px-4">
        <div class="h4 pb-4">Contact Us</div>
        <div class="row">
          <div class="col-md-7 col-sm-12 mb-3">
            <div class="da-contact-message">
              <form action="https://formspree.io/your@email.com" method="POST">
                <div class="row">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <input class="mr-3 form-control" type="text" name="first-name" placeholder="*First Name" required="required"/>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <input class="form-control" type="text" name="last-name" placeholder="Last Name"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="text" name="Subject" placeholder="*Subject" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <input class="form-control" type="email" name="_replyto" placeholder="*E-mail" required="required"/>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col">
                    <textarea class="form-control" name="message" placeholder="*Your Message" rows="4" required="required"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-primary" type="submit">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5">
            <p>Non dis torquent conubia neque duis enim lectus, dictumst bibendum nam lacinia faucibus sollicitudin consequat tortor, mattis taciti sem arcu pellentesque quisque.</p>
            <p><b>Address:</b> 568, Hill Road, USA</p>
            <p><b>Phone:</b> +1 802-457-1144</p>
            <p><b>Email:</b> info@example.com</p>
            <p><b>Fax:</b> +1 502-257-1156</p>
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
  require("config/conexion.php");

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
            echo '<script type="text/javascript">location.href = "home.php";</script>';
            exit();
         }
        if($usuarios_2[0][6] != $user_password){
            echo '<script type="text/javascript"> alert("Contraseña incorrecta. Intente nuevamente.")</script>';
        }
     }         
  }
?>