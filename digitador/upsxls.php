<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Lista_Ups.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de UPS</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="8" bgcolor="silver"><center><strong>Lista de UPS's Registrados</strong></center></td>
  </tr>
  <tr>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Capacidad de Carga</th>
                  <th>Nro. de Tomas</th>
                  <th>Act. Fij.</th>
                  <th>Observación</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT 
                   estados.EST_DETALLE,
                   ups.U_MARCA,
                   ups.U_MODELO,
                   ups.U_SERIE,
                   ups.U_CAPACIDADCARGA,
                   ups.U_NUMTOMAS,
                   ups.U_CODACTFIJ,
                   ups.U_OBSERVACION 
                   FROM ups 
                   INNER JOIN estados ON ups.EST_CODIGO = estados.EST_CODIGO 
                   WHERE U_MARCA NOT IN('NINGUNO',' ')";       
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