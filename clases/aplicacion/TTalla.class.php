<?php
/**
* TTalla
* Tallas de la ropa
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TTalla{
	private $nombre;
	private $adicional;
	private $ropa;
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TTalla($id = ''){
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
		$rs = $db->Execute("select * from talla where idTalla = ".$id);
		
		foreach($rs->fields as $field => $val){
			switch($field){
				case 'idItem':
					$this->ropa = $val;
				break;
				default:
					$this->$field = $val;
			}
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
		return $this->idTalla;
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
	* Establece el precio adicional
	*
	* @autor Hugo
	* @access public
	* @param integer $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setAdicional($val = ''){
		$this->adicional = $val;
		return true;
	}
	
	/**
	* Retorna el precio adicional
	*
	* @autor Hugo
	* @access integer
	* @return string Texto
	*/
	
	public function getAdicional(){
		return $this->adicional;
	}
	
	/**
	* Retorna el precio neto
	*
	* @autor Hugo
	* @access integer
	* @return string Texto
	*/
	
	public function getNeto(){
		if ($this->getRopa() == '') return false;
		
		$db = TBase::conectaDB();
		
		$rs = $db->Execute("select precio from item where idItem = ".$this->getRopa());
		return ($this->getAdicional() == ''?0:$this->getAdicional()) + $rs->fields['precio'];
	}
	
	/**
	* Establece el item de tipo ropa
	*
	* @autor Hugo
	* @access public
	* @param integer $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setRopa($val = ''){
		$this->ropa = $val;
		return true;
	}
	
	/**
	* Retorna el identificador del padre
	*
	* @autor Hugo
	* @access integer
	* @return string Texto
	*/
	
	public function getRopa(){
		return $this->ropa;
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
			if ($this->getRopa() == '') return false;
			$rs = $db->Execute("INSERT INTO talla(idItem) VALUES(".$this->getRopa().");");
			if (!$rs) return false;
			
			$this->idTalla = $db->Insert_ID();
		}
		
		if ($this->getId() == '')
			return false;
			
		$rs = $db->Execute("UPDATE talla
			SET
				nombre = '".$this->getNombre()."',
				adicional = ".$this->getAdicional()."
			WHERE idTalla = ".$this->idTalla);
			
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
		$rs = $db->Execute("delete from talla where idTalla = ".$this->getId());
		
		return $rs?true:false;
	}
}
?>