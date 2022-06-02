<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">
    <link rel="shortcut icon" href="img/Logo-icon-trasparent.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/estilo_productos.css">
    <title>DGE-TECH</title>
</head>
<body>

    <!-- header -->

    <?php include('secciones/header.php') ?>

    <!-- header -->

    <!-- main -->

    <main>

        <div class="div-map">

            <div class="link">

                <a href="https://www.google.com.mx/maps/place/Centro+de+Estudios+Tecnol%C3%B3gicos+Industrial+y+de+Servicios+(CETis+%2384)/@19.1278998,-104.3463999,17z/data=!3m1!4b1!4m5!3m4!1s0x8424d53e8d52fdb7:0x10ef618c917638b0!8m2!3d19.127867!4d-104.3442146" target="_blank" ></a>

            </div>  

            <div class="map-degradado">
                
                <div class="map-text">

                    <b><h2>Componentes</h2></b>
                    <h3>Completa tu Setup de tus sueños con la mejor PC.</h3>

                </div>

            </div>

        </div>

        <div class="container-centrador">

            <div class="center">

                <div class="container-menu_lateral">

                    <div class="menu_lateral-subTitulo">

                        <h3>Filtros</h3>

                    </div>

                    <div class="container-barra_lateral">

                        <ul>
                            <li><a>Disco duro</a></li>
                            <li><a>Disipadores</a></li>
                            <li><a>Fuentes</a></li>
                            <li><a>Graficas</a></li>
                            <li><a>Gabinetes</a></li>
                            <li><a>Memoria Ram</a></li>
                            <li><a>Memoria M2</a></li>
                            <li><a>Pasta Termica</a></li>
                            <li><a>Placa base</a></li>
                            <li><a>procesadores</a></li>
                            <li><a>ventiladores</a></li>
                        </ul>

                    </div>

                </div>

                <div class="container-search">

                    <div class="container-barra_search">

                        <input type="text" class="search" placeholder="Inserte su busqueda">

                        <button class="icon-search fa fa-search" aria-hidden="true"></button>

                    </div>

                </div>

                <div class="container-menu_productos">

                    <?php
                    
                    $nombre = [
                        "Disipador Cooler Master Hyper 212 LED",
                        "Disco Duro WD Blue 2TB 3.5'' 5400RPM SATA",
                        "Fuente de poder EVGA 750W 80 Plus White",
                        "Gabinete BitFenix NOVA MESH ATX Negro",
                        "Tarjeta de Video Asus TUF Gaming GTX 1660 6GB GDDR5",
                        "SSD Western Digital Blue 1TB M.2 SATA 3",
                        "Pasta termica Cooler Master Mastergel Maker",
                        "Procesador AMD Ryzen 5 3600 3.6GHz",
                        "Memoria RAM DDR4 DIMM Patriot Viper Steel RGB 8GB 3200MHz",
                        "Tarjeta Madre MSI MAG B550 TOMAHAWK AM4",
                        "Ventilador Be Quiet! Shadow Wings 2, 120mm, 1100RPM, Blanco",
                        "Disipador CPU be quiet! Shadow Rock 3, 120mm, 1600RPM, Blanco",
                        "Disco Duro TOSHIBA P300 1TB 3.5'' 7200RPM SATA",
                        "Fuente de Poder ACTECK 500W",
                        "Gabinete GAMDIAS ARGUS E1 ATX RGB Negro",
                        "Tarjeta de video GTX 1650 4GB PNY Dual Fan",
                        "SSD Western Digital Blue 250GB M.2 SATA 3",
                        "Pasta termica Cooler master mastergel regular",
                        "Procesador AMD Ryzen 5 3600 3.6GHz",
                        "Memoria RAM DDR4 DIMM Patriot Viper Steel RGB 8GB 3200MHz",
                        "Tarjeta Madre Asus PRIME A320M-K AM4",
                        "Ventilador Lian Li UNI fan 120 Blanco"
                    ];
                    $imagen = [
                        "./img/PC's/PC1/Discipador de calor/disipador-cooler-master-hyper-212-led-.jpg",
                        "./img/PC's/PC1/Disco duro/disco-duro-wd-blue-2tb-35-5400rpm-sata.jpg",
                        "./img/PC's/PC1/Fuente de poder/fuente-de-poder-evga-750w-80-plus-white.jpg",
                        "./img/PC's/PC1/Gabinete/gabinete-nova-mesh-atx-negro.jpg",
                        "./img/PC's/PC1/Grafica/tarjeta-de-video-asus-tuf-gaming-gtx-1660-6gb-gddr5.jpg",
                        "./img/PC's/PC1/Memoria M.2/ssd-western-digital-1tb-m2-sata-3.jpg",
                        "./img/PC's/PC1/Pasta termica/pasta-termica-cooler-master-mastergel-maker.jpg",
                        "./img/PC's/PC1/Procesador/procesador-amd-ryzen-5-3600-36ghz.jpg",
                        "./img/PC's/PC1/RAM/memoria-ram-ddr4-dimm-patriot-viper-steel-rgb-8gb-3200mhz.jpg",
                        "./img/PC's/PC1/Tarjeta madre/tarjeta-madre-msi-mag-b550-tomahawk-am4.jpg",
                        "./img/PC's/PC1/Ventiladores/ventilador-be-quiet-shadow-wings-2-120mm-1100rpm-blanco.jpg",
                        "./img/PC's/PC2/Discipadores de calor/disipador-cpu-be-quiet-shadow-rock-3-120mm-1600rpm-blanco.jpg",
                        "./img/PC's/PC2/Discos duros/disco-duro-toshiba-p300-1tb-35-7200rpm-sata.png",
                        "./img/PC's/PC2/Fuentes de poder/fuente-de-poder-acteck-500w.jpg",
                        "./img/PC's/PC2/Gabinetes/gabinete-gamdias-argus-e1-atx-rg.jpg",
                        "./img/PC's/PC2/Graficas/tarjeta-de-video-gtx-1650-4gb-pny-dual-fan-.png",
                        "./img/PC's/PC2/Memorias M.2/ssd-western-digital-1tb-m2-sata-3.png",
                        "./img/PC's/PC2/Pastas termicas/pasta-termica-cooler-master-mastergel-regular.png",
                        "./img/PC's/PC2/Procesadores/procesador-amd-ryzen-5-3600-36ghz.png",
                        "./img/PC's/PC2/RAM/memoria-ram-ddr4-dimm-patriot-viper-steel-rgb-8gb-3200mhz.jpg",
                        "./img/PC's/PC2/Tarjetas madre/tarjeta-madre-asus-prime-a320m-k-am4.jpg",
                        "./img/PC's/PC2/Ventiladores/ventilador-lian-li-uni-fan-120-blanco.png"
                    ];
                    $descripcion = [
                        "Hyper 212 LED está equipado con un ventilador PWM con LED rojos, que proporciona el mejor equilibrio entre el flujo de aire y la presión estática para eliminar el calor.",
                        "Potencie el almacenamiento de su PC con los discos WD Blue, la marca diseñada para las PC de escritorio y todo en uno con diversas capacidades de almacenamiento.",
                        "Cuando se basa en un presupuesto, la fuente de alimentación EVGA 750W es una gran opción a un bajo costo. El soporte de 59A en un solo carril de + 12V proporciona más opciones sin tener que reducir los requisitos de sus componentes.",
                        "BitFenix ​​NOVA MESH es el renacimiento del popular BitFenix ​​NOVA con diseños y características rediseñados para ofrecer el mejor equilibrio entre rendimiento, apariencia y facilidad de uso.",
                        "Las tarjetas de video ASUS GeForce GTX™ cuentan con la arquitectura Turing. Esto se traduce 6 veces más rendimiento que las tarjetas gráficas de la generación anterior y así mismo tiene la capacidad de rastreo de rayos en tiempo real y la inteligencia artificial para los juegos compatibles.",
                        "El disco WD Blue™ SATA SSD es una opción excepcional y es ideal para actualizar un equipo portátil envejecido o como almacenamiento adicional de un sistema ya en uso.",
                        "Diseño de usuario mejorada, conductividad precisa y uniforme para una transferencia de calor única.",
                        "Experimenta el maximo rendimiento con los nuevos AMD Ryzen ™ 5, procesamiento multi-core increíblemente potente para el máximo rendimiento.",
                        "Memorias RAM con un diseño agresivo para darle un toque increíble a tu equipo de cómputo. Memorias RAM Patriot Viper Steel RGB diseñadas únicamente para los usuarios más exigentes.",
                        "La serie MAG nació a través de rigurosas pruebas de calidad y se diseñó para ser un símbolo de robustez y durabilidad. Centrada en brindar la mejor experiencia de usuario",
                        "",// vacio
                        "",// vacio
                        "El P300 es ideal para diseñadores gráficos y profesionales creativos que buscan un gran rendimiento. Disponible con una capacidad de almacenamiento de hasta 6 TB, una gran velocidad de lectura y escritua y un diseño seguro.",
                        "La fuente de poder Poder R500 está minuciosamente construida para darte funcionalidad.",
                        "Argus E1 admite la conexión a placas madre compatibles para lograr la sincronización de iluminación RGB en todo el sistema, lo que hace que sea más fácil sincronizar su gabinete.",
                        "Las tarjetas gráficas GeForce GTX 1650 están diseñadas para ofrecer una poderosa combinación de innovación en juegos, gráficos de última generación y un funcionamiento silencioso y eficiente en el consumo de energía.",
                        "l disco WD Blue™ SATA SSD es una opción excepcional y es ideal para actualizar un equipo portátil envejecido o como almacenamiento adicional de un sistema ya en uso.",
                        "Diseño de usuario mejorada, conductividad precisa y uniforme para una transferencia de calor única.",
                        "Experimenta el maximo rendimiento con los nuevos AMD Ryzen ™ 5, procesamiento multi-core increíblemente potente para el máximo rendimiento.",
                        "Memorias RAM con un diseño agresivo para darle un toque increíble a tu equipo de cómputo. Memorias RAM Patriot Viper Steel RGB diseñadas únicamente para los usuarios más exigentes.",
                        "ASUS Prime es la próxima evolución de la placa madre ASUS, nacida de un pedigrí que se remonta a 1989. Nuestro equipo de ingenieros de clase mundial se apasiona por potenciar a todos para disfrutar de los beneficios de la personalización y afinación.",
                        "Ventilador revolucionario con diseño modular, ventilador entrelazado que se puede conectar y operar con un ventilador y un cable RGB."
                    ];
                    $precio = [
                        "$1,570.00MX",
                        "$800.00MX",
                        "$1,780.00MX",
                        "$1,396.82MX",
                        "$6,146.43MX",
                        "$1,850.00MX",
                        "$320.72MX",
                        "$4,160.00MX",
                        "$950.00MX",
                        "$1,864.99MX",
                        "$320.72MX",
                        "$1,396.82MX",
                        "$884.09MX",
                        "$375.58MX",
                        "$964.27MX",
                        "$6,475.59MX",
                        "$991.70MX",
                        "$267.97MX",
                        "$4,572.37MX",
                        "$858.77MX",
                        "$1,219.58MX",
                        "$670.98MX"
                    ];

                    for ($x = 0; $x < 22; $x++){

                        ?>

                    <div class="container-item">

                        <div class="container-imagen">

                            <img class="item_imagen" src="<?php echo $imagen[$x]; ?>" alt="">

                        </div>

                        <div class="container-context">

                            <div class="container-item_nombre">

                                <h3 class="item_nombre"><?php echo $nombre[$x]; ?></h3>

                            </div>

                            <div class="container-item_desc">

                                <h4 class="item_desc"><?php echo $descripcion[$x]; ?></h4>

                            </div>

                            <div class="container-item_precio">

                                <p class="item_precio"><?php echo $precio[$x]?></p>

                            </div>

                        </div>

                    </div>

                    <?php

                    }
                    
                    ?>

                </div>

                <div class="blanco"></div>

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