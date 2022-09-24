<?php

ModificarProveedor($_POST['identificacion'], $_POST['proveedor'], $_POST['direccion'], $_POST['restriccion'], $_POST['detalle']);

function ModificarProveedor($id_prov, $nomp, $direct, $restric, $detalle)
{
    include 'conexion2.php';
    echo $sentencia="UPDATE proveedor SET identificacion='".$id_prov."', proveedor='".$nomp."', direccion='".$direct."', restriccion='".$restric."', detalle='".$detalle."' WHERE identificacion='".$id_prov."' ";
    $conexion2->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion2));
}
?>

<script type="text/javascript">
    alert("Datos Actualizados con Exito");
    window.location.href='index3.php';
</script>