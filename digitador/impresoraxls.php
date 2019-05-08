<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Lista_Impresoras.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Impresoras</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="silver"><center><strong>Lista de Impresoras Registrados</strong></center></td>
  </tr>
  <tr>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Consumible</th>
                  <th>Conectividad</th>
                  <th>Act. Fij.</th>
                  <th>Observaci&oacute;n</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT 
                   estados.EST_DETALLE,
                   i.IMP_MARCA,
                   i.IMP_MODELO,
                   i.IMP_SERIE,
                   i.IMP_CONSUMIBLES,
                   i.IMP_CONECTIVIDAD,
                   i.IMP_CODACTFIJ,
                   i.IMP_OBSERVACION 
                   FROM impresora i
                   INNER JOIN estados ON i.EST_CODIGO = estados.EST_CODIGO 
                   WHERE i.IMP_MARCA NOT IN('NINGUNO',' ')";       
              ?>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($ups=mysqli_fetch_row($result)){ 
                            $ups[0]."||".
                            $ups[1]."||".
                            $ups[2]."||".
                            $ups[3]."||".
                            $ups[4]."||".
                            $ups[5]."||".
                            $ups[6]."||".
                            $ups[7];
             ?>
                <tr>
                      <td><?php echo $ups[0]?></td>
                      <td><?php echo $ups[1]?></td>
                      <td><?php echo $ups[2]?></td>
                      <td><?php echo $ups[3]?></td>
                      <td><?php echo $ups[4]?></td>
                      <td><?php echo $ups[5]?></td>
                      <td><?php echo $ups[6]?></td>
                      <td><?php echo $ups[7]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
</table>
</body>
</html>