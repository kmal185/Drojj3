<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Drogueria JJ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/2.jpg');"> 
    <p></p>
    <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="./index.php">SC-INNOVASOFT</a></h1>
        <nav id="mainav" class="fl_right"> 
    <ul class="clear">
        
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
      <li class="active"><a href="Cuenta.php">Inicio</a></li>
        <i class="fas fa-house-blank"></i>
                  <li><a href="index.php">Log out<i class="fas fa-door-open"></i></a></li>
                  
                  </ul>
      <form class="w3-container" action="controller_login.php" method="post">
        <input type="hidden" name="salir" value="salir">
        <button class="w3-btn w3-green">Salir</button>
            </form>
    </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
  <div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
  <main class="hoc container clear">
  <section id="services">
      <div class="sectiontitle">
              <p class="nospace font-x3">Drogueria JJ</p><br>
             <h2 class="heading">MODULOS</h2>
      </div>
 
      <ul class="nospace group grid-4">
        <li class="one_third">
          <article><a href="Gestion_productos.php"><i class="fas fa-spray-can"></i></a>
            <h6 class="heading"><br> Gestion de Productos</h6>
            <p>En este modulo podra crear, modificar y elminar a un producto. </p>
            <footer><a href="Gestion_productos.php">Mas detalles &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="Gestion_Usuarios.php"><i class="fas fa-user-secret"></i></a>
            <h6 class="heading"><br>Gestion de Usuarios</h6>
            <p>Este módulo permite crear, modificar y elminar un usuario.</p>
            <footer><a href="Gestion_Usuarios.php">Mas detalles &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="Gestion_proveedores.php"><i class="fas fa-truck"></i></a>
            <h6 class="heading"><br>Gestion de proveedores</h6>
            <p>En este modulo podra crear, modificar y elminar los datos de un proveedor.</p>
            <footer><a href="Gestion_proveedores.php">Mas detalles &raquo;</a></footer>
          </article>
        </li>
        <li class="one_third">
          <article><a href="Gestion_Informes.php"><i class="fas fa-file"></i></a>
            <h6 class="heading"><br>Gestion Informes</h6>
            <p>En este modulo podra generar los diferentes reportes que necesite para su gestion.</p>
            <footer><a href="Gestion_Informes.php">Mas detalles &raquo;</a></footer>
            
          </article>
        </li>
      </ul>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
  </center>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <img src="images/logo.png" widht="100%" height="100%"><br>
      
      <br><h6 class="heading">SC-INNOVASOFT</h6>
      <p> Siguenos en nuestras redes [<a href="#">&hellip;</a>]</p>
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
        <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
      </ul>
    </div>
   <div class="one_quarter">
      <h6 class="heading">Informacion de contacto</h6>
      <ul class="nospace linklist">
        <li><a href="#">Direccion</a></li>
        <li><a href="#">Telefonos</a></li>
        <li><a href="#">correo electronico</a></li>
        </ul>
    </div>
    <div class="one_quarter">
    <img src="images/logo_drogueria.PNG" widht="100%" height="100%"><br>
    </div>
    <div class="one_quarter last">
       <ul class="nospace linklist">
        <li>
          <article>
            <h6 class="nospace font-x1"><a href="https://goo.gl/maps/3gJo95Cs3FgzjAYK9">Nuestro punto</a></h6><br>
            <iframe src="https://www.google.com/maps/embed?pb=!4v1655569656097!6m8!1m7!1sY-vTCCn-e56DzIDGo8FNlA!2m2!1d4.755641530248009!2d-74.115386074218!3f185.89242056083074!4f-0.5739634010684682!5f0.6924037366902054" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <time class="font-xs block btmspace-10"
           </article>
        </li>
      </ul>
    </div>

  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>