<?php
include("conexion2.php");
$proveedor ="SELECT * FROM proveedor";
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=reporte.xls");
?>
<table class="table table-striped table-dark " id= "table_id">

                   
<thead>    
<tr>
<th>proveedor</th>
<th>identificacion</th>
<th>direccion</th>
<th>restriccion</th>
<th>detalle</th>


</tr>
</thead>
<tbody>

  <?php
  $resultado = mysqli_query($conexion2,$proveedor);
  while($fila =mysqli_fetch_assoc($resultado)){?>
  <tr>
    <td><?php echo $fila["proveedor"];?></td>
    <td><?php echo $fila["identificacion"];?></td>
    <td><?php echo $fila["direccion"];?></td>
    <td><?php echo $fila["restriccion"];?></td>
    <td><?php echo $fila["detalle"];?></td>
  </tr>
  <?php } mysqli_free_result($resultado);?>
  </table>


