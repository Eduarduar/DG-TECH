<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.4">
    <link rel="shortcut icon" href="img/Logo-icon-trasparent.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo_contacto.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>DGE-TECH</title>
</head>
<body>

    <!-- header -->

    <?php include('./secciones/header.php') ?>

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

        <div class="container-main">

            <div class="div-texto">

                <div class="texto">

                    <p>Si tienes un problema puede llamar para solucionarlo lo más pronto posible y uno de nuestros trabajadores lo atenderán</p>

                </div>

            </div>

            <div class="registro">

                <form class="form"action="" method="POST" name="form-registro">

                    <div class="container-titulo">
                        <h1>Registro de contacto</h1>
                    </div>

                    <div class="conjunto">
                        <label for="nombre_registro">Nombre</label>
                        <input type="text" name="nombre_registro" id="nombre_registro" placeholder="Ingrese su nombre" required>
                    </div>

                    <div class="conjunto">
                        <label for="apellidos_registro">Apellidos</label>
                        <input type="text" name="apellidos_registro" id="apellidos_registro" placeholder="Ingrese sus apellidos" required>
                    </div>

                    <div class="conjunto">
                        <label for="telefono_registro">Teléfono</label>
                        <input type="text" name="telefono_registro" id="telefono_registro" placeholder="Ingrese su telefono" required>
                    </div>

                    <div class="conjunto">
                        <label for="correo_registro">Correo</label>
                        <input type="email" name="correo_registro" id="correo_registro" placeholder="Ingrese su correo" required>
                    </div>

                     <div class="container-button">
                        <button class="button">Enviar</button>
                    </div>

                </form>

            </div>

            <div class="container-cuadros">

                <div class="tapar">

                    <input class="input" id="Telefono" type="text" value="+00 123 456 7890">
                    <input class="input" id="Correo" type="text" value="CorreoFake123@Correo.com">

                </div>

                <div class="confirmar">

                    <div class="Confirmacion-left" id="confirm_telefono">

                        <p>Se a guardado en el Portapapeles</p>

                    </div>

                    <div class="Confirmacion-right" id="confirm_correo">

                        <p>Se a guardado en el Portapapeles</p>

                    </div>

                </div>

                <div class="contactos">

                    <div class="caja" id="telefono" onclick="">

                        <h2>Teléfono</h2>

                        <p>+00 123 456 7890</p>

                    </div>

                    <div class="caja" id="correo">

                        <h2>Correo</h2>

                        <p>CorreoFake123@Correo.com</p>

                    </div>

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

    <!-- script -->

    <script>

        const boton_Telefono = document.getElementById("telefono");
        const boton_Correo = document.getElementById("correo");
        const text_Telefono = document.getElementById("Telefono");
        const text_Correo = document.getElementById("Correo");
        const confirm_Telefono = document.getElementById("confirm_telefono");
        const confirm_Correo = document.getElementById("confirm_correo");

        boton_Telefono.addEventListener('click',function(){
            text_Telefono.select();
            text_Telefono.setSelectionRange(0,99999);
            document.execCommand('copy');
            confirm_Telefono.classList.remove('Confirmacion-left');
            confirm_Telefono.classList.add('Confirmacion__active-left');
            setTimeout(() => {
            confirm_Telefono.classList.remove('Confirmacion__active-left');
            confirm_Telefono.classList.add('Confirmacion-left');
        }, 1000);
        });
        boton_Correo.addEventListener('click',function(){
            text_Correo.select();
            text_Correo.setSelectionRange(0,99999);
            document.execCommand('copy');
            confirm_Correo.classList.remove('Confirmacion-right');
            confirm_Correo.classList.add('Confirmacion__active-right');
            setTimeout(() => {
            confirm_Correo.classList.remove('Confirmacion__active-right');
            confirm_Correo.classList.add('Confirmacion-right');
        }, 1000);
        });
    </script>
    
</body>
</html>