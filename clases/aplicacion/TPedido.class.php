<?php
/**
* TPedido
* Un pedido
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TPedido{
	private $idPedido;
	public $estado;
	public $cliente;
	public $usuario;
	private $registro;
	private $entrega;
	private $entregables;
	private $diseno;
	private $observacionDiseno;
	private $colores;
	private $observaciones;
	private $precio;
	private $anticipo;
	private $movimientos;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TPedido($id = ''){
		$this->movimientos = array();
		$this->cliente = new TCliente;
		$this->estado = new TEstado;
		$this->usuario = new TUsuario;
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
		$rs = $db->Execute("select * from pedido where idPedido = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idCliente': $this->cliente = new TCliente($val); break;
				case 'idEstado': $this->estado = new TEstado($val); break;
				case 'idusuario': $this->usuario = new TUsuario($val);
				default: $this->$field = $val;
			}
		}
		
		$this->movimientos = array();
		
		/*if ($this->getId() == '') return false;
		
		$rs = $db->Execute("select * from movimiento where idCotizacion = ".$this->getId());
		while(!$rs->EOF){
			array_push($this->movimientos, $rs->fields);
			$rs->moveNext();
		}
		*/
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
		return $this->idPedido;
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
	* Establece el estado
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEstado($val = ''){
		$this->estado = new TEstado($val);
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
	
	public function setRegistro($val = ''){
		$this->registro = ($val == '')?date("Y-m-d h:i:s"):$val;
		
		return true;
	}
	
	/**
	* Retorna la fecha de registro
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRegistro(){
		return $this->registro;
	}
	
	/**
	* Establece la entrega
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEntrega($val = ''){
		$this->entrega = ($val == '')?date("Y-m-d h:i:s"):$val;
		
		return true;
	}
	
	/**
	* Retorna la fecha de entrega
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEntrega(){
		return $this->entrega;
	}
	
	/**
	* Establece la descripción de entregables
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEntregables($val = ''){
		$this->entregables = $val;
		
		return true;
	}
	
	/**
	* Retorna la descripción de entregables
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEntregables(){
		return $this->entregables;
	}
	
	/**
	* Establece el tipo de diseño
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDiseno($val = ''){
		$this->diseno = $val;
		
		return true;
	}
	
	/**
	* Retorna el tipo de diseno
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDiseno(){
		return $this->diseno;
	}
	
	/**
	* Establece las observaciones al diseno
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setObservacionDiseno($val = ''){
		$this->observacionDiseno = $val;
		
		return true;
	}
	
	/**
	* Retorna las observaciones al diseno
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getObservacionDiseno(){
		return $this->observacionDiseno;
	}
	
	/**
	* Establece la lista de colores en json
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setColores($val = ''){
		$this->colores = $val;
		
		return true;
	}
	
	/**
	* Retorna la lista de colores
	*
	* @autor Hugo
	* @access public
	* @return string JSON
	*/
	
	public function getColores(){
		return $this->colores;
	}
	
	/**
	* Establece las observaciones
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setObservaciones($val = ''){
		$this->observaciones = $val;
		
		return true;
	}
	
	/**
	* Retorna las observaciones
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getObservaciones(){
		return $this->observaciones;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPrecio($val = 0){
		$this->precio = $val;
		
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getPrecio(){
		return $this->precio == ''?0:$this->precio;
	}
	
	/**
	* Establece el anticipo
	*
	* @autor Hugo
	* @access public
	* @param decimal $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAnticipo($val = 0){
		$this->anticipo = $val;
		
		return true;
	}
	
	/**
	* Retorna el precio
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getAnticipo(){
		return $this->anticipo == ''?0:$this->anticipo;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		$db = TBase::conectaDB();
		global $sesion;
		
		if ($this->cliente->getId() == '' or $this->estado->getId() == '')
			return false;
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO pedido(idCliente, idEstado, idUsuario) VALUES(".$this->cliente->getId().", ".$this->estado->getId().", ".$sesion['usuario'].");");
			if (!$rs) return false;
			
			$this->idPedido = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE pedido
			SET
				idEstado = ".$this->estado->getId().",
				idCliente = ".$this->cliente->getId().",
				registro = '".$this->getRegistro()."',
				entrega = '".$this->getEntrega()."',
				entregables = '".$this->getEntregables()."',
				diseno = '".$this->getDiseno()."',
				observacionDiseno = '".$this->getObservacionDiseno()."',
				colores = '".$this->getColores()."',
				observaciones = '".$this->getObservaciones()."',
				precio = ".$this->getPrecio().",
				anticipo = ".$this->getAnticipo()."
			WHERE idPedido = ".$this->getId());
			
		return $rs?true:false;
	}
	
	/**
	* Guarda los movimientos en la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardarItems($items){
		if($this->getId() == '')
			return false;
		 	
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from movped where idPedido = ".$this->getId());
		 
		if (!$rs) return false;
		
		foreach($items as $item){
			$rs = $db->Execute("insert into movped (idPedido, idTalla, cantidad) values (".$this->getId().", ".$item->id.", ".$item->cantidad.")");
			if (! $rs) return false;
		}
		
		return true;
	}
	
	/**
	* Guarda los tipos de impresion en base al catálogo de impresiones
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardarTipoImpresiones($items){
		if($this->getId() == '')
			return false;
		 	
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from pedidoimpresion where idPedido = ".$this->getId());
		 
		if (!$rs) return false;
		
		foreach($items as $item){
			$rs = $db->Execute("insert into pedidoimpresion (idPedido, idImpresion) values (".$this->getId().", ".$item->id.")");
			if (! $rs) return false;
		}
		
		return true;
	}
	
	/**
	* Guarda los entregables
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardarEntregables($items){
		if($this->getId() == '')
			return false;
		 	
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from pedidoentregables where idPedido = ".$this->getId());
		 
		if (!$rs) return false;
		
		foreach($items as $item){
			$rs = $db->Execute("insert into pedidoentregables (idPedido, idEntregable) values (".$this->getId().", ".$item->id.")");
			if (! $rs) return false;
		}
		
		return true;
	}
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$db->Execute("delete from pedido where idPedido = ".$this->getId());
		
		return true;
	}
}
?>