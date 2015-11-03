<?php
/**
* TCotizacion
* Ropa que extiende de TItem
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TCotizacion{
	public $cliente;
	private $item;
	private $fecha;
	public $movimientos;
	private $subtotal;
	private $adicional;
	private $total;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TCotizacion($id = ''){
		$this->movimientos = array();
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from cotizacion where idCotizacion = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idCliente': $this->cliente = new TCliente($val); break;
				default: $this->$field = $val;
			}
		}
		
		$this->movimientos = array();
		if ($this->getId() == '') return false;
		
		$rs = $db->Execute("select * from movimiento where idCotizacion = ".$this->getId());
		while(!$rs->EOF){
			array_push($this->movimientos, $rs->fields);
			$rs->moveNext();
		}
		
		return true;
	}
	
	/**
	* Retorna el identificador del objeto
	*
	* @autor Hugo
	* @access public
	* @return integer identificador
	*/
	
	public function getId(){
		return $this->idCotizacion;
	}
	
	/**
	* Establece el cliente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCliente($val = ''){
		$this->cliente = new TCliente($val);
		return true;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece el subtotal
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSubtotal($val = 0){
		$this->subtotal = $val;
		return true;
	}
	
	/**
	* Retorna el subtotal
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSubtotal(){
		return $this->subtotal;
	}
	
	/**
	* Establece el porcentaje adicional por servicios
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAdicional($val = 0){
		$this->adicional = $val;
		return true;
	}
	
	/**
	* Retorna el porcentaje adicional
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getAdicional(){
		return $this->adicional;
	}
	
	/**
	* Establece el total
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTotal($val = 0){
		$this->total = $val;
		return true;
	}
	
	/**
	* Retorna el total
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTotal(){
		return $this->total;
	}
		
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->cliente->getId() == '') return false;
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO cotizacion(idCliente, fecha) VALUES(".$this->cliente->getId().", now());");
			$this->idCotizacion = $db->Insert_ID();
			if (!$rs) return false;
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE cotizacion
			SET
				idCliente = ".$this->cliente->getId().",
				subtotal = ".$this->getSubtotal().",
				adicional = ".$this->getAdicional().",
				total = ".$this->getTotal()."
			WHERE idCotizacion = ".$this->getId());
		
		#Ahora van los items
		$this->truncateMovimientos();
		
		$cont = 0;
		foreach($this->movimientos as $mov){
			$cont++;
			$db->Execute("insert movimiento (idCotizacion, mov, concepto, cantidad, descuento, neto, total) values (".$this->getId().", ".$cont.", '".$mov['concepto']."', ".$mov['cantidad'].", ".$mov['descuento'].", ".$mov['neto'].", ".$mov['total'].")");
		}
			
		return $rs?true:false;
	}
	
	/**
	* Movimiento
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function addMovimiento($concepto, $cantidad = 0, $descuento = 0, $neto = 0, $total = 0){
		$mov = array();
		
		$mov["concepto"] = $concepto;
		$mov["cantidad"] = $cantidad;
		$mov["descuento"] = $descuento;
		$mov["neto"] = $neto;
		$mov["total"] = $total;
		
		array_push($this->movimientos, $mov);
		
		return true;
	}
	
	public function delMovimiento($i = null){
		if ($i == null) return false;
		
		$aux = array();
		foreach($this->movimientos as $id => $mov){
			if ($key <> $i)
				array_push($aux, $mov);
		}
		
		return true;
	}
	
	public function truncateMovimientos($lista = false){
		if ($this->getId() == '') return false;
		
		if ($lista)
			$this->movimientos = array();
			
		$db = TBase::conectaDB();
		$db->Execute("delete from movimiento where idCotizacion = ".$this->getId());
	}
}
?>