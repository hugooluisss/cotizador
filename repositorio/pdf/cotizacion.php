<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RCotizacion extends tFPDF{
	
	public function RCotizacion(){
		parent::tFPDF('P', 'mm', 'Letter');
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
	}	
	
	public function Header($nombre){   	
    	$this->SetFont('Arial', 'B', 20);
    	$this->Ln(10);
    	$this->Image('repositorio/img/logo.jpg', 90, 5, 35, 55);
    	$this->SetFont('Sans', '', 12);
    	$this->SetY(65);
    	$this->Cell(0, 5, ".:: COTIZACIÓN ::.", 0, 1, 'C');
    	$this->SetFont('Arial', '', 10);
    	$this->Cell(0, 5, date("d-m-Y"), 0, 1, 'C');
    	$this->SetY(75);
    	$this->Ln(5);
	}
	
	public function generar($id){
		$this->AddPage();
		
		$cotizacion = new TCotizacion($id);
		$this->Cell(0, 5, "C. ".$cotizacion->cliente->getNombre(), 0, 1);
		$this->Ln(10);
		$this->Write(5, utf8_decode("Estimado cliente, por medio del presente, le hago entrega de la cotización que nos ha solicitado. Cualquier duda favor de contactarnos, con gusto se las resolveremos"));
		
		
		$this->SetFillColor(0, 150, 0);
		$this->Ln(20);
		$this->SetFont('Sans', 'B', 8);
		$this->Cell(135, 8, "Descripción", 0, 0, 'C', 1);
		$this->Cell(20, 8, "Precio", 0, 0, 'C', 1);
		$this->Cell(20, 8, "Descuento", 0, 0, 'C', 1);
		$this->Cell(20, 8, "Total", 0, 1, 'C', 1);
		
		$this->SetFont('Sans', '', 6);
		foreach($cotizacion->movimientos as $mov){
			$this->Cell(135, 8, $mov['concepto'], "B", 0, 'L');
			$this->Cell(20, 8, $mov["neto"], "B", 0, 'R');
			$this->Cell(20, 8, $mov["descuento"]."%", "B", 0, 'R');
			$this->Cell(20, 8, $mov["total"], "B", 1, 'R');
		}
		
		$this->SetFont('Sans', 'B', 6);
		$this->Cell(175, 8, "Subtotal", 0, 0, 'R');
		$this->Cell(20, 8, $cotizacion->getSubtotal(), "B", 1, 'R');
		
		$this->Cell(175, 8, "Cargos por servicios adicionales", 0, 0, 'R');
		$this->Cell(20, 8, (string) ($cotizacion->getTotal() - $cotizacion->getSubtotal()), "B", 1, 'R');
		
		$this->Cell(175, 8, "Total", 0, 0, 'R');
		$this->Cell(20, 8, $cotizacion->getTotal(), "B", 1, 'R');
	}
	
	function Footer(){
		$this->SetY(-15);
		$this->SetFont('Arial', 'I', 8);
		$this->Cell(0, 10, utf8_decode('Página ').$this->PageNo(), 0, 0, 'C');
		
		$this->SetY(-30);
		$this->write(5, utf8_decode("Estos precios están sujetos a cambios sin previo aviso. La presenta aplica para cualquier forma de pago. La cotización no representa forma alguna, reserva de inventario"));
		
		$this->SetY(-55);
		$this->Cell(0, 5, "______________________________________________", 0, 1, 'C');
		global $sesion;
		$usuario = new TUsuario($sesion['usuario']);
		$this->Cell(0, 5, utf8_decode($usuario->getNombre().' '.$usuario->getApp()), 0, 1, 'C');
	}
	
	private function cleanFiles(){
    	$t = time();
    	$dir = "temporal";
    	$h = opendir($dir);
    	while($file=readdir($h)){
        	if(substr($file,0,3)=='tmp' && substr($file,-4)=='.pdf'){
            	$path = $dir.'/'.$file;
            	if($t-filemtime($path)>3600)
                	@unlink($path);
        	}
    	}
    	closedir($h);
	}
	
	public function Output(){
		$file = "temporal/".basename(tempnam("temporal/", 'tmp'));
		rename($file, $file.'.pdf');
		$file .= '.pdf';		
		parent::Output($file, 'F');
		//header('Location: temporal/'.$file);
		
		return $file;
	}
}
?>