<?php
    EliminarProducto($_GET['Id']);

    function EliminarProducto($id_p)
    {
        include 'conexion2.php';
        $sentencia="DELETE FROM proveedor WHERE Id='".$id_p."' ";
        $conexion2->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion2));

    }
?>

<script type="text/javascript">
    alert("Proveedor Eliminado");
    window.location.href='index3.php';
    </script>