<?php

    $consulta=ConsultarProveedor($_GET['Id']);

    function ConsultarProveedor( $id_p )
    {
        include 'conexion2.php';
        $sentencia="SELECT * FROM proveedor WHERE Id ='".$id_p."' ";
        $resultado=$conexion2->query($sentencia) or die ("Error al consultar el producto".mysqli_error($conexion2));
        $fila=$resultado->fetch_assoc();

        return [
            $fila['Id'],
            $fila['identificacion'],            
            $fila['proveedor'],
            $fila['direccion'],
            $fila['restriccion'],
            $fila['detalle'],
        ];
    }
    ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Modificar Proveedor</title>
            <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>
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
  
<div class="wrapper row3">
  <main class="hoc container clear"> 
    
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
  <main class="hoc container clear">
  <section id="services">
      <div class="sectiontitle">
        <p class="nospace font-x3">Drogueria JJ</p>
        <h6 class="heading">Modificar Proveedor</h6>
        </article>
        </li>
        <div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing; 10px 5px;">
 
    <br>
    <form action="modif_prov2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    
    <label>Id: <input type="number" name="Id" value="<?php echo $_GET['Id']?>" readonly><br></label>
    <br>
    <label>Identificación: <input type="text" id="identificacion" name="identificacion" value="<?php echo $consulta[1] ?>"><br></label>

    <br>
    <label>Proveedor: <input type="text" id="proveedor" name="proveedor" value="<?php echo $consulta[2] ?>"><br></label>
    
    <br>
    <label>Dirección: <input type="text" id="direccion" name="direccion" value="<?php echo $consulta[3] ?>"><br></label>
    
    <br>
    <label>Restricción <input type="text" id="restriccion" name="restriccion"value="<?php echo $consulta[4] ?>"><br></label>
    
    <br>
    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="detalle" ><?php echo $consulta[5] ?></textarea><br>
    
    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
  </form>


</div><br>
 <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
     <!-- ################################################################################################ -->
  
        </li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>