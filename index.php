<?php
    include "configs/config.php";
    include "configs/funciones.php";

    if(!isset($p))
    {
        $p="principal";
    }
    else{
        $p=$p;
    }
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <title>A Put a Spell on You</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="./js/modernizr-3.5.0.min.js"></script>
</head>
<body>




<!--LOGO-->
<header>
    <section id="logo">
        <img src="./img/logo.png" alt="Logo">
    </section>
</header>


<!--MENU-->
<nav id="menu-h">
    <ul>
        <li> <a href="p=principal">¿Que son las wiccas?</a>
        <ul class="submenu">
            <li><a href="?p=historia">Historia</a></li>
            <li><a href="?p=deidades">Dedidades</a></li>
            <li><a href="?p=referencia">Referencias</a></li>
        </ul>
        </li>
        <li> <a href="#">Usuario</a> 
            <ul class="submenu">
                <li><a href="?p=login">Ingresar</a></li>
                <li><a href="?p=principal">Mis compras</a></li>
                <li><a href="?p=carrito">Mis carrito</a></li>
                <li><a href="?p=registro">Registrarse</a></li>
                
            </ul>
                  
         </li>
         <a href="?p=productos">Tienda Wicca</a> 
           
        <li> <a href="#">Cursos </a> 
            <ul class="submenu">
                <li><a href="?p=baraja">Lectura de baja española</a></li>
                <li><a href="?p=tarot">Lectura del tarot</a></li>
                <li><a href="?p=mano">Lectura de la mano</a></li>
                <li><a href="?p=taza">Lectura de la taza</a></li>
                <li><a href="?p=magia">Magia para principiantes</a></li>
                
            </ul>
        </li>

                   
        <li> <a href="#">Contacto</a> 
            <ul class="submenu">
                <li><a href="?p=registro">¿Quienes somos?</a></li>
                <li><a href="?p=registro">preguntas frecuentes</a></li>
                <li><a href="?p=registro">chat de ayuda</a></li> 
            </ul>
                  
         </li>

         <li> <a href="#">Administrador</a> 
            <ul class="submenu">
                <li><a href="?p=admin">Ingresar</a> </li> 
            </ul>    
         </li>
         <a href="?p=salir">Salir </a>
    </ul>
     
</nav>
<section id="banner">
    <img src="./img/fondo2.jpg" alt="">
</section>
<section id="gif">
    <img align="center" src="./img/estrella.gif" alt="">
    <img src="./img/future.gif" alt="">
</section>
<div class="cuerpo">
    <?php
        if(file_exists("modulos/".$p.".php")){
            include "modulos/".$p.".php";
        }
        else{
            echo "<i>No se ha encontrado el modulo <b>".$p."</b><a href='./'>Regresar</a></i>";
        }
    ?>
</div>

<div class="footer">
    {

    }
</div>
<audio src="I put a spell on you.mp3" loop="3" autoplay="true">






</body>
</html>
