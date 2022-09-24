<?php
    EliminarProducto($_GET['id_productos']);

    function EliminarProducto($id_prod)
    {
        include 'conexion2.php';
        $sentencia="DELETE FROM productos WHERE id_productos='".$id_prod."' ";
        $conexion2->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion2));

    }
?>

<script type="text/javascript">
    alert("Producto Eliminado");
    window.location.href='index2.php';
    </script>