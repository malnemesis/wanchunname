<?php
include 'action/check-login.php';
include 'action/alerts.php';
?>

<!DOCTYPE html>
<html lang="es">
    <?php include 'head.php';?>
    <?php include 'header.php';?>
    <?php include 'navigation.php';?>
    
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?php echo number_format($equipoalert); ?></h3>
                            <p>Asignaciones Realizadas</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <caption>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Asignar Nuevo
				            <i class="fa fa-plus" aria-hidden="true"></i>
                        </button>
                        <a href="asignacionesxls.php"><button class="btn btn-success" title="XLS"><i class="fa fa-file-excel-o" aria-hidden="true"></i></button></a>
                    </caption>
                       
                      <!-- Modal para registros nuevos -->
                      
                      <div class="modal fade" id="modalNuevo">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Asignar Equipo a Usuario</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Escoga Usuario:</label>
                                            <?php
                                                include '../config/conexion.php';
                                                $sql = "SELECT PER_CODIGO,PER_NOMBRES FROM persona ORDER BY PER_NOMBRES"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="pe_codigo">
                                            <?php
                                                $result = $conn->query($sql);
                                                $result->num_rows > 0;
                                                while($dt=mysqli_fetch_row($result)){ 
                                                    $v=$dt[0]."||".
                                                    $dt[1];          
                                            ?>
                                            <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Escoga Departamento:</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT DEP_CODIGO,DEP_DETALLE FROM departamento ORDER BY DEP_DETALLE"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="de_codigo">        
                                            <?php
                                                $result = $conn->query($sql);
                                                $result->num_rows > 0;
                                                while($dt=mysqli_fetch_row($result)){ 
                                                    $dt[0]."||".
                                                    $dt[1];            
                                            ?>
                                            <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                            <?php
                                             }
                                            ?>
                                            </select>
                                        </div> 
                                        <div class="form-group">
                                            <label>Escoga CPU: (Tipo, Marca, Modelo, Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT c.C_CODIGO,concat(c.C_TIPO,', ',c.C_MARCA,', ',c.C_MODELO,', ',c.C_SERIE,', ',c.C_CODACTFIJ) as Equipo FROM cpu c,estados e WHERE e.EST_CODIGO=c.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="cp_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Escoga Monitor: (Marca, Modelo, Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT m.MON_CODIGO,concat(m.MON_MARCA,', ',m.MON_MODELO,', ',m.MON_SERIE,', ',m.MON_CODACTFIJ) AS Monitor FROM monitor m,estados e WHERE m.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="mon_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Escoga Teclado: (Marca, Modelo, Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT k.KEY_CODIGO,concat(k.KEY_MARCA,', ',k.KEY_MODELO,', ',k.KEY_SERIE,', ',k.KEY_CODACTFIJ) AS Teclado 
                                               FROM keyboard k,estados e 
                                               WHERE k.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="ke_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Escoga Mouse: (Marca, Modelo, Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT m.MOU_CODIGO,concat(m.MOU_MARCA,', ',m.MOU_MODELO,', ',m.MOU_SERIE,', ',m.MOU_CODACTFIJ) AS Mouse
                                               FROM mouse m,estados e 
                                               WHERE m.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="mo_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Escoga UPS: (Marca, Modelo Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT u.U_CODIGO,concat(u.U_MARCA,', ',u.U_MODELO,', ',u.U_SERIE,', ',u.U_CODACTFIJ) AS UPS FROM ups u,estados e WHERE u.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="u_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Escoga Impresora: (Marca, Modelo, Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT i.IMP_CODIGO,concat(i.IMP_MARCA,', ',i.IMP_MODELO,', ',i.IMP_SERIE,', ',i.IMP_CODACTFIJ) AS Impresora FROM impresora i,estados e WHERE i.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="im_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                         <div class="form-group">
                                            <label>Escoga Dispositivo/Red: (Tipo, Marca, Modelo Serie, Act.Fij.)</label>
                                            <?php
                                               include '../config/conexion.php';
                                               $sql = "SELECT dr.DR_CODIGO,concat(dr.DR_TIPO,', ',dr.DR_MARCA,', ',dr.DR_MODELO,', ',dr.DR_SERIE,', ',dr.DR_CODACTFIJ) AS Dispositivo FROM dispositivo_red dr,estados e WHERE dr.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')"; 
                                            ?>
                                            <select class="form-control select2" style="width: 100%;" id="dr_codigo">        
                                                <?php
                                                    $result = $conn->query($sql);
                                                    $result->num_rows > 0;
                                                    while($dt=mysqli_fetch_row($result)){ 
                                                                $dt[0]."||".
                                                                $dt[1];
                                                ?>
                                                <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                         </div>
                                          <div class="form-group">
                                            <label>Observación:</label>
                                            <input type="text" class="form-control" style='text-transform:uppercase' id="observacion"/>
                                          </div> 
                                    </form>
                                </div>
                                <div class="modal-footer">
                                   <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
                                   <button type="button" class="btn btn-primary" data-dismiss="modal" id="asignarequipo">Guardar Asignacion de Dispositivos</button>
                                </div>
                        </div>
                    </div>
                </div>          
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="box-body">
                    
<!-- Modal para edici�n -->
<div class="modal fade" id="modalEdicion">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edici&oacute;n de Asignaci&oacute;n de Dispositivos a Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
                    <form>
                        <input type="text" hidden="" id="EQU_CODIGO"/>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Usuario Asignado:</label> <input type="text" class="form-control text-uppercase" id="persona" readonly="" />
                            </div>    
                            <div class="form-group col-md-6">
                                <label>Cambiar Usuario por:</label>
                                <?php include '../config/conexion.php'; $sql = "SELECT PER_CODIGO,PER_NOMBRES FROM persona ORDER BY PER_NOMBRES";?>
                                <select class="form-control select2" style="width: 100%;" id="pe_codigou">
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $v=$dt[0]."||".
                                            $dt[1];          
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Departamento Asignado:</label> <input type="text" class="form-control text-uppercase" id="departamento" readonly="" />
                            </div>
                            <div class="form-group col-md-6">   
                                <label>Cambiar Departamento por:</label>
                                <?php include '../config/conexion.php'; $sql = "SELECT DEP_CODIGO,DEP_DETALLE FROM departamento ORDER BY DEP_DETALLE";?>
                                <select class="form-control select2" style="width: 100%;" id="de_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];            
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>CPU Asignado:</label> <input type="text" class="form-control text-uppercase" id="cpu" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar CPU por:</label>
                                <?php include '../config/conexion.php';$sql = "SELECT c.C_CODIGO,concat(c.C_TIPO,', ',c.C_MARCA,', ',c.C_MODELO,', ',c.C_SERIE) as Equipo FROM cpu c,estados e WHERE e.EST_CODIGO=c.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                <select class="form-control select2" style="width: 100%;" id="cp_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Monitor Asignado:</label> <input type="text" class="form-control text-uppercase" id="monitor" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar Monitor por:</label>
                                <?php include '../config/conexion.php';$sql = "SELECT m.MON_CODIGO,concat(m.MON_MARCA,', ',m.MON_MODELO,', ',m.MON_SERIE) AS Monitor FROM monitor m,estados e WHERE m.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                <select class="form-control select2" style="width: 100%;" id="mon_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Teclado Asignado:</label> <input type="text" class="form-control text-uppercase" id="keyboard" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar Teclado por:</label>
                                    <?php include '../config/conexion.php';$sql = "SELECT k.KEY_CODIGO,concat(k.KEY_MARCA,', ',k.KEY_MODELO,', ',k.KEY_SERIE) AS Teclado FROM keyboard k,estados e WHERE k.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                    <select class="form-control select2" style="width: 100%;" id="ke_codigou">        
                                        <?php
                                            $result = $conn->query($sql);
                                            $result->num_rows > 0;
                                            while($dt=mysqli_fetch_row($result)){ 
                                                $dt[0]."||".
                                                $dt[1];
                                        ?>
                                        <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Mouse Asignado:</label> <input type="text" class="form-control text-uppercase" id="mouse" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar Mouse por:</label>
                                <?php
                                    include '../config/conexion.php';$sql = "SELECT m.MOU_CODIGO,concat(m.MOU_MARCA,', ',m.MOU_MODELO,', ',m.MOU_SERIE) AS Mouse FROM mouse m,estados e WHERE m.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                    <select class="form-control select2" style="width: 100%;" id="mo_codigou">        
                                        <?php
                                            $result = $conn->query($sql);
                                            $result->num_rows > 0;
                                            while($dt=mysqli_fetch_row($result)){ 
                                                $dt[0]."||".
                                                $dt[1];
                                        ?>
                                        <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                        <?php
                                            }
                                        ?>
                                    </select>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <label>UPS Asignado:</label> <input type="text" class="form-control text-uppercase" id="ups" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar UPS por:</label>
                                <?php include '../config/conexion.php';$sql = "SELECT u.U_CODIGO,concat(u.U_MARCA,', ',u.U_MODELO,', ',u.U_SERIE) AS UPS FROM ups u,estados e WHERE u.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                <select class="form-control select2" style="width: 100%;" id="u_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <label>Impresora Asignada:</label> <input type="text" class="form-control text-uppercase" id="impresora" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Cambiar Impresora por:</label>
                                <?php include '../config/conexion.php';$sql = "SELECT i.IMP_CODIGO,concat(i.IMP_MARCA,', ',i.IMP_MODELO,', ',i.IMP_SERIE) AS Impresora FROM impresora i,estados e WHERE i.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                <select class="form-control select2" style="width: 100%;" id="im_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                         </div>
                         <div class="row">
                            <div class="form-group col-md-6">
                                <label>Dispositivo de Red Asignado:</label> <input type="text" class="form-control text-uppercase" id="dispositivo_red" readonly="" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Escoga Dispositivo/Red:</label>
                                <?php include '../config/conexion.php';$sql = "SELECT dr.DR_CODIGO,concat(dr.DR_TIPO,', ',dr.DR_MARCA,', ',dr.DR_MODELO,', ',dr.DR_SERIE) AS Dispositivo FROM dispositivo_red dr,estados e WHERE dr.EST_CODIGO=e.EST_CODIGO AND e.EST_DETALLE IN ('DISPONIBLE','ACTIVO')";?>
                                <select class="form-control select2" style="width: 100%;" id="dr_codigou">        
                                    <?php
                                        $result = $conn->query($sql);
                                        $result->num_rows > 0;
                                        while($dt=mysqli_fetch_row($result)){ 
                                            $dt[0]."||".
                                            $dt[1];
                                    ?>
                                    <option value="<?php echo $dt[0];?>"><?php echo $dt[1];?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                         </div>
                         <div class="form-group">
                            <label>Observaci&oacute;n:</label>
                            <input type="text" class="form-control" style='text-transform:uppercase' id="observacionu"/>
                         </div> 
                         <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i> <strong>Cerrar</strong></button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="actualizarasignacion">Actualizar Asignacion de Dispositivos</button>
                         </div>
                    </form>
            </div>
        </div>
    </div>
</div>
<div id="tabla" class="table table-responsive table-sm"></div>

</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box-header with-border"></div>
    </div>
</div>
</div>

<?php include 'footer.php';?>

</section>
</body>
</html>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabla').load('../componentes/tabla_equipos_asignados.php');
});
</script>

<script type="text/javascript">
$(document).ready(function() {
    $('#asignarequipo').click(function(){
        pe_codigo=$('#pe_codigo').val();
        de_codigo=$('#de_codigo').val();
        cp_codigo=$('#cp_codigo').val();
        mon_codigo=$('#mon_codigo').val();
        ke_codigo=$('#ke_codigo').val();
        mo_codigo=$('#mo_codigo').val();
        u_codigo=$('#u_codigo').val();
        im_codigo=$('#im_codigo').val();
        dr_codigo=$('#dr_codigo').val();
        observacion=$('#observacion').val();
        asignaequipo(pe_codigo, de_codigo, cp_codigo, mon_codigo, ke_codigo, mo_codigo, u_codigo, im_codigo, dr_codigo, observacion);
    });
    
    $('#actualizarasignacion').click(function(){
        pe_codigou=$('#pe_codigou').val();
        de_codigou=$('#de_codigou').val();
        cp_codigou=$('#cp_codigou').val();
        mon_codigou=$('#mon_codigou').val();
        ke_codigou=$('#ke_codigou').val();
        mo_codigou=$('#mo_codigou').val();
        u_codigou=$('#u_codigou').val();
        im_codigou=$('#im_codigou').val();
        dr_codigou=$('#dr_codigou').val();
        acualizaasigtnacionequipos(pe_codigou,de_codigou,cp_codigou,mon_codigou,ke_codigou,mo_codigou,u_codigou,im_codigou,dr_codigou);  
    });
});
</script>
</div>
