<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <link rel="shortcut icon" href="img/Logo-icon-trasparent.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilo_contacto.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
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

                    <b><h2>Contacto</h2></b>
                    <h3>Contactanos por cualquier duda o problema</h3>

                </div>
            
            </div>

        </div> 

        <div class="div-texto">

            <div class="texto">

                <p>Si tienes un problema puede llamar para solucionarlo lo mas proto posible y uno de nuestros trabajadores lo atenderan</p>

            </div>

        </div>

        <div class="tapar">

        <input class="input" id="Telefono" type="text" value="+00 123 456 7890">
        <input class="input" id="Correo" type="text" value="CorreoFake123@Correo.com">

        </div>

        <div class="contactos">

            <div class="caja" id="telefono" onclick="">

                <h2>Telefono</h2>

                <p>+00 123 456 7890</p>

            </div>

            <div class="caja" id="correo">

                <h2>Correo</h2>

                <p>CorreoFake123@Correo.com</p>

            </div>

        </div>

    </main>

    <!-- main -->

    <!-- footer -->

    <footer>

        <p>copyright</p>

    </footer>

    <!-- footer -->

    <!-- script -->

    <script>

        const boton_Telefono = document.getElementById("telefono");
        const boton_Correo = document.getElementById("correo");
        const text_Telefono = document.getElementById("Telefono");
        const text_Correo = document.getElementById("Correo"); 

        boton_Telefono.addEventListener('click',function(){
            text_Telefono.select();
            text_Telefono.setSelectionRange(0,99999);
            document.execCommand('copy')
        });
        boton_Correo.addEventListener('click',function(){
            text_Correo.select();
            text_Correo.setSelectionRange(0,99999);
            document.execCommand('copy')
        });
    </script>
    
</body>
</html>