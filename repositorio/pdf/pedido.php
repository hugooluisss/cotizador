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
		$adicionalY = -20;
		$adicionalX = -5;

		$this->AddPage();
		if ($his->formatoFondo)
			$this->Image('repositorio/img/orden.jpg', 0, 0, 190, 240);
		
		
		$pedido = $this->pedido;
		
		$this->SetFont('Arial', 'B', 8);
		$this->SetXY(96 + $adicionalX, 32.5 + $adicionalY); $this->Cell(15, 4, "No. Orden: ", 0, 0, 'L');
		$this->SetFont('Arial', '', 8);
		$this->SetXY(110 + $adicionalX, 32.5 + $adicionalY); $this->Cell(25, 4, (string )$pedido->getId(), 0, 0, 'R');
		
		$this->SetXY(24 + $adicionalX, 46 + $adicionalY);
		$this->Cell(0, 5, $pedido->cliente->getNombre(), 0);
		$this->SetXY(24 + $adicionalX, 54.5 + $adicionalY);
		$this->Cell(0, 5, $pedido->cliente->getCelular(), 0);
		$this->SetXY(24 + $adicionalX, 63 + $adicionalY);
		$this->Cell(0, 5, $pedido->cliente->getEmail(), 0);
		
		#registro
		$this->SetXY(40 + $adicionalX, 30 + $adicionalY); $this->Cell(0, 5, $pedido->getRegistro(), 0);
		
		#entrega
		$entrega = explode("-", $pedido->getEntrega());
		$entregaAux = explode(" ", $entrega[2]);
		$entrega[2] = $entregaAux[0];
		$entregaHora = explode(":", $entregaAux[1]);
		$this->SetXY(40 + $adicionalX, 37 + $adicionalY); $this->Cell(0, 5, $entrega[2].'-'.$entrega[1].'-'.$entrega[0], 0);
		$this->SetXY(65 + $adicionalX, 37 + $adicionalY); $this->Cell(0, 5, $entregaHora[0], 0);
		$this->SetXY(71 + $adicionalX, 37 + $adicionalY); $this->Cell(0, 5, $entregaHora[1], 0);
		
		#Impresiones
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 4");
		if (!$rs->EOF){
			$this->SetXY(107.5 + $adicionalX, 44.5 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 5");
		if (!$rs->EOF){
			$this->SetXY(107.5 + $adicionalX, 48 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 6");
		if (!$rs->EOF){
			$this->SetXY(107.5 + $adicionalX, 51.6  + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 7");
		if (!$rs->EOF){
			$this->SetXY(107.5 + $adicionalX, 55.1 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 8");
		if (!$rs->EOF){
			$this->SetXY(107.5 + $adicionalX, 58.7 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		#articulos
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 10");
		if (!$rs->EOF){
			$this->SetXY(117 + $adicionalX, 44.5 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 11");
		if (!$rs->EOF){
			$this->SetXY(117 + $adicionalX, 48 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
			
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 12");
		if (!$rs->EOF){
			$this->SetXY(117 + $adicionalX, 51.6 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 13");
		if (!$rs->EOF){
			$this->SetXY(117 + $adicionalX, 55.1 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 14");
		if (!$rs->EOF){
			$this->SetXY(117 + $adicionalX, 58.7 + $adicionalY); $this->Cell(3.5, 2, "", 0, 0, 'L', 1);
		}
			
		$this->SetXY(82 + $adicionalX, 63 + $adicionalY); $this->Cell(100, 3, $pedido->getEntregables());
		
		#Remeras
		$rs = $db->Execute("select idItem, idTalla from movped a join talla b using(idTalla) join ropa c using(idItem) where idPedido = ".$pedido->getId()." limit 2");
		
		$tallas = array(1, 2, 3, 4, 5, 6, 8, 10, 12, 14, 16, 'S', 'M', 'L', 'XL', 'XLL');
		#$colores = array("rojo", "roja", "azul", "amarillo", "amarilla", "verde", "gris claro", "gris oscuro", "beige", "blanco", "negro", "blanca", "azul francia", "azul marino", "azul piedra", "celeste", "bordo", "naranja", "verde militar", "verde meletton", "verde manzana", "verde ingles", "uva", "fucsia", "violeta", "turquesa", "verde italia", "arena", "marron", "marròn");
		
		$y = 78 + $adicionalY;
		#$y = 83.7 + $adicionalY;
		while(!$rs->EOF){
			$x = 16.5 + $adicionalX;
			$item = '';
			$descripcion = "";
			foreach($tallas as $talla){
				$rs2 = $db->Execute("select * from movped join talla using(idTalla) join ropa using(idItem) where idPedido = ".$pedido->getId()." and idItem = ".$rs->fields['idItem']." and talla.nombre = 'Talle ".$talla."'");
				
				$this->SetXY($x, $y); $this->Cell(7, 5, $rs2->fields['cantidad'] == ''?0:$rs2->fields['cantidad'], 0, 0, 'R');
				$x += 6.9;
				
				$item = !$rs2->EOF?($rs2->fields['descripcion']):$item;
			}
			$this->SetXY(128 + $adicionalX, $y); $this->Cell(7, 5, substr($item, 0, 20), 0, 0, 'L');
			$y += 5.7;
			
			$rs->moveNext();
		}
		
		#posiciones, no se ponen
		
		#colores;
		$this->SetXY(68 + $adicionalX, 124 + $adicionalY); $this->Cell(7, 5, utf8_decode(substr($pedido->getColores(), 0, 17)), 0, 0, 'L');
		$this->SetXY(68 + $adicionalX, 130 + $adicionalY); $this->Cell(7, 5, utf8_decode(substr($pedido->getColores(), 17, 17)), 0, 0, 'L');
		$this->SetXY(68 + $adicionalX, 136 + $adicionalY); $this->Cell(7, 5, utf8_decode(substr($pedido->getColores(), 34, 17)), 0, 0, 'L');
		$this->SetXY(68 + $adicionalX, 142 + $adicionalY); $this->Cell(7, 5, utf8_decode(substr($pedido->getColores(), 51, 17)), 0, 0, 'L');
		$this->SetXY(68 + $adicionalX, 148 + $adicionalY); $this->Cell(7, 5, utf8_decode(substr($pedido->getColores(), 51, 17)), 0, 0, 'L');
		
		#Observaciones
		$this->SetXY(62 + $adicionalX, 169 + $adicionalY); $this->MultiCell(117, 5, utf8_decode($pedido->getObservaciones()), 0, 'J');
		$this->SetXY(40 + $adicionalX, 199 + $adicionalY); $this->Cell(22, 5, $pedido->getPrecio(), 0, 0, 'R');
		$this->SetXY(78 + $adicionalX, 199 + $adicionalY); $this->Cell(22, 5, $pedido->getAnticipo(), 0, 0, 'R');
		$this->SetXY(117 + $adicionalX, 199 + $adicionalY); $this->Cell(22, 5, (string) sprintf("%0.2f", $pedido->getPrecio() - $pedido->getAnticipo()), 0, 0, 'R');
		
		$this->SetXY(12 + $adicionalX, 188 + $adicionalY); $this->Cell(40, 5, $pedido->getArchivo(), 0, 0, 'C');
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