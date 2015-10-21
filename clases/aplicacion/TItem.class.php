<?php
/**
* TItem
* Item
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TItem{
	protected $idItem;
	private $idTipo;
	private $nombre;
	private $precio;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TItem($id = ''){
		$this->setId($id);		
		$this->precio = 0;
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
		$rs = $db->Execute("select * from item where idItem = ".$id);
		
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
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNombre($val = ''){
		$this->nombre = $val;
		return true;
	}
	
	/**
	* Retorna el nombre
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombre(){
		return $this->nombre;
	}
	
	/**
	* Establece el tipo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipo($val = ''){
		$this->idTipo = $val;
		return true;
	}
	
	/**
	* Retorna el id del tipo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipo(){
		return $this->idTipo;
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
	* Retorna el nombre del tipo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNombreTipo(){
		if ($this->getTipo() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("select nombre from tipoItem where idTipo = ".$this->getTipo());
		
		return $rs->fields['nombre'];
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
		
		if ($this->getId() == ''){
			$rs = $db->Execute("INSERT INTO item(idTipo) VALUES(".$this->getTipo().");");
			if (!$rs) return false;
			
			$this->idItem = $db->Insert_ID();
		}		
		
		if ($this->idItem == '')
			return false;
		
		$rs = $db->Execute("UPDATE item
			SET
				nombre = '".$this->getNombre()."',
				precio = ".($this->getPrecio() <> ''?$this->getPrecio():0)."
			WHERE idItem = ".$this->idItem);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto de la base de datos
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$rs = $db->Execute("delete from item where idItem = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>