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
	private $formatoFondo;
	
	public function RPedido($id, $formatoFondo = true){
		$this->pedido = new TPedido($id);
		
		parent::tFPDF('P', 'mm', array(187, 239));
		$this->AddFont('Sans','', 'DejaVuSans.ttf', true);
		$this->AddFont('Sans','B', 'DejaVuSans-Bold.ttf', true);
		$this->AddFont('Sans','U', 'DejaVuSans-Oblique.ttf', true);
		$this->AddFont('Sans','BU', 'DejaVuSans-BoldOblique.ttf', true);
		$this->cleanFiles();
		$this->SetAutoPageBreak(false, 0);
		$this->formatoFondo = $formatoFondo;
	}	
	
	public function Header($nombre){   	
    	$this->SetFont('Arial', '', 8);
	}
	
	public function generar($id){
		$this->AddPage();
		if ($formatoFondo)
			$this->Image('repositorio/img/orden.jpg', 0, 0, 190, 240);
		
		
		$pedido = $this->pedido;
		
		$this->SetFont('Arial', 'B', 8);
		$this->SetXY(95, 32); $this->Cell(15, 4, "No. Orden: ", 0, 0, 'L');
		$this->SetFont('Arial', '', 8);
		$this->SetXY(110, 32); $this->Cell(40, 4, (string )$pedido->getId(), 0, 0, 'R');
		
		$this->SetXY(24, 46);
		$this->Cell(0, 5, $pedido->cliente->getNombre(), 0);
		$this->SetXY(24, 56);
		$this->Cell(0, 5, $pedido->cliente->getCelular(), 0);
		$this->SetXY(24, 65);
		$this->Cell(0, 5, $pedido->cliente->getEmail(), 0);
		
		#registro
		$this->SetXY(40, 29); $this->Cell(0, 5, $pedido->getRegistro(), 0);
		
		#entrega
		$entrega = explode("-", $pedido->getEntrega());
		$entregaAux = explode(" ", $entrega[2]);
		$entrega[2] = $entregaAux[0];
		$entregaHora = explode(":", $entregaAux[1]);
		$this->SetXY(40, 37); $this->Cell(0, 5, $entrega[2].'-'.$entrega[1].'-'.$entrega[0], 0);
		$this->SetXY(70, 37); $this->Cell(0, 5, $entregaHora[0], 0);
		$this->SetXY(76, 37); $this->Cell(0, 5, $entregaHora[1], 0);
		
		#Impresiones
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 4");
		if (!$rs->EOF){
			$this->SetXY(116.3, 45); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 5");
		if (!$rs->EOF){
			$this->SetXY(116.3, 48.8); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 6");
		if (!$rs->EOF){
			$this->SetXY(116.3, 53); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 7");
		if (!$rs->EOF){
			$this->SetXY(116.3, 56.4); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 8");
		if (!$rs->EOF){
			$this->SetXY(116.3, 60.2); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		#articulos
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 10");
		if (!$rs->EOF){
			$this->SetXY(127, 45); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 11");
		if (!$rs->EOF){
			$this->SetXY(127, 48.8); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
			
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 12");
		if (!$rs->EOF){
			$this->SetXY(127, 53); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 13");
		if (!$rs->EOF){
			$this->SetXY(127, 56.4); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 14");
		if (!$rs->EOF){
			$this->SetXY(127, 60.2); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
			
		
		$this->SetXY(85, 65); $this->Cell(100, 3, $pedido->getEntregables().'asdf');
		
		#Remeras
		$rs = $db->Execute("select * from movped where idPedido = ".$pedido->getId()." limit 2");
		
		$tallas = array(1, 2, 3, 4, 5, 6, 8, 10, 12, 14, 16, 'S', 'M', 'L', 'XL', 'XLL');
		$y = 82;
		while(!$rs->EOF){
			$x = 16.5;
			$item = '';
			foreach($tallas as $talla){
				$rs2 = $db->Execute("select * from movped join talla using(idTalla) join ropa using(idItem) where idPedido = ".$pedido->getId()." and talla.nombre = 'Talle ".$talla."'");
				
				$this->SetXY($x, $y); $this->Cell(7, 5, $rs2->fields['cantidad'] == ''?0:$rs2->fields['cantidad'], 0, 0, 'R');
				$x += 7.6;
				$item = !$rs2->EOF?($rs2->fields['idItem'].' '.$rs2->fields['descripcion']):$item;
			}
			$this->SetXY(140, $y); $this->Cell(7, 5, substr($item, 0, 14), 0, 0, 'L');
			$y += 7;
			
			$rs->moveNext();
		}
		
		#posiciones, no se ponen
		
		#colores;
		$this->SetXY(71, 133); $this->Cell(7, 5, substr($pedido->getColores(), 0, 17), 0, 0, 'L');
		$this->SetXY(71, 139); $this->Cell(7, 5, substr($pedido->getColores(), 17, 17), 0, 0, 'L');
		$this->SetXY(71, 146); $this->Cell(7, 5, substr($pedido->getColores(), 34, 17), 0, 0, 'L');
		$this->SetXY(71, 152); $this->Cell(7, 5, substr($pedido->getColores(), 51, 17), 0, 0, 'L');
		$this->SetXY(71, 158.7); $this->Cell(7, 5, substr($pedido->getColores(), 51, 17), 0, 0, 'L');
		
		#Observaciones
		$this->SetXY(62, 180); $this->MultiCell(117, 5, $pedido->getObservaciones(), 0, 'J');
		$this->SetXY(43, 215); $this->Cell(22, 5, $pedido->getPrecio(), 0, 0, 'R');
		$this->SetXY(85, 215); $this->Cell(22, 5, $pedido->getAnticipo(), 0, 0, 'R');
		$this->SetXY(128, 215); $this->Cell(22, 5, (string) sprintf("%0.2f", $pedido->getPrecio() - $pedido->getAnticipo()), 0, 0, 'R');
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
	}

}
?>