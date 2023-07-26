<?php

include_once 'Modelo/clsReportes.php';
include_once 'LibreriaFPDF/fpdf.php';

class controladorreportes
{
	private $vista;
	
    public function ReportesCliente()
	{	
	
		$Cliente=new clsReportes();
        if(!empty($_POST))
		{
            //recibo la caja de texto del formulario html
            $Usuario=$_POST['txtusuario'];
           
            // Crear el objeto FPDF
		    $pdf = new FPDF();
		
		    // Agregar una página
		    $pdf->AddPage();
		    $pdf->Cell(190,30,$pdf->Image('img/imgprincipal2.png',130,12,40,30),0,1,'R');
		
		    // Establecer la fuente y el tamaño del título
		    $pdf->SetFont('Arial', 'B', 14);
		    $pdf->Cell(0, 10,utf8_decode('Reporte de datos del cliente'), 0, 1, 'C');

		    // Consulta a la base de datos
            
            $Consulta=$Cliente->ConsultaDatosCliente($Usuario);	    
		    //Centrar la tabla
            $pdf->SetLeftMargin(10);
            if ($Consulta->num_rows > 0) {
        
                // Establecer la fuente y el tamaño del encabezado de la tabla
                $pdf->SetFont('Arial', 'B', 8);

                // Imprimir los encabezados de la tabla
                $pdf->Cell(60, 10, 'Nombre Completo', 1, 0, 'C');
                $pdf->Cell(60, 10, 'Direccion', 1, 0, 'C');
                $pdf->Cell(50, 10, 'Correo Electronico', 1, 0, 'C');
                $pdf->Cell(20, 10, 'Telefono', 1, 1, 'C');
            
                // Establecer la fuente y el tamaño del contenido de la tabla
                $pdf->SetFont('Arial', '', 8);

                // Imprimir los datos de la tabla
                while ($row = $Consulta->fetch_assoc()) {
                    $pdf->Cell(60, 10, $row["cli_nombre"].' '.$row["cli_apaterno"].' '.$row["cli_amaterno"], 1, 0, 'C');
                    $pdf->Cell(60, 10, $row["colonia"].', '.$row["calle_No_casa"], 1, 0, 'C');
                    $pdf->Cell(50, 10, $row["cli_correo"], 1, 0, 'C');
                    $pdf->Cell(20, 10, $row["cli_telefono"], 1, 1, 'C');
                   
                }

                // Salto de línea después de la tabla
                $pdf->Ln(10);

                $Cliente->conectar->close();
                // Mostrar el PDF
                $pdf->Output();
            } else {

                $vista="Vistas/Acceso/frmDenegado.php";
                include_once("Vistas/frmplantilla.php");
            }

            $Cliente->conectar->close();
            //******************	
            
           
        }else
        {
            $vista="Vistas/Administrador/frmReportes.php";
			include_once("Vistas/frmplantilla.php");
        }

    }
}

?>