<?php

ModificarProducto($_POST['id_productos'], $_POST['producto'], $_POST['descripcion'], $_POST['fecha'], $_POST['imagen'], $_POST['laboratorio'] );

function ModificarProducto($id_prod, $nom, $descrip, $fecha, $imagen,$laboratorio)
{
    include 'conexion2.php';
    echo $sentencia="UPDATE productos SET id_productos='".$id_prod."', nombre='".$nom."', descripcion='".$descrip."', fecha='".$fecha."', imagen='".$imagen."', laboratorio='".$laboratorio."' WHERE id_productos='".$id_prod."' ";
    $conexion2->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion2));
}
?>

<script type="text/javascript">
    alert("Datos Actualizados con Exito");
    window.location.href='index2.php';
</script>