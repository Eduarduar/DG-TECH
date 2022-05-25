<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="img/Logo-icon-trasparent.png" type="image/x-icon">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/footer.css">
        <link rel="stylesheet" href="./css/estilo_home.css">
        <title>DGE-TECH</title>
    </head>
    <body>

        <!-- header -->

        <?php include('./secciones/header.php') ?>

        <!-- header -->

        <!-- main -->


        <main>

            <div class="div-map">

                <div class="map-degradado">
                    
                    <div class="map-text">

                        <b><h2>Bienvenido</h2></b>
                        <h3>Bienvenido a DG-TECH<br> Tu página de confianza para comprar tu PC.</h3>

                    </div>
                
                </div>

            </div>

            <div class="div-context1">
                <div class="context1">
                    <div class="context1-text">

                        <h2></h2>

                        <p>En esta página Web encontrarás los componentes necesarios para armar tu PC o puedes comprar PC ya prearmadas para un mejor desempeño en lo que tú ocupas.</p>

                    </div>

                    <div class="image1">

                    <img src="./img/Logo-Trasparent.png" alt="imagen de nuestra tienda">

                    </div>
                </div>

            </div>

            <div class="cards">
                <div class="cards2">

                <?php

                    $titulos    = ["Productos",                             "¿Quieres saber quienes somos?"         ,"Contactanos"];
                    $imagenes   = ["./img/choose-my-pc-mexico.jpg",         "./img/icono_de_interrogacion.png"      ,"./img/imagenes-para-contacto.png"];
                    $text       = ["Busque los componentes para su PC.",    "Informate quienes somos y contactanos.","Si tienes alguna duda sobre nosotros contactanos"];
                    $pagina     = ["./productos.php",                       "./quienesSomos.php"                    ,"./contacto.php"];
                    $x = 0;
                    while ($x < 3){

                ?>

                    <form class="cuadros" action="<?php echo $pagina[$x]; ?>" method="POST">  

                        <div class="div-img">

                            <img  class="img" src="<?php echo $imagenes[$x]; ?>" alt="">

                        </div>

                        <div class="div-text">

                            <h2 class="subTitulo" ><?php echo $titulos[$x]; ?></h2>

                            <p class="text"> <?php echo $text[$x]; ?></p>

                        </div>

                        <div class="buttons">

                            <button class="boton btn btn-primary" ><h5>IR</h5></button>

                        </div>

                    </form>

                <?php

                    $x++;
                    }
                
                ?>

                </div>

            </div>

        </main>
 
        <!-- main -->

        <!-- footer -->

        <footer>

            <p>copyright</p>

        </footer>

    <!-- footer -->
        
    </body>
</html>