<?php
/**
* TRopa
* Ropa que extiende de TItem
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TRopa extends TItem{
	private $descripcion;
	private $precio;
	private $marca;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TRopa($id = ''){
		parent::TItem();
		$this->precio = 0;
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
		
		if (! parent::setId($id)) return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select * from ropa where idItem = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
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
		return $this->idItem;
	}
	
	/**
	* Establece el descripcion
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna el descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece el precio
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
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
	* @return string Texto
	*/
	
	public function getPrecio(){
		return $this->precio;
	}
	
	/**
	* Establece la marca
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMarca($val = ''){
		$this->marca = $val;
		return true;
	}
	
	/**
	* Retorna la marca
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMarca(){
		return $this->marca;
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
		
		//if ($this->idItem == '')
		if (! parent::guardar()) return false;
		
		$rs = $db->Execute("select idItem from ropa where idItem = ".$this->idItem);
		if ($rs->EOF){
			$rs = $db->Execute("INSERT INTO ropa(idItem, marca) VALUES(".$this->idItem.", '');");
			if (!$rs) return false;
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE ropa
			SET
				descripcion = '".$this->getDescripcion()."',
				marca = '".$this->getMarca()."',
				precio = ".($this->getPrecio() <> ''?$this->getPrecio():0)."
			WHERE idItem = ".$this->idItem);
			
		return $rs?true:false;
	}
}
?>