<?php
/**
* TSerigrafia
* Impresión con serigrafia, el control de precios
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TSerigrafia extends TItem{
	private $descripcion;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TSerigrafia($id = ''){
		parent::TItem();
		$this->setId($id);
		$this->setTipo(2);
		
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
		$rs = $db->Execute("select * from serigrafia where idItem = ".$id);
		
		foreach($rs->fields as $field => $val)
			$this->$field = $val;
		
		return true;
	}
	
	/**
	* Establece la descripción
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
	* Retorna la descripcion
	*
	* @autor Hugo
	* @access public
	* @return string Descripcion
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
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
		
		$rs = $db->Execute("select idItem from serigrafia where idItem = ".$this->idItem);
		if ($rs->EOF){
			$rs = $db->Execute("INSERT INTO serigrafia(idItem) VALUES(".$this->idItem.");");
			if (!$rs) return false;
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE serigrafia
			SET
				descripcion = '".$this->getDescripcion()."'
			WHERE idItem = ".$this->idItem);
			
		return $rs?true:false;
	}
}
?>