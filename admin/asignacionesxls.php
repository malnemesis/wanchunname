<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Asignaciones.xls");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista de Asignaciones</title>
</head>
<body>
<table width="60%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="11" bgcolor="silver"><center><strong>Lista de Asignaciones de Dispositivos</strong></center></td>
  </tr>
  <tr>
                  <th>ID</th>
                  <th>Usuario</th>
                  <th>Departamento</th>
                  <th>Equipo</th>
                  <th>Monitor</th>
                  <th>Teclado</th>
                  <th>Mouse</th>
                  <th>UPS</th>
                  <th>Impresora</th>
                  <th>Dispositivo/Red</th>
                  <th>Observaci&oacute;n</th>
  </tr>
  
	             <?php
                   include '../config/conexion.php';
                   $sql = "SELECT * FROM vis_equiposasignados";       
              ?>
             
              <tbody>
              
             <?php
                $result = $conn->query($sql);
                $result->num_rows > 0;
               while($dt=mysqli_fetch_row($result)){ 
                            $dt[0]."||".
                            $dt[1]."||".
                            $dt[2]."||".
                            $dt[3]."||".
                            $dt[4]."||".
                            $dt[5]."||".
                            $dt[6]."||".
                            $dt[7]."||".
                            $dt[8]."||".
                            $dt[9]."||".
                            $dt[10];
             ?>
                <tr>
                  <td><?php echo $dt[0]?></td>
                  <td><?php echo $dt[1]?></td>
                  <td><?php echo $dt[2]?></td>
                  <td><?php echo $dt[3]?></td>
                  <td><?php echo $dt[4]?></td>
                  <td><?php echo $dt[5]?></td>
                  <td><?php echo $dt[6]?></td>
                  <td><?php echo $dt[7]?></td>
                  <td><?php echo $dt[8]?></td>
                  <td><?php echo $dt[9]?></td>
                  <td><?php echo $dt[10]?></td>
                
                </tr>
             <?php
                }
              ?> 
              </tbody>
</table>
</body>
</html>