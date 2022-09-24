<!DOCTYPE html>
<html lang="es">
<head>
<title>Agregar Productos</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/fondo1.png');"> 
<header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
    <h1><a href="index.php">SC-INNOVASOFT</a></h1> </div>
    <nav id="mainav" class="fl_right"> 
    <ul class="clear">
        <li class="active"><a href="cuenta.php">Inicio</a></li>
        <i class="fas fa-house-blank"></i>
                  <li><a href="index.php">Log out<i class="fas fa-door-open"></i></a></li>
                  
                  </ul>
                  </nav>
  </header>
   
<br><div id="contenido">
 <center><a href="Gestion_productos.php"> <button type="button" class="btn btn-inf">Nuevo</button></a></center><br>
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px spx;">
    <thead>
   
        <th>Id</th>
        <th>Producto</th>
        <th>Descripción</th>
        <th>Fecha</th>
        <th>Labotatorio</th>
        <th colspan="3"> <center>Acciones</th></center>
       
</thead>

<?php
include "conexion2.php";
$sentencia="SELECT * FROM productos";
$resultado= $conexion2->query($sentencia) or die (mysqli_error($conexion2));
while($fila=$resultado->fetch_assoc())
{
    echo "<tr>";
    echo "<td>"; echo $fila['id_productos']; echo "</td>";
    echo "<td>"; echo $fila['nombre']; echo "</td>";
    echo "<td>"; echo $fila['descripcion']; echo "</td>";
    echo "<td>"; echo $fila['fecha']; echo "</td>";
    echo "<td>"; echo $fila['laboratorio']; echo "</td>";
    echo " <td><a href='modif_prod1.php?id_productos=".$fila['id_productos']."'> <button type='button'class='btn btn-success'>Modificar</button></a></td>";
    echo " <td><a href='eliminar_prod.php?id_productos=".$fila['id_productos']."'> <button type='button'class='btn btn-danger'>Eliminar</button></a></td>";
    echo "</tr>";
}
?>
</table><br><br><br><br><br>
     
</div>
    </form>
  				
</center>
    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <br><div class="one_quarter first">
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
   <br><div class="one_quarter">
      <h6 class="heading">Informacion de contacto</h6>
      <ul class="nospace linklist">
        <li><a href="#">Direccion</a></li>
        <li><a href="#">Telefonos</a></li>
        <li><a href="#">correo electronico</a></li>
        </ul>
    </div>
    <div class="one_quarter">
              </fieldset>
      </form>
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
</div>

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>
</body>
</html>
