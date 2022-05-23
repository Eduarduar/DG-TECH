<?php

if (isset($_POST['pagina'])){
    include $_POST['pagina'];
}else{
    include './secciones/home.php';
}

?>