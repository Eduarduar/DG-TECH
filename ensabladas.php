<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="shortcut icon" href="img/Logo-icon-trasparent.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/estilo_PC_ensambladas.css">
    <title>DGE-TECH</title>
</head>
<body>

    <!-- header -->

    <?php include('secciones/header.php') ?>

    <!-- header -->

    <!-- main -->

    <main>

        <div class="div-map">

            <div class="map-degradado">
                
                <div class="map-text">

                    <b><h2>PC's ensabladas</h2></b>
                    <h3>Tenemos la mejor gama de PC para su mejor rendimiento posible.</h3>

                </div>
            
            </div>

        </div>
        
        <div class="center">

            <div class="container-center">

                <div class="container-search">

                    <div class="search">

                        <input type="text">
                        <div class="container-icon_search">
                            <button class="icon-search fa fa-search" aria-hidden="true"></button>
                        </div>

                    </div>

                </div>

                <div class="container-productos">

                    <?php
                    
                        $nombre = [
                            "PC BASIC PRO Intel Pentium G6400 UHD 610",
                            "PC ÉTER Intel I3 10100 UHD 630",
                            "PC NIX Intel I5 10400 UHD 630",
                            "PC GEA Intel i5 10400 P1000 / P2200",
                            "PC HADES Intel i9 12900K DDR5 RTX 3090"
                            ];
                        $desc = [
                            "Esta computadora pertenece a nuestra linea Basic, la cual se caracteriza por ofrecer equipos de alta calidad, perfecta para las tareas diarias en casa u oficina, Cuenta con un excelente balance entre costo-beneficio, es la PC ideal para aquellos usuarios que realizan tareas diarias y requieran un rendimiento eficiente en su computadora.",
                            "Esta computadora pertenece a la línea Profesional, las cuales son diseñadas con la más alta calidad, para ofrecer un excelente rendimiento. Perfecta para todos aquellos usuarios que realizan diseños en 2D y requieran un equipo económico.",
                            "Esta computadora pertenece a la línea Profesional,  las cuales son diseñadas con la más alta calidad, para ofrecer un excelente rendimiento. Perfecta para todos aquellos usuarios que realizan diseños en 2D.",
                            "Esta computadora pertenece a la línea Profesional, las cuales son diseñadas con la más alta calidad, para ofrecer un excelente rendimiento. Perfecta para todos aquellos usuarios que realizan diseños en 3D y requieran un equipo económico.",
                            "Esta computadora forma parte de nuestra línea Gaming son especialmente creadas y diseñadas para dar un rendimiento óptimo en las tareas que necesites realizar, todos los equipos se pueden actualizar a tus necesidades. El equipo perfecto para 2k con alta tasa de cuadros por segundo o 4k."
                        ];
                        $espec = [
                            "Procesador	Pentium <br> Memoria RAM	8GB <br> Tarjeta De Vídeo	Integrado <br> Unidad De Estado Sólido		240GB <br> Disipador	Por Aire",
                            "Procesador	Core I3 <br> Memoria RAM	8GB <br> Tarjeta De Vídeo	Integrado <br> Unidad De Estado Sólido		1TB <br> Disipador	Por Aire",
                            "Procesador	Core I5 <br> Memoria RAM	16GB <br> Tarjeta De Vídeo	Integrado <br> Unidad De Estado Sólido	240GB <br> Disco Duro	1TB",
                            "Procesador	Core I5 <br> Memoria RAM	32GB <br> Tarjeta De Vídeo	Quadro P1000 <br> Unidad De Estado Sólido	240GB <br> Disco Duro	2 TB",
                            "Procesador	Core I9 <br> Memoria RAM	32GB <br> Tarjeta De Vídeo	RTX 3090 <br> Unidad De Estado Sólido	500GB <br> Disco Duro	2 TB"
                        ];
                        $img = [
                            "./img/PC´s ensambladas/PC 1/gabinete-nova-mesh-se-negro-.jpg",
                            "./img/PC´s ensambladas/PC 2/gabinete-nova-mesh-se-blanco.png",
                            "./img/PC´s ensambladas/PC 3/gabinete-naceb-cypher-atx-rgb.png",
                            "./img/PC´s ensambladas/PC 4/gabinete-cooler-master-masterbox-k501l-atx-rgb-negro.png",
                            "./img/PC´s ensambladas/PC 5/gabinete-corsair-carbide-200r-atx-negro.png"
                        ];
                        $precio = [
                            "$7,309.04MX",
                            "$12,373.67MX",
                            "$15,188.20MX",
                            "$29,251.14MX",
                            "$141,980.63MX"
                        ];
                        $x = 0;
                        while ($x < 5){
                            
                            ?>

                                <div class="card">

                                    <div class="container-img">

                                        <img src="<?php echo $img[$x]; ?>" alt="...">

                                    </div>

                                    <div class="container-simple">

                                        <div class="container-nombre">

                                            <h2><?php echo $nombre[$x]; ?></h2>

                                        </div>

                                        <div class="container-precio">

                                            <p><?php echo $precio[$x]; ?></p>

                                        </div>

                                        <div class="container-extra">

                                            <h2>Especificaciones</h2>

                                            <div class="especificaciones">

                                                <p><?php echo $espec[$x]; ?></p>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            <?php

                            $x++;

                        }
                    ?>

                </div>

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