
<!DOCTYPE html>
<html lang="es">
<head>
<title>Drogueria JJ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/01.png');"> 
    <p></p>
    <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a href="./index.php">SC-INNOVASOFT</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
      <form class="w3-container" action="controller_login.php" method="post">
        <input type="hidden" name="salir" value="salir">
        <button class="w3-btn w3-green">Salir</button>
    </form>
                  <a href="index.php"><img src="iconos/Door.PNG"></a>
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
             <p class="nospace font-xs">Drogueria JJ</p>
      </div>
        
        
        <h1>Registrarse</h1>
    </div>
    <div>
        <form class="w3-container" action="controller_login.php" method="post">
            <p>
                <label class="w3-label"><b>Nombre de Usuario o correo electrónico</label>
                <input class="w3-input w3-border" type="text" name="usuario">
            </p>
            <p>
                <label class="w3-label">Password</label>
                <input class="w3-input w3-border" type="password" name="pas">
            </p>
            <p>
               <input type="hidden" name="registrarse" value="registrarse">
                <button class="w3-btn w3-green">Registrarse</button>
            </p>
            <p><a href="index.php"><H1>No registrarse</h1></a></p>
        </form> 
    </div>
<footer>
    <div class="w3-container w3-black">
        <h4>SC-INNOVASOFT 2022</h4>
    </div>
</footer>

</body>
</html>