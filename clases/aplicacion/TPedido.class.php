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
	private $fuente;
	private $observacionDiseno;
	private $colores;
	private $observaciones;
	private $precio;
	private $anticipo;
	private $movimientos;
	private $envoltorio;
	private $posicion;
	private $observacionPosicion;
	private $archivo;
	
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
		$this->excedelimite = false;
		
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
				case 'excedelimite': $this->excedelimite = $val == 1;
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
	* Establece la fuente de donde se capturó el pedido
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFuente($val = ''){
		$this->fuente = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre del lugar donde se capturó el pedido
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFuente(){
		return $this->fuente;
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
	* Establece la forma de entrega
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFormaEntrega($val = ""){
		$this->formaEntrega = $val;
		
		return true;
	}
	
	/**
	* Retorna la forma de entrega
	*
	* @autor Hugo
	* @access public
	* @return string decimal
	*/
	
	public function getFormaEntrega(){
		return $this->formaEntrega;
	}
	
	/**
	* Establece la dirección de envio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDireccionEnvio($val = ""){
		$this->direccionEnvio = $val;
		
		return true;
	}
	
	/**
	* Retorna la dirección de envio
	*
	* @autor Hugo
	* @access public
	* @return string Direccion
	*/
	
	public function getDireccionEnvio(){
		return $this->direccionEnvio;
	}
	
	/**
	* Establece la envoltura
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEnvoltorio($val = ""){
		$this->envoltorio = $val;
		
		return true;
	}
	
	/**
	* Retorna la envoltura
	*
	* @autor Hugo
	* @access public
	* @return string Direccion
	*/
	
	public function getEnvoltorio(){
		return $this->envoltorio;
	}
	
	/**
	* Establece la posicion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPosicion($val = ""){
		$this->posicion = $val;
		
		return true;
	}
	
	/**
	* Retorna la posicion
	*
	* @autor Hugo
	* @access public
	* @return string Direccion
	*/
	
	public function getPosicion(){
		return $this->posicion;
	}
	
	/**
	* Establece las observaciones de la posicion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setObservacionPosicion($val = ""){
		$this->observacionPosicion = $val;
		
		return true;
	}
	
	/**
	* Retorna la observacion a la posicion
	*
	* @autor Hugo
	* @access public
	* @return string Direccion
	*/
	
	public function getObservacionPosicion(){
		return $this->observacionPosicion;
	}
	
	/**
	* Establece el nombre de archivo a mostrar para el cliente
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setArchivo($val = ""){
		$this->archivo = $val;
		
		return true;
	}
	
	/**
	* Retorna el nombre de archivo
	*
	* @autor Hugo
	* @access public
	* @return string Direccion
	*/
	
	public function getArchivo(){
		return $this->archivo;
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
		
		if ($this->cliente->getId() == '' or $this->estado->getId() == '' or $sesion['usuario'] == '')
			return false;
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO pedido(idCliente, idEstado, idUsuario, registro) VALUES(".$this->cliente->getId().", ".$this->estado->getId().", ".$sesion['usuario'].", now());");
			if (!$rs) return false;
			
			$this->idPedido = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE pedido
			SET
				idEstado = ".$this->estado->getId().",
				idCliente = ".$this->cliente->getId().", ".
				#registro = '".$this->getRegistro()."',
				"entrega = '".$this->getEntrega()."',
				entregables = '".$this->getEntregables()."',
				fuente = '".$this->getFuente()."',
				colores = '".$this->getColores()."',
				observaciones = '".$this->getObservaciones()."',
				precio = ".$this->getPrecio().",
				anticipo = ".$this->getAnticipo().",
				formaEntrega = '".$this->getFormaEntrega()."',
				direccionEnvio = '".$this->getDireccionEnvio()."',
				envoltorio = '".$this->getEnvoltorio()."',
				posicion = '".$this->getPosicion()."',
				archivo = '".$this->getarchivo()."',
				observacionPosicion = '".$this->getObservacionPosicion()."'
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
			$rs = $db->Execute("insert into pedidoimpresion (idPedido, idImpresion, excede) values (".$this->getId().", ".$item->id.", ".$item->excede.")");
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
	
	/**
	* Guarda las formas de pago
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardarFormasPago($items){
		if($this->getId() == '')
			return false;
		 	
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from formasPago where idPedido = ".$this->getId());
		 
		if (!$rs) return false;
		
		foreach($items as $item){
			$rs = $db->Execute("insert into formasPago (idPedido, campo, valor) values (".$this->getId().", '".$item->campo."', '".$item->valor."')");
			if (! $rs) return false;
		}
		
		return true;
	}
	
	/**
	* Indica si alguna técnica de impresión se sobre pasa
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function getExcede(){
		if($this->getId() == '')
			return false;
		$db = TBase::conectaDB();
		$rs = $db->Execute("select count(*) as total from pedidoimpresion where idPedido = ".$this->getId()." and excede = 1");
		
		return $rs->fields['total'] > 0;
	}
	
	/**
	* Guarda la lista de numeros y letras
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardarNumerosLetras($items){
		if($this->getId() == '')
			return false;
		 	
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from pedidonumerosletras where idPedido = ".$this->getId());
		 
		if (!$rs) return false;
		
		foreach($items as $item){
			$rs = $db->Execute("insert into pedidonumerosletras (idPedido, numeros, letras, talla) values (".$this->getId().", '".$item->numero."', '".$item->nombre."', '".$item->talla."')");
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