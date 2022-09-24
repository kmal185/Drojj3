<?php



NuevoProveedor($_POST['identificacion'], $_POST['proveedor'], $_POST['direccion'], $_POST['restriccion'], $_POST['detalle']);

function NuevoProveedor($id_prov, $nom, $direct, $restric, $detalle)
    {
    include "conexion2.php";
    $sentencia= "INSERT INTO proveedor (identificacion, proveedor, direccion, restriccion, detalle) VALUES ('".$id_prov."', '".$nom."','".$direct."', '".$restric."', '".$detalle."')";
    $conexion2->query($sentencia) or die ("Error al ingresar el producto".mysqli_error($conexion2));
    }
?>

<script type="text/javascript">
    alert ("proveedor ingresado Exitosamente");
    window.location.href='index3.php';
    </script>