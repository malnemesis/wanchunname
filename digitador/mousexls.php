<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Lista_Mouse.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Mouse</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="silver"><center><strong>Lista de Mouse Registrados</strong></center></td>
  </tr>
  <tr>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Act. Fij.</th>
                  <th>Observaci&oacute;n</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT estados.EST_DETALLE,monitor.MON_MARCA,monitor.MON_MODELO,monitor.MON_SERIE,monitor.MON_CODACTFIJ,monitor.MON_OBSERVACION FROM mouse INNER JOIN estados ON mouse.EST_CODIGO = estados.EST_CODIGO WHERE MOU_MARCA NOT IN('NINGUNO',' ')";       
              ?>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($mon=mysqli_fetch_row($result)){ 
                              $mon[0]."||".
                              $mon[1]."||".
                              $mon[2]."||".
                              $mon[3]."||".
                              $mon[4]."||".
                              $mon[5];
             ?>
                <tr>
                  <td><?php echo $mon[0]?></td>
                  <td><?php echo $mon[1]?></td>
                  <td><?php echo $mon[2]?></td>
                  <td><?php echo $mon[3]?></td>
                  <td><?php echo $mon[4]?></td>
                  <td><?php echo $mon[5]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
</table>
</body>
</html>