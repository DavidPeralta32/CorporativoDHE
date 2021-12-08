<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anuncios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/anuncio.css">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./js/anuncio.js"></script>
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="contenedor">
        <!-- Menu -->
        <?php
        require_once '../includes/menuHeader.php';
        ?>

        <!-- Publicaciones -->
        <section>
            <div class="contenedorPublicaciones" id="contendorPublicaciones">

            </div>
        </section>


        <!-- Social Media -->
        <section>
            <div class="footer-social">
                <div class="footer-sociales">
                    <a href="https://www.facebook.com/CorporativoDHE/"><i class="fab fa-facebook-square"></i></a>
                    <a href="https://www.instagram.com/corporativodhe/?hl=es"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/corporativodhe?lang=es"><i class="fab fa-twitter"></i></a>
                    <p>Búscanos en redes socociales!</p>
                </div>
                <div class="footer-titulo">
                    <p style="color: white;">CORPORATIVO DHE</p>
                </div>
            </div>
        </section>
    </div>

    <script>
    $(document).ready(function() {

        listarPublicaciones();

    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>