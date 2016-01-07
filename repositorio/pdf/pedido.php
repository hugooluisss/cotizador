<?php
//require_once('Image_Barcode-1.1.0/Barcode.php');
/*
 * Created on 11/02/2009
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class RPedido extends tFPDF{
	private $cotizacion;
	
	public function RPedido($id){
		$this->pedido = new TPedido($id);
		
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
    	$this->Cell(0, 5, ".:: PEDIDO ::.", 0, 1, 'C');
    	$this->SetFont('Arial', '', 10);
    	//$this->Cell(0, 5, $this->pedido->getFecha(), 0, 1, 'C');
    	$this->SetY(75);
    	$this->Ln(5);
	}
	
	public function generar($id){
		$this->AddPage();
		
		$pedido = $this->pedido;
		$this->Cell(0, 5, "C. ".$pedido->cliente->getNombre(), 0, 1);
		$this->Ln(10);
		$this->Write(5, utf8_decode("Estimado cliente, por medio del presente, le hago entrega del detalle de su pedido. Cualquier duda favor de contactarnos, con gusto se las resolveremos"));
		
		
		$this->SetFillColor(0, 150, 0);
		$this->Ln(20);
		$this->SetFont('Sans', 'B', 8);
		$this->Cell(80, 8, "Nombre", 0, 0, 'C', 1);
		$this->Cell(40, 8, "Marca", 0, 0, 'C', 1);
		$this->Cell(45, 8, "Talla", 0, 0, 'C', 1);
		$this->Cell(30, 8, "Cantidad", 0, 1, 'C', 1);
		
		$this->SetFont('Sans', '', 6);
		$cantidad = 0;
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from movped join talla using(idTalla) join ropa using(idItem) where idPedido = ".$this->pedido->getId());
		
		while(!$rs->EOF){
			$mov = $rs->fields;
			$this->Cell(80, 8, $mov['descripcion'], "B", 0, 'L');
			$this->Cell(40, 8, $mov["marca"], "B", 0, 'L');
			$this->Cell(45, 8, $mov["nombre"], "B", 0, 'L');
			$this->Cell(30, 8, $mov["cantidad"], "B", 1, 'R');
			$cantidad += $mov["cantidad"];
			
			$rs->moveNext();
		}
		
		if ($unidades > 0){
			$this->SetFont('Sans', '', 10);
			$this->Cell(165, 12, "Unidades", 0, 0, 'R');
			$this->SetFont('Sans', 'B', 11);
			$this->Cell(30, 12, "$ ".sprintf("%d", $unidades), "B", 1, 'R');
		}
		
		$this->SetFont('Sans', 'B', 6);
		$this->Cell(165, 8, "Total a pagar", 0, 0, 'R');
		$this->Cell(30, 8, (string) $pedido->getPrecio(), "B", 1, 'R');
		
		$this->Cell(165, 8, "Seña", 0, 0, 'R');
		$this->Cell(30, 8, $pedido->getAnticipo(), "B", 1, 'R');
		$this->Cell(165, 8, "Resta", 0, 0, 'R');
		$this->Cell(30, 8, (string) sprintf("%0.2f", $pedido->getPrecio() - $pedido->getAnticipo()), "B", 1, 'R');
		
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
		chmod($file, 0555);
		//header('Location: temporal/'.$file);
		
		return $file;
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

}
?>