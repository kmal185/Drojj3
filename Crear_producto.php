<?php
    include "conexion.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Agregar Productos</title>
</head>
<body>
    <div class="todo">
        <div id="cabecera">
            <img style="text-align:center ;" src="imagenes/6.png" width="1088" id="img1">
</div>

<div id="contenido">
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing; 10px 5px;">
    <span><h1> Nuevo Producto </h1></span>
    <br>
    <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
    <label>Id Producto: </label>
    <input type="text" id="id_producto" name="id_producto"><br>

    <br>
    <label>Producto: </label>
    <input type="text" id="producto" name="producto"><br>

    <br>
    <label>Descripcion: </label>
    <textarea style="border-radius: 10px;" rows="3" cols="50" name="descripcion"></textarea><br>

    <br>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>
</div>

</div>

<div id="footer">
    <img src="imagenes/2.png" id="img2">
</div>

</div>

</body>
</html>

        