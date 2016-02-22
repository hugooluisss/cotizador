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
    	$this->SetFont('Arial', '', 10);
	}
	
	public function generar($id){
		$this->AddPage();
		$this->Image('repositorio/img/ordendetrabajo.jpg', 0, 0);
		
		
		$pedido = $this->pedido;
		
		$this->SetFont('Arial', 'B', 10);
		$this->SetXY(15, 21); $this->Cell(15, 4, "No. Orden: ", 0, 0, 'L');
		$this->SetFont('Arial', '', 10);
		$this->SetXY(40, 21); $this->Cell(40, 4, (string )$pedido->getId(), 'B', 0, 'R');
		
		$this->SetXY(33, 48);
		$this->Cell(0, 5, $pedido->cliente->getNombre(), 0);
		$this->SetXY(33, 60);
		$this->Cell(0, 5, $pedido->cliente->getCelular(), 0);
		$this->SetXY(33, 72);
		$this->Cell(0, 5, $pedido->cliente->getEmail(), 0);
		
		#registro
		$registro = explode("-", $pedido->getRegistro());
		$this->SetXY(50, 28); $this->Cell(0, 5, $registro[2], 0);
		$this->SetXY(59, 28); $this->Cell(0, 5, $registro[1], 0);
		$this->SetXY(68, 28); $this->Cell(0, 5, $registro[0], 0);
		
		#entrega
		$entrega = explode("-", $pedido->getEntrega());
		$entregaAux = explode(" ", $entrega[2]);
		$entrega[2] = $entregaAux[0];
		$entregaHora = explode(":", $entregaAux[1]);
		$this->SetXY(50, 37); $this->Cell(0, 5, $entrega[2].'-'.$entrega[1].'-'.$entrega[0], 0);
		$this->SetXY(88, 37); $this->Cell(0, 5, $entregaHora[0], 0);
		$this->SetXY(96, 37); $this->Cell(0, 5, $entregaHora[1], 0);
		
		#Impresiones
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 4");
		if (!$rs->EOF){
			$this->SetXY(142, 47); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 5");
		if (!$rs->EOF){
			$this->SetXY(142, 51.5); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 6");
		if (!$rs->EOF){
			$this->SetXY(142, 56); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 7");
		if (!$rs->EOF){
			$this->SetXY(142, 60.5); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoimpresion where idPedido = ".$pedido->getId()." and idImpresion = 8");
		if (!$rs->EOF){
			$this->SetXY(142, 65); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		#articulos
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 10");
		if (!$rs->EOF){
			$this->SetXY(155, 47); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 11");
		if (!$rs->EOF){
			$this->SetXY(155, 51.5); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
			
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 12");
		if (!$rs->EOF){
			$this->SetXY(155, 56); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 13");
		if (!$rs->EOF){
			$this->SetXY(155, 60.5); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
		
		$rs = $db->Execute("select * from pedidoentregables where idPedido = ".$pedido->getId()." and idEntregable = 14");
		if (!$rs->EOF){
			$this->SetXY(155, 65); $this->Cell(4, 2, "", 0, 0, 'L', 1);
		}
			
		
		$this->SetXY(105, 71); $this->Cell(100, 3, $pedido->getEntregables());
		
		#Remeras
		$rs = $db->Execute("select * from movped where idPedido = ".$pedido->getId()." limit 2");
		
		$tallas = array(1, 2, 3, 4, 5, 6, 8, 10, 12, 14, 16, 'S', 'M', 'L', 'XL', 'XLL');
		$y = 91;
		while(!$rs->EOF){
			$x = 25;
			$item = '';
			foreach($tallas as $talla){
				$rs2 = $db->Execute("select * from movped join talla using(idTalla) join ropa using(idItem) where idPedido = ".$pedido->getId()." and talla.nombre = 'Talle ".$talla."'");
				
				$this->SetXY($x, $y); $this->Cell(7, 5, $rs2->fields['cantidad'] == ''?0:$rs2->fields['cantidad'], 0, 0, 'R');
				$x += 9.1;
				$item = !$rs2->EOF?($rs2->fields['idItem'].' '.$rs2->fields['descripcion']):$item;
			}
			$this->SetXY(170, $y); $this->Cell(7, 5, substr($item, 0, 14), 0, 0, 'L');
			$y += 9;
			
			$rs->moveNext();
		}
		
		#posiciones, no se ponen
		
		#colores;
		$this->SetXY(88, 153); $this->Cell(7, 5, substr($pedido->getColores(), 0, 17), 0, 0, 'L');
		$this->SetXY(88, 161); $this->Cell(7, 5, substr($pedido->getColores(), 17, 17), 0, 0, 'L');
		$this->SetXY(88, 169); $this->Cell(7, 5, substr($pedido->getColores(), 34, 17), 0, 0, 'L');
		$this->SetXY(88, 177); $this->Cell(7, 5, substr($pedido->getColores(), 51, 17), 0, 0, 'L');
		
		#Observaciones
		$this->SetXy(77, 210); $this->MultiCell(117, 5, $pedido->getObservaciones(), 0, 'J');
		$this->SetXY(60, 252); $this->Cell(22, 5, $pedido->getPrecio(), 0, 0, 'R');
		$this->SetXY(110, 252); $this->Cell(22, 5, $pedido->getAnticipo(), 0, 0, 'R');
		$this->SetXY(162, 252); $this->Cell(22, 5, (string) sprintf("%0.2f", $pedido->getPrecio() - $pedido->getAnticipo()), 0, 0, 'R');
		
		#Diseño
			
		/*$this->Ln(10);
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
		*/
		
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