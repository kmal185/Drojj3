<?php
include("conexion2.php");
$productos ="SELECT * FROM productos";
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");
?>
<table class="table table-striped table-dark " id= "table_id">

                   
<thead>    
<tr>
<th>id_productos</th>
<th>nombre</th>
<th>descripcion</th>
<th>fecha</th>
<th>laboratorio</th>


</tr>
</thead>
<tbody>

  <?php
  $resultado = mysqli_query($conexion2,$productos);
  while($fila =mysqli_fetch_assoc($resultado)){?>
  <tr>
    <td><?php echo $fila["id_productos"];?></td>
    <td><?php echo $fila["nombre"];?></td>
    <td><?php echo $fila["descripcion"];?></td>
    <td><?php echo $fila["fecha"];?></td>
    <td><?php echo $fila["laboratorio"];?></td>
  </tr>
  <?php } mysqli_free_result($resultado);?>
  </table>


