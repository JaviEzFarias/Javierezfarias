<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/bienvenido.css">
    <link rel="stylesheet" href="./css/header.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">

    <title>Inicio</title>
</head>
<body>
    <header>
            <a class="logo" href="#"><i class="fa-regular fa-user"></i>  Iniciar Sesion</a>
            <nav>
                <ul class="nav__links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Proyectos</a></li>
                    <li><a href="#">Acerca de</a></li>
                </ul>
            </nav>
            <p class="menu cta">Menu</p>
        <div id="mobile__menu" class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="#">Inicio</a>
                <a href="#">Proyectos</a>
                <a href="#">Acerca de</a>
            </div>  
        </div>


        <!--Responsive Desing JS-->
        <script type="text/javascript" src="./js/mobile.js"></script>

        <!--Font Awesome JS-->
        <script src="https://kit.fontawesome.com/685d21e24d.js" crossorigin="anonymous"></script>
    </header>
    <main>
         <?php
           $hostname="localhost";
           $username="root";
           $password="";
           $dbname="epiz_34279734_registro";

           $conn = new mysqli($hostname, $username, $password, $dbname);
           if ($conn->connect_error) {
               die("Conexion fallida perri: ". $conn->connect_error);
           }
           
           
         ?>
        </main>
</body>
</html>