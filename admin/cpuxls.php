<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Lista_CPUs.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de CPUs</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="13" bgcolor="silver"><center><strong>Lista de CPUs</strong></center></td>
  </tr>
  <tr>
                  <th>ID</th>
                  <th>Estado</th>
                  <th>Tipo</th>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Serie</th>
                  <th>Tipo Procesador</th>
                  <th>Nro Procesadores</th>
                  <th>Tama&ntilde;o RAM</th>
                  <th>Nro M&oacute;dulos</th>
                  <th>Tama&ntilde;o Disco</th>
                  <th>Nro Discos</th>
                  <th>Observaci&oacute;n</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT
cpu.C_CODIGO,
estados.EST_DETALLE,
cpu.C_TIPO,
cpu.C_MARCA,
cpu.C_MODELO,
cpu.C_SERIE,
cpu.C_PROCESADOR,
cpu.C_NUMPROCESADOR,
cpu.C_RAM,
cpu.C_NUMMODULO,
cpu.C_DISCODURO,
cpu.C_NUMDISCO,
cpu.C_OBSERVACION
FROM
cpu
INNER JOIN estados ON cpu.EST_CODIGO = estados.EST_CODIGO WHERE C_TIPO NOT IN('NINGUNO',' ')";       
              ?>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($cpu=mysqli_fetch_row($result)){ 
                    $datos =  $cpu[0]."||".
                              $cpu[1]."||".
                              $cpu[2]."||".
                              $cpu[3]."||".
                              $cpu[4]."||".
                              $cpu[5]."||".
                              $cpu[6]."||".
                              $cpu[7]."||".
                              $cpu[8]."||".
                              $cpu[9]."||".
                              $cpu[10]."||".
                              $cpu[11]."||".
                              $cpu[12];
             ?>
                <tr>
                  <td><?php echo $cpu[0]?></td>
                  <td><?php echo $cpu[1]?></td>
                  <td><?php echo $cpu[2]?></td>
                  <td><?php echo $cpu[3]?></td>
                  <td><?php echo $cpu[4]?></td>
                  <td><?php echo $cpu[5]?></td>
                  <td><?php echo $cpu[6]?></td>
                  <td><?php echo $cpu[7]?></td>
                  <td><?php echo $cpu[8]?></td>
                  <td><?php echo $cpu[9]?></td>
                  <td><?php echo $cpu[10]?></td>
                  <td><?php echo $cpu[11]?></td>
                  <td><?php echo $cpu[12]?></td>
                
                </tr>
             <?php
                }
              ?> 
              </tbody>
</table>
</body>
</html>