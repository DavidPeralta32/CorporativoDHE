<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

    $result = "";
    if (isset($_POST['submit']))
    {
 //Habilitar phpMailer en los servicios del servidor
      require 'phpMailer/Exception.php';
      require 'phpMailer/PHPMailer.php';
      require 'phpMailer/SMTP.php';

        $mail = new PHPMailer;
        $mail->SMTPDebug = 0;                      
        $mail->isSMTP();                                          
        $mail->Host       = 'smtp..com';  //Añadir protocolo SMTP                       
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'info@corporativodhe.com';          //Aqui se coloca el correo que se va a usar                 
        $mail->Password   = 'C0rp.dhe20';          //Contraseña de correo       
        $mail->SMTPSecure = 'tls';            
        $mail->Port       = 587;   //Colocar puerto

        $mail->setFrom($_POST['email'],$_POST['nombre']);
        $mail->addAddress('info@corporativodhe.com');       //Aqui se coloca el mismo correo


        $mail->isHTML(true);
        $mail->Subject='Enviado por' . $_POST['nombre'];
        $mail->Body='<h1 align=center>Nombre: ' .$_POST['nombre'] . '<br>Email: '.
         $_POST['email'] .
          '<br>Mensaje: ' .
           $_POST['mensaje'] . '</h1>';
        

          if(!$mail->send())
           {
              $result="Algo está mal. Intentelo de nuevo, por favor";
           }else
            {
               $result ="Gracias ". $_POST['nombre'] . "Espera pronto tu respuesta!";
            } 
        
          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coorporativo DHE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- seccion menu -->
    
    <section class="menu" style="padding: 0;" >
            <nav class="navbar navbar-expand-lg navbar-light" id="navBar">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01" >
                    <a class="navbar-brand" href="#" style="font-size: 10px;"><img src="img/logo.png" style="height: 50px;" class="logo-navbar"></a>               
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                              <a class="nav-link active" aria-current="page" href="#quienes-somos" style="color: white;">¿Quiénes somos?</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Servicios
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="servicios.html">Cursos/Talleres</a></li>
                                  <li><a class="dropdown-item" href="#">Asesorias y Consultoría</a></li>
                                  <li><a class="dropdown-item" href="#">Desarrollo e Implementación</a></li>
                                  <li><a class="dropdown-item" href="#">Investigación y Estudios</a></li>
                                </ul>
                              </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle active" style="color: white;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Noticias
                              </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <li><a class="dropdown-item" href="./Views/anunciosView.php">Anuncios</a></li>
                                  <li><a class="dropdown-item" href="#">Comunidad</a></li>
                                  <li><a class="dropdown-item" href="#">Redes Sociales</a></li>
                                  <li><a class="dropdown-item" href="#">Proximos Eventos</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="#equipoDHE" style="color: white;">Equipo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="#escribenos" style="color: white;">¡Escríbenos!</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link active" href="./Views/loginView.php" style="color: white;"><i class="far fa-user-circle" style="font-size: 20px;"></i></a>
                            </li>
                          </ul>             
                  </div>
                </div>
              </nav>
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" >
                <div class="carousel-indicators">
                  <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active btn-slider" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="btn-slider" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="btn-slider" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/fondoPantalla.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/fondo2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/fondoPantalla.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                </button>
              </div>
        </section>


    <!-- seccion quienes somos -->
    <section id="quienes-somos" >
        <div class="quienesSomos">
          <div class="titulo-quienes-somos">
            <h1>¿QUIENES SOMOS?</h1>
          </div>
          <div class="info-quienes-somos">
          <div class="video-quienesSomos">
            <video src="img/Multimedia1.mp4" controls  autoplay loops></video>
          </div>
          <div class="parrafo-quienes-somos">
            <p>
              <strong>
              Corporativo DHE es una organización mexicana, formada en el año 2010, está dedicada a la consultoría,
              asesoría y capacitación. Corporativo DHE es una organización mexicana, formada en el año 2010, está dedicada
              a la consultoría, asesoría y capacitación.
            </strong>
            </p>
          </div> 
        </div> 
        </div>
    </section>

    <!-- mision , vision y valores -->
    <section id="misionVision" >
        <div class="contenedor-misionVision">
          <div class="mision">
            <div class="titutlo-mision"><h3>MISIÓN</h3></div>
            <div class="imagen-misionVision"><img src="img/mision.jpg" alt="mision1"></div>
          </div>
          <div class="info-mision">
            <div class="imagen-misionVision"><img src="img/mision2.jpg" alt="mision2"></div>
            <div class="texto-mision"><p>Generar espacios de conocimiento que aporten valor y crecimiento.</p></div>
          </div>
          <div class="vision">
            <div class="titutlo-mision"><h3>VISIÓN</h3></div>
            <div class="texto-mision"><p>Para el 2022, ser el referente impulsor de mejores prácticas corporativas</p></div>
            <div class="imagen-misionVision"><img src="img/vision.jpg" alt="vision">
            </div>
          </div>
            <div class="valores">
            <div class="titutlo-mision"><h3>VALORES</h3></div>
            <div class="texto-mision">
            <p>Honestidad <br>
            Perseverancia <br>
            Confianza <br>
            Disciplina</p></div>
          </div>
        </div>
    </section>

    <!-- Equipo DHE -->
    <section id="equipoDHE" >
        <div class="equipoDHE">
          <div class="titulosEquipoDHE">
            <h2>EQUIPO DHE</h2>
            <p></p>
          </div>
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/marcelo.png" alt="" height="200px" border-radius="20px">
                      <p> <strong>Marcelo Escalante Loaeza</strong> <br> Director de proyectos</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/maricela.png" alt="" height="200px">
                      <p> <strong>Maricela Molina G.</strong> <br>Dirección de Administración</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/victor.png" alt="" height="200px">
                      <p> <strong>Victor Medina A.</strong> <br>Analista de Proyectos</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/kenya.png" alt="" height="200px">
                      <p> <strong>Kenya Cobos M.</strong> <br>Proyectos</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/itzel.png" alt="" height="200px">
                      <p> <strong>Itzell Martinez D</strong> <br>Diseño y Marketing</p>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" py-4 text-black text-center">
                      <img src="img/ari.png" alt="" height="200px">
                      <p> <strong>Ariyared Pacheco R.</strong> <br>Auxiliar de proyectos</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev" style=" height: 260px; width: 50px;">
              <span class="" aria-hidden="true"> <i class="fas fa-angle-left" style= "color: black; font-size: 50px;"></i></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next" style="height: 260px; width: 50px;">
              <span class=""  aria-hidden="true"><i class="fas fa-angle-right"  style= "color: black; font-size: 50px;"></i> </span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </section>

    <!-- Social media -->
    <section id="social-media" >
        <div class="social-media">
          <div class="titulo-social">
            <h2>SOCIAL MEDIA</h2>
          </div>
          <!-- <div class="info-social"> -->
            <div class="social-imagen">
              <img src="img/Slide154 - copia.jpg" alt="socialMedia.jpg">
            </div>
            <div class="social-redesSociales">
              <a href="https://www.facebook.com/CorporativoDHE/"><i class="fab fa-facebook-square"></i> Corporativo DHE </a>
              <a href="https://www.instagram.com/corporativodhe/?hl=es"><i class="fab fa-instagram"></i>  Corporativo DHE</a>
              <a href="https://twitter.com/corporativodhe?lang=es"><i class="fab fa-twitter"></i>  Corporativo DHE</a>
            </div>
          <!-- </div> -->
        </div>
    </section>

    <!-- Escribenos -->

    <section id="escribenos" >
        <div class="form-escribenos">
          <form  id="form" class="form-inputs" action="" method="POST">
            <h3>¿Tienes dudas?, ¡contáctanos!</h3> <br>
            <div class="mb-3">
              <input name="nombre" id="nombre" class="form-control" placeholder="Tu nombre completo" required></input>
            </div>
            <div class="mb-3">
              <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Tu correo electrónico" required>
            </div>
            <div class="mb-3">
              <input name="asunto" id="asunto" class="form-control" placeholder="Asunto" required></input>
            </div>
            <div class="mb-3">
              <textarea name="mensaje" id="mensaje" class="form-control" placeholder="¿Cómo podemos ayudarte?" required></textarea>
            </div>
            <div class="btn-form mb-3">
              <button type="submit" name="submit" class="btn btn-primary">Enviar</button>
            </div>
            <div>
              <?php $result;  ?>
            </div>
          </form>
        </div>
        
        <div class="footer-social">
          <div class="footer-sociales">
            <a href="https://www.facebook.com/CorporativoDHE/"><i class="fab fa-facebook-square"></i>
            <a href="https://www.instagram.com/corporativodhe/?hl=es"><i class="fab fa-instagram"></i>
            <a href="https://twitter.com/corporativodhe?lang=es"><i class="fab fa-twitter"></i>
            <p>Búscanos en redes socociales!</p>
          </div>
          <div class="footer-titulo">
            <p style="color: white;">CORPORATIVO DHE</p>
          </div>
        </div>
    </section>

   
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>

