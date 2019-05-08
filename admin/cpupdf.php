<?php
    require('../fpdf/fpdf.php');
    class PDF extends FPDF{
        function TablaDatos($header, $data){
            // Colores, ancho de línea y fuente en negrita
        	$this->SetFillColor(255,0,0);
        	$this->SetTextColor(255);
        	$this->SetDrawColor(128,0,0);
        	$this->SetLineWidth(.3);
        	$this->SetFont('','B');
        	// Cabecera
    	    $w = array(12, 25, 20, 20, 35, 25, 35);
    	    for($i=0;$i<count($header);$i++)
            $this->Cell($w[$i],7,$header[$i],1,0,'C',true);
    	    $this->Ln();
	        // Restauración de colores y fuentes
        	$this->SetFillColor(224,235,255);
        	$this->SetTextColor(0);
        	$this->SetFont('');
            // Datos
            include '../config/conexion.php';
            $sql = "SELECT cpu.C_CODIGO,estados.EST_DETALLE,cpu.C_TIPO,cpu.C_MARCA,cpu.C_MODELO,cpu.C_SERIE,cpu.C_PROCESADOR,cpu.C_NUMPROCESADOR,cpu.C_RAM,cpu.C_NUMMODULO,cpu.C_DISCODURO,cpu.C_NUMDISCO,cpu.C_OBSERVACION FROM cpu INNER JOIN estados ON cpu.EST_CODIGO = estados.EST_CODIGO WHERE C_TIPO NOT IN('NINGUNO')";
            $result = $conn->query($sql);
            $result->num_rows > 0;
            while($cpu=mysqli_fetch_row($result)){ 
                $fill = false;
                $this->Cell($w[0],6,$cpu[0],'LR',0,'L',$fill);
  		        $this->Cell($w[1],6,$cpu[1],'LR',0,'L',$fill);
                $this->Cell($w[2],6,$cpu[2],'LR',0,'L',$fill);
                $this->Cell($w[3],6,$cpu[3],'LR',0,'L',$fill);
                $this->Cell($w[4],6,$cpu[4],'LR',0,'L',$fill);
                $this->Cell($w[5],6,$cpu[5],'LR',0,'L',$fill);
                $this->Cell($w[6],6,$cpu[6],'LR',0,'L',$fill);
                $this->Ln();
                $fill = !$fill;
            }
    	    // Línea de cierre
    	    $this->Cell(array_sum($w),0,'','T');
         }
    }
    $pdf = new PDF('P','mm',array(297,210));
    // Títulos de las columnas
    $header = array('ID', 'Estado', 'Tipo', 'Marca', 'Modelo', 'Serie', 'Procesador');
    // Carga de datos
    $pdf->SetFont('Arial','',8);
    $pdf->AddPage();
    $pdf->TablaDatos($header,$data);
    $pdf->Output();
?>