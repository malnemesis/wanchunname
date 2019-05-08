<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Lista_DispositivosRed.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista Dispositivos de Red</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="10" bgcolor="silver"><center><strong>Lista Dispositivos de Red Registrados</strong></center></td>
  </tr>
  <tr>
                  <th>ID</th>
                  <th>Estado</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Tipo</th>
                  <th>N° de puertos LAN</th>
                  <th>N° de puertos SFP</th>
                  <th>Conectividad WIFI</th>
                  <th>Observaci&oacute;n</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT 
                   dr.DR_CODIGO,
                   estados.EST_DETALLE,
                   dr.DR_MARCA,
                   dr.DR_MODELO,
                   dr.DR_SERIE,
                   dr.DR_TIPO,
                   dr.DR_NUMPUERTOSLAN,
                   dr.DR_NUMPUERTOSSFP,
                   dr.DR_CONECTIVIDADWIFI,
                   dr.DR_OBSERVACION 
                   FROM dispositivo_red dr 
                   INNER JOIN estados ON dr.EST_CODIGO = estados.EST_CODIGO 
                   WHERE dr.DR_MARCA NOT IN('NINGUNO',' ')";       
              ?>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dr=mysqli_fetch_row($result)){ 
                            $dr[0]."||".
                            $dr[1]."||".
                            $dr[2]."||".
                            $dr[3]."||".
                            $dr[4]."||".
                            $dr[5]."||".
                            $dr[6]."||".
                            $dr[7]."||".
                            $dr[8]."||".
                            $dr[9];
             ?>
                <tr>
                      <td><?php echo $dr[0]?></td>
                      <td><?php echo $dr[1]?></td>
                      <td><?php echo $dr[2]?></td>
                      <td><?php echo $dr[3]?></td>
                      <td><?php echo $dr[4]?></td>
                      <td><?php echo $dr[5]?></td>
                      <td><?php echo $dr[6]?></td>
                      <td><?php echo $dr[7]?></td>
                      <td><?php echo $dr[8]?></td>
                      <td><?php echo $dr[9]?></td>
                </tr>
             <?php
                }
              ?> 
              </tbody>
</table>
</body>
</html>